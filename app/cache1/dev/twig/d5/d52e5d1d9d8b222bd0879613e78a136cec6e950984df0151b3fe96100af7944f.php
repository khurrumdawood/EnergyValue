<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_8c5db1ef7ebb9f063de17bc92926466dff09e07e77147075dc34c092cd9b6601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4344762006a2c17a708f2aade49a0e359b62c971850a42be5d1e14d6f42791bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4344762006a2c17a708f2aade49a0e359b62c971850a42be5d1e14d6f42791bb->enter($__internal_4344762006a2c17a708f2aade49a0e359b62c971850a42be5d1e14d6f42791bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4344762006a2c17a708f2aade49a0e359b62c971850a42be5d1e14d6f42791bb->leave($__internal_4344762006a2c17a708f2aade49a0e359b62c971850a42be5d1e14d6f42791bb_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_6901ebb0ca9076b520e3d19c94268a392ed38b7f9cb1d7d3fa817cc7f9cdaf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6901ebb0ca9076b520e3d19c94268a392ed38b7f9cb1d7d3fa817cc7f9cdaf70->enter($__internal_6901ebb0ca9076b520e3d19c94268a392ed38b7f9cb1d7d3fa817cc7f9cdaf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_6901ebb0ca9076b520e3d19c94268a392ed38b7f9cb1d7d3fa817cc7f9cdaf70->leave($__internal_6901ebb0ca9076b520e3d19c94268a392ed38b7f9cb1d7d3fa817cc7f9cdaf70_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_e97c8ccb9901e367af028bbf31718bb6d7fa5e9b07d99f75bee292df931e62d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97c8ccb9901e367af028bbf31718bb6d7fa5e9b07d99f75bee292df931e62d5->enter($__internal_e97c8ccb9901e367af028bbf31718bb6d7fa5e9b07d99f75bee292df931e62d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_e97c8ccb9901e367af028bbf31718bb6d7fa5e9b07d99f75bee292df931e62d5->leave($__internal_e97c8ccb9901e367af028bbf31718bb6d7fa5e9b07d99f75bee292df931e62d5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  75 => 26,  73 => 25,  67 => 23,  61 => 22,  53 => 19,  50 => 18,  44 => 16,  41 => 15,  35 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
