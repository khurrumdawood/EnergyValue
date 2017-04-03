<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_add6fee849a9a27486fdcd89f41bc21bdf22ab97b55d388481eca290be350062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_b74e36cfc6a68285dfd495402f3468e20588deb9cefe8c096603af15108e37a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74e36cfc6a68285dfd495402f3468e20588deb9cefe8c096603af15108e37a8->enter($__internal_b74e36cfc6a68285dfd495402f3468e20588deb9cefe8c096603af15108e37a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74e36cfc6a68285dfd495402f3468e20588deb9cefe8c096603af15108e37a8->leave($__internal_b74e36cfc6a68285dfd495402f3468e20588deb9cefe8c096603af15108e37a8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9992db90ae1994ecc18038d1a275a5db460fcfc35e1a0d853d1fc3e31dbd4ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9992db90ae1994ecc18038d1a275a5db460fcfc35e1a0d853d1fc3e31dbd4ad8->enter($__internal_9992db90ae1994ecc18038d1a275a5db460fcfc35e1a0d853d1fc3e31dbd4ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_9992db90ae1994ecc18038d1a275a5db460fcfc35e1a0d853d1fc3e31dbd4ad8->leave($__internal_9992db90ae1994ecc18038d1a275a5db460fcfc35e1a0d853d1fc3e31dbd4ad8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
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
", "@SonataAdmin/CRUD/show_percent.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_percent.html.twig");
    }
}
