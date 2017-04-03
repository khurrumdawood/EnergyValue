<?php

/* @SonataAdmin/CRUD/show_date.html.twig */
class __TwigTemplate_7b6f4cda7f1f7bc767aaa1e9825b4d9d394498246f4a665b659003d3557dfc44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_date.html.twig", 12);
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
        $__internal_63ea4f4b0d7476ed171661141b827394fda765031cf380522f7f889f15fa3b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ea4f4b0d7476ed171661141b827394fda765031cf380522f7f889f15fa3b28->enter($__internal_63ea4f4b0d7476ed171661141b827394fda765031cf380522f7f889f15fa3b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ea4f4b0d7476ed171661141b827394fda765031cf380522f7f889f15fa3b28->leave($__internal_63ea4f4b0d7476ed171661141b827394fda765031cf380522f7f889f15fa3b28_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_12d3bf73d56ecaf5519773196da565f49679e1d94a9d1780b0d402cc3f68e0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d3bf73d56ecaf5519773196da565f49679e1d94a9d1780b0d402cc3f68e0e8->enter($__internal_12d3bf73d56ecaf5519773196da565f49679e1d94a9d1780b0d402cc3f68e0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_12d3bf73d56ecaf5519773196da565f49679e1d94a9d1780b0d402cc3f68e0e8->leave($__internal_12d3bf73d56ecaf5519773196da565f49679e1d94a9d1780b0d402cc3f68e0e8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_date.html.twig";
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
", "@SonataAdmin/CRUD/show_date.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_date.html.twig");
    }
}
