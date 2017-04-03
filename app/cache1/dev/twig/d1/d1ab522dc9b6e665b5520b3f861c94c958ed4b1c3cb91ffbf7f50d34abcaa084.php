<?php

/* @SonataAdmin/CRUD/show_trans.html.twig */
class __TwigTemplate_80ad0966cae150437384bdd3803ffcde9535e9b20c7b7a21eeda3e4d50009e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_trans.html.twig", 11);
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
        $__internal_40614730d49fa7af7e133ceac5f479d065c4b5ae3c2fb05b4ec32a6c00e981ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40614730d49fa7af7e133ceac5f479d065c4b5ae3c2fb05b4ec32a6c00e981ab->enter($__internal_40614730d49fa7af7e133ceac5f479d065c4b5ae3c2fb05b4ec32a6c00e981ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40614730d49fa7af7e133ceac5f479d065c4b5ae3c2fb05b4ec32a6c00e981ab->leave($__internal_40614730d49fa7af7e133ceac5f479d065c4b5ae3c2fb05b4ec32a6c00e981ab_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_c09fed538e7db046db1daffbbde50a2d5a03dcd42eea58410cba16269065c024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09fed538e7db046db1daffbbde50a2d5a03dcd42eea58410cba16269065c024->enter($__internal_c09fed538e7db046db1daffbbde50a2d5a03dcd42eea58410cba16269065c024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_c09fed538e7db046db1daffbbde50a2d5a03dcd42eea58410cba16269065c024->leave($__internal_c09fed538e7db046db1daffbbde50a2d5a03dcd42eea58410cba16269065c024_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 21,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 11,);
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
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_trans.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_trans.html.twig");
    }
}
