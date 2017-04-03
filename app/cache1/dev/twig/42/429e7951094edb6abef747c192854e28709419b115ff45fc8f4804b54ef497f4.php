<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_81f3284b463bafc10316552965d5814ec01440916d7f760815f4f3a34b3786bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
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
        $__internal_92b8e3085009960e6d9b692ca381ec33e8b41ade1475aaa9b029a51687eb96b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b8e3085009960e6d9b692ca381ec33e8b41ade1475aaa9b029a51687eb96b3->enter($__internal_92b8e3085009960e6d9b692ca381ec33e8b41ade1475aaa9b029a51687eb96b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b8e3085009960e6d9b692ca381ec33e8b41ade1475aaa9b029a51687eb96b3->leave($__internal_92b8e3085009960e6d9b692ca381ec33e8b41ade1475aaa9b029a51687eb96b3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_033c6a0e6687fe63643b098e13397f80c656ee9286cf9633c38c0de6ecd076a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033c6a0e6687fe63643b098e13397f80c656ee9286cf9633c38c0de6ecd076a3->enter($__internal_033c6a0e6687fe63643b098e13397f80c656ee9286cf9633c38c0de6ecd076a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_033c6a0e6687fe63643b098e13397f80c656ee9286cf9633c38c0de6ecd076a3->leave($__internal_033c6a0e6687fe63643b098e13397f80c656ee9286cf9633c38c0de6ecd076a3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
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
", "@SonataAdmin/CRUD/show_time.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_time.html.twig");
    }
}
