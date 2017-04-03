<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_5fe07024021def047ff0727b038b90a4e07a50e2d6bc9af3db5f02564ceb9252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_1b13fca0415e0cd25a366cddb2db5fe5afb29bbd028742b2247e48d9af08b6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b13fca0415e0cd25a366cddb2db5fe5afb29bbd028742b2247e48d9af08b6d8->enter($__internal_1b13fca0415e0cd25a366cddb2db5fe5afb29bbd028742b2247e48d9af08b6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b13fca0415e0cd25a366cddb2db5fe5afb29bbd028742b2247e48d9af08b6d8->leave($__internal_1b13fca0415e0cd25a366cddb2db5fe5afb29bbd028742b2247e48d9af08b6d8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_96611a41165c6274500bf234218d4348cfeb7c0001d0d85b7cf36984719568d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96611a41165c6274500bf234218d4348cfeb7c0001d0d85b7cf36984719568d3->enter($__internal_96611a41165c6274500bf234218d4348cfeb7c0001d0d85b7cf36984719568d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_96611a41165c6274500bf234218d4348cfeb7c0001d0d85b7cf36984719568d3->leave($__internal_96611a41165c6274500bf234218d4348cfeb7c0001d0d85b7cf36984719568d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
