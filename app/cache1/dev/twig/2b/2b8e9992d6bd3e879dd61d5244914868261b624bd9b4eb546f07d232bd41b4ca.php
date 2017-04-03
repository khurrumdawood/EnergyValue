<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_a6dc90b4a1516a30b3af1e3a2a445515a8807326533628aa6f3b7af41a6b5387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f15b69292ecfbd831719f73508fb947a1f0cbab7a36146ac87e26752a473f66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15b69292ecfbd831719f73508fb947a1f0cbab7a36146ac87e26752a473f66b->enter($__internal_f15b69292ecfbd831719f73508fb947a1f0cbab7a36146ac87e26752a473f66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15b69292ecfbd831719f73508fb947a1f0cbab7a36146ac87e26752a473f66b->leave($__internal_f15b69292ecfbd831719f73508fb947a1f0cbab7a36146ac87e26752a473f66b_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f915c58aa80dba8a6b2e64302e1e01e8b443bdac702f4a6e10b51a6681c83eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f915c58aa80dba8a6b2e64302e1e01e8b443bdac702f4a6e10b51a6681c83eed->enter($__internal_f915c58aa80dba8a6b2e64302e1e01e8b443bdac702f4a6e10b51a6681c83eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f915c58aa80dba8a6b2e64302e1e01e8b443bdac702f4a6e10b51a6681c83eed->leave($__internal_f915c58aa80dba8a6b2e64302e1e01e8b443bdac702f4a6e10b51a6681c83eed_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_51b51723d1cbb6a58c40c88935bba5456384a574e5ae9705824b8a9f08e394b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b51723d1cbb6a58c40c88935bba5456384a574e5ae9705824b8a9f08e394b0->enter($__internal_51b51723d1cbb6a58c40c88935bba5456384a574e5ae9705824b8a9f08e394b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_51b51723d1cbb6a58c40c88935bba5456384a574e5ae9705824b8a9f08e394b0->leave($__internal_51b51723d1cbb6a58c40c88935bba5456384a574e5ae9705824b8a9f08e394b0_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0037e5750f2102acd977ee9c8944c7341e89b55aa967f4a2e13e227abc0e892f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0037e5750f2102acd977ee9c8944c7341e89b55aa967f4a2e13e227abc0e892f->enter($__internal_0037e5750f2102acd977ee9c8944c7341e89b55aa967f4a2e13e227abc0e892f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_0037e5750f2102acd977ee9c8944c7341e89b55aa967f4a2e13e227abc0e892f->leave($__internal_0037e5750f2102acd977ee9c8944c7341e89b55aa967f4a2e13e227abc0e892f_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7071dbf96c99ba7690d568f059a87eb969abb18e19d1b99521ccaffe64b835c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7071dbf96c99ba7690d568f059a87eb969abb18e19d1b99521ccaffe64b835c6->enter($__internal_7071dbf96c99ba7690d568f059a87eb969abb18e19d1b99521ccaffe64b835c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_7071dbf96c99ba7690d568f059a87eb969abb18e19d1b99521ccaffe64b835c6->leave($__internal_7071dbf96c99ba7690d568f059a87eb969abb18e19d1b99521ccaffe64b835c6_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_4f632df552081d192873a6dae70c2df9749854b06ed18481cb700a0568effbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f632df552081d192873a6dae70c2df9749854b06ed18481cb700a0568effbbb->enter($__internal_4f632df552081d192873a6dae70c2df9749854b06ed18481cb700a0568effbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_4f632df552081d192873a6dae70c2df9749854b06ed18481cb700a0568effbbb->leave($__internal_4f632df552081d192873a6dae70c2df9749854b06ed18481cb700a0568effbbb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
