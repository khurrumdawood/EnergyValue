<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig */
class __TwigTemplate_c27dea6683bea1843d4700cb6d1d3fac34677e58af191b060afba674375102f8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcd57ba0b74c8b26a81d06c6fc938779a727009efcad1abee0e348a2e54896c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd57ba0b74c8b26a81d06c6fc938779a727009efcad1abee0e348a2e54896c7->enter($__internal_fcd57ba0b74c8b26a81d06c6fc938779a727009efcad1abee0e348a2e54896c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd57ba0b74c8b26a81d06c6fc938779a727009efcad1abee0e348a2e54896c7->leave($__internal_fcd57ba0b74c8b26a81d06c6fc938779a727009efcad1abee0e348a2e54896c7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_738973fdcb62ba1a67c2778cf18f09b5d4bcdb46449eb9e0ada7d116500b3a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738973fdcb62ba1a67c2778cf18f09b5d4bcdb46449eb9e0ada7d116500b3a01->enter($__internal_738973fdcb62ba1a67c2778cf18f09b5d4bcdb46449eb9e0ada7d116500b3a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
            // line 17
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_738973fdcb62ba1a67c2778cf18f09b5d4bcdb46449eb9e0ada7d116500b3a01->leave($__internal_738973fdcb62ba1a67c2778cf18f09b5d4bcdb46449eb9e0ada7d116500b3a01_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin and field_description.associationadmin.id(value) and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">{{ value|render_relation_element(field_description) }}</a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_one_to_one.html.twig");
    }
}
