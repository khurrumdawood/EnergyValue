<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_d3e4cfb2f06fd0f9f62e0c40de8b65ab8ea2e5b46c55d55b1709757e520b2482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_43f418aa0cb37d4e8bc701ed0a70cf016914094c236f7595c265e57a850f6d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f418aa0cb37d4e8bc701ed0a70cf016914094c236f7595c265e57a850f6d7c->enter($__internal_43f418aa0cb37d4e8bc701ed0a70cf016914094c236f7595c265e57a850f6d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f418aa0cb37d4e8bc701ed0a70cf016914094c236f7595c265e57a850f6d7c->leave($__internal_43f418aa0cb37d4e8bc701ed0a70cf016914094c236f7595c265e57a850f6d7c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2881605044cf5bc0dd5a39bcc1caa63a531faed6902824e4d974a35862cf4767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2881605044cf5bc0dd5a39bcc1caa63a531faed6902824e4d974a35862cf4767->enter($__internal_2881605044cf5bc0dd5a39bcc1caa63a531faed6902824e4d974a35862cf4767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_2881605044cf5bc0dd5a39bcc1caa63a531faed6902824e4d974a35862cf4767->leave($__internal_2881605044cf5bc0dd5a39bcc1caa63a531faed6902824e4d974a35862cf4767_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
