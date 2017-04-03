<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_41cb211e795ac05b3127681dd168293845aee794de1e30a678f80414bf2189e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f62ac41ecd9817fbad431495865f9a5ba33190f3703718ac6a0bc3d69e7a83d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62ac41ecd9817fbad431495865f9a5ba33190f3703718ac6a0bc3d69e7a83d1->enter($__internal_f62ac41ecd9817fbad431495865f9a5ba33190f3703718ac6a0bc3d69e7a83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f62ac41ecd9817fbad431495865f9a5ba33190f3703718ac6a0bc3d69e7a83d1->leave($__internal_f62ac41ecd9817fbad431495865f9a5ba33190f3703718ac6a0bc3d69e7a83d1_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_9f5c667c16e83784752a317e822e12f88d8f3ea67e2e3d181b155a26e07ec5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5c667c16e83784752a317e822e12f88d8f3ea67e2e3d181b155a26e07ec5c8->enter($__internal_9f5c667c16e83784752a317e822e12f88d8f3ea67e2e3d181b155a26e07ec5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_9f5c667c16e83784752a317e822e12f88d8f3ea67e2e3d181b155a26e07ec5c8->leave($__internal_9f5c667c16e83784752a317e822e12f88d8f3ea67e2e3d181b155a26e07ec5c8_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_600366773bb6b11a32c82816bdf48bc6a75b55a45635625d91a1b62fb7ab2579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600366773bb6b11a32c82816bdf48bc6a75b55a45635625d91a1b62fb7ab2579->enter($__internal_600366773bb6b11a32c82816bdf48bc6a75b55a45635625d91a1b62fb7ab2579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_600366773bb6b11a32c82816bdf48bc6a75b55a45635625d91a1b62fb7ab2579->leave($__internal_600366773bb6b11a32c82816bdf48bc6a75b55a45635625d91a1b62fb7ab2579_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  88 => 31,  82 => 29,  79 => 28,  76 => 27,  70 => 26,  63 => 23,  56 => 21,  51 => 20,  48 => 19,  42 => 18,  35 => 12,  32 => 17,  30 => 15,  28 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {% spaceless %}
        {% if value %}
            <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
        {% else %}
            <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
        {% endif %}
    {% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
