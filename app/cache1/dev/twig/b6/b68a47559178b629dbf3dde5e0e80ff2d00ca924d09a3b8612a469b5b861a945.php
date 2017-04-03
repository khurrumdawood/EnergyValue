<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_6b99778566f3e42df47e20591ffeea6192eb6d46eb349da05ce9e98a6c7c44d8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d857fb1d8f6dc1a400454a775ccd7ec2b2d685a0aa8e1d4539ca8401a9d51dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d857fb1d8f6dc1a400454a775ccd7ec2b2d685a0aa8e1d4539ca8401a9d51dd8->enter($__internal_d857fb1d8f6dc1a400454a775ccd7ec2b2d685a0aa8e1d4539ca8401a9d51dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d857fb1d8f6dc1a400454a775ccd7ec2b2d685a0aa8e1d4539ca8401a9d51dd8->leave($__internal_d857fb1d8f6dc1a400454a775ccd7ec2b2d685a0aa8e1d4539ca8401a9d51dd8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_32dd6a7c852de07cecffa88c941c2551922072611cb29a0b11bc1aa5bc89104a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32dd6a7c852de07cecffa88c941c2551922072611cb29a0b11bc1aa5bc89104a->enter($__internal_32dd6a7c852de07cecffa88c941c2551922072611cb29a0b11bc1aa5bc89104a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_32dd6a7c852de07cecffa88c941c2551922072611cb29a0b11bc1aa5bc89104a->leave($__internal_32dd6a7c852de07cecffa88c941c2551922072611cb29a0b11bc1aa5bc89104a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
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
", "SonataAdminBundle:CRUD:list_date.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
