<?php

/* @SonataAdmin/CRUD/list_date.html.twig */
class __TwigTemplate_8050a86d6b84eac4296510def914ca3a44d907508bbd94cdf2d2d3335cadc5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f0cb87978ef06ad5d8cd59310b6fd816c11734210ec9c7b5089debae763e267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0cb87978ef06ad5d8cd59310b6fd816c11734210ec9c7b5089debae763e267->enter($__internal_5f0cb87978ef06ad5d8cd59310b6fd816c11734210ec9c7b5089debae763e267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0cb87978ef06ad5d8cd59310b6fd816c11734210ec9c7b5089debae763e267->leave($__internal_5f0cb87978ef06ad5d8cd59310b6fd816c11734210ec9c7b5089debae763e267_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_037dc76ab2c8ae1371c28133b33bb222b63e502a9a7cc86ac5d3f61f358a2c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037dc76ab2c8ae1371c28133b33bb222b63e502a9a7cc86ac5d3f61f358a2c62->enter($__internal_037dc76ab2c8ae1371c28133b33bb222b63e502a9a7cc86ac5d3f61f358a2c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_037dc76ab2c8ae1371c28133b33bb222b63e502a9a7cc86ac5d3f61f358a2c62->leave($__internal_037dc76ab2c8ae1371c28133b33bb222b63e502a9a7cc86ac5d3f61f358a2c62_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_date.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_date.html.twig");
    }
}
