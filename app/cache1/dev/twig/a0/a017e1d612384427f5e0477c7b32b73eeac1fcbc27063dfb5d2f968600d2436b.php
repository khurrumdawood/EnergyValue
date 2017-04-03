<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_320deac22057fd07c4fd6d6c9956d67ad4da5b6ae4bf14daf4c62dceb06cf0e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_4b0413ef0d6ec339c67d81604725ece618840baf0f7a7346fa1158d3f9151677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0413ef0d6ec339c67d81604725ece618840baf0f7a7346fa1158d3f9151677->enter($__internal_4b0413ef0d6ec339c67d81604725ece618840baf0f7a7346fa1158d3f9151677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0413ef0d6ec339c67d81604725ece618840baf0f7a7346fa1158d3f9151677->leave($__internal_4b0413ef0d6ec339c67d81604725ece618840baf0f7a7346fa1158d3f9151677_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2c6f5ba41cd63fd0f0a1840911fc1904327cc99999d304ec223c2f53b12baec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6f5ba41cd63fd0f0a1840911fc1904327cc99999d304ec223c2f53b12baec2->enter($__internal_2c6f5ba41cd63fd0f0a1840911fc1904327cc99999d304ec223c2f53b12baec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_2c6f5ba41cd63fd0f0a1840911fc1904327cc99999d304ec223c2f53b12baec2->leave($__internal_2c6f5ba41cd63fd0f0a1840911fc1904327cc99999d304ec223c2f53b12baec2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_currency.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_currency.html.twig");
    }
}
