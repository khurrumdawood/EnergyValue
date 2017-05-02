<?php

namespace VaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class admindashboardController extends Controller
{
    /**
     * Matches admin/dashboard/*
     *
     * @Route("/admin/dashboard", name="admindashboard")
     */
    public function admindashboardAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if(is_object($user)){
            $login_user_id = $user->getId();
            $council_repository = $this->getDoctrine()->getRepository('VaultBundle:Council');
            $counciles = $council_repository->findByUserCouncil($login_user_id);

            $consumption_repository = $this->getDoctrine()->getRepository('VaultBundle:Consumption');
            $result = $consumption_repository->get_weekely_all_consumed_units();

            $series = array();
            if($result) {
                foreach($result as $res){
                    $total = (float) $res['Total'];
                    $dates = trim(str_replace('00:00:00','',$res['period']));
                    $series[$dates] = $total;
                }
            }

            $default_chart = json_encode((array('graph_series' => $series, 'title' => "Last Week Total Consumption")));

            return $this->render('VaultBundle:admindashboard:index.html.twig', array(
                'counciles' => $counciles, 'default_chart' => $default_chart
            ));
        }else{
            return $this->redirect('admin');
        }
    }

    /**
     * @Route("admin/showchart", name="showchart")
     */
    public function showchartAction(Request $request)
    {
        $data = $request->request->all();
        $selected_time_period = $data['time_period'];
        $selected_utility_type = $data['utility_type'];
        $selected_site = $data['site'];
        $selected_council = $data['council'];
        $selected_chart_for = $data['chart_for'];

        if($selected_chart_for == "cost_in"){
            $consumption_repository = $this->getDoctrine()->getRepository('VaultBundle:Billing');
            $result = $consumption_repository->get_billing_with_period($selected_time_period,$selected_utility_type,$selected_council,$selected_site);
        }else{
            $consumption_repository = $this->getDoctrine()->getRepository('VaultBundle:Consumption');
            $result = $consumption_repository->get_consumed_units_with_period($selected_time_period,$selected_utility_type,$selected_council,$selected_site);
        }

        $series = array();
        if($result) {
            foreach($result as $res){
                $total = $res['Total'];
                $dates = trim(str_replace('00:00:00','',$res['period']));
                $series[$dates] = $total;
            }
        }


        if($selected_chart_for) {
            if($selected_time_period == 1){
                $title = "Last Week";
            }elseif($selected_time_period == 2){
                $title = "Last Month";
            }else{
                if($selected_time_period > 12){
                    $title = ($selected_time_period/12)." Year" ;
                }else{
                    $title = $selected_time_period." Months" ;
                }

            }

            if ($selected_chart_for == "kwh") {
                $chart_title = "KWH over time period (" . $title . ")";
            } elseif ($selected_chart_for == "cost_in") {
                $chart_title = "Cost in (£) over time period (" . $title . ")";
            }
        }else{
            if($selected_time_period == 1){
                $chart_title = "Last Week";
            }elseif($selected_time_period == 2){
                $chart_title = "Last Month";
            }else{
                $chart_title = $selected_time_period." Months";
            }
        }

        print json_encode((array('graph_series' => $series, 'title' => $chart_title)));
        return new Response();
    }

    /**
     * @Route("admin/getsiteslist", name="getsiteslist")
     */
    public function getsiteslistAction(Request $request)
    {
        $data = $request->request->all();
        $selected_council = $data['council'];

        $repository = $this->getDoctrine()->getRepository('VaultBundle:Site');
        //$sites = $repository->findByCouncilId($selected_council);

        if($selected_council > 0){
            $sites = $repository->get_all_sites($selected_council);
        }else{
            $sites = '';
        }

        $sites_list = '<option value="">Select Site</option>';
        if($sites){
            foreach($sites as $site){
                $sites_list .= '<option value="'.$site['id'].'">'.$site['name'].'</option>';
            }
        }

        print $sites_list;

        return new Response();
    }
}