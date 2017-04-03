<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_9e9d7b8274ac426ad2b77b05caedc3d01b9a9cc03454c760c37d3942aeda9370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79143f8db31dba572e47ba42a105f20b5184f2473b394adf02c87b471d5e7d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79143f8db31dba572e47ba42a105f20b5184f2473b394adf02c87b471d5e7d04->enter($__internal_79143f8db31dba572e47ba42a105f20b5184f2473b394adf02c87b471d5e7d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79143f8db31dba572e47ba42a105f20b5184f2473b394adf02c87b471d5e7d04->leave($__internal_79143f8db31dba572e47ba42a105f20b5184f2473b394adf02c87b471d5e7d04_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4ea3263cb5ed4e6fbf1ce3b9a5ff14de797a4e350442599628d7371ed299ed67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea3263cb5ed4e6fbf1ce3b9a5ff14de797a4e350442599628d7371ed299ed67->enter($__internal_4ea3263cb5ed4e6fbf1ce3b9a5ff14de797a4e350442599628d7371ed299ed67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_4ea3263cb5ed4e6fbf1ce3b9a5ff14de797a4e350442599628d7371ed299ed67->leave($__internal_4ea3263cb5ed4e6fbf1ce3b9a5ff14de797a4e350442599628d7371ed299ed67_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
