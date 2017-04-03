<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_a30e2a3d75af60c3da2df8f8c31f4031eb2717eef886b11d8a77a38189143eba extends Twig_Template
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
        $__internal_9122bc8e50f0516e2d28a4dfe25229d8cd19bc5128e39f4584aaf12d411f9ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9122bc8e50f0516e2d28a4dfe25229d8cd19bc5128e39f4584aaf12d411f9ac9->enter($__internal_9122bc8e50f0516e2d28a4dfe25229d8cd19bc5128e39f4584aaf12d411f9ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9122bc8e50f0516e2d28a4dfe25229d8cd19bc5128e39f4584aaf12d411f9ac9->leave($__internal_9122bc8e50f0516e2d28a4dfe25229d8cd19bc5128e39f4584aaf12d411f9ac9_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_8a02cf91d6c638307f7a418d547ac9f517fdf1efabe191a100a1dbed8a6a828f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a02cf91d6c638307f7a418d547ac9f517fdf1efabe191a100a1dbed8a6a828f->enter($__internal_8a02cf91d6c638307f7a418d547ac9f517fdf1efabe191a100a1dbed8a6a828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

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
        
        $__internal_8a02cf91d6c638307f7a418d547ac9f517fdf1efabe191a100a1dbed8a6a828f->leave($__internal_8a02cf91d6c638307f7a418d547ac9f517fdf1efabe191a100a1dbed8a6a828f_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_8982eab5203266e3b7d732d6f74bfef1b5fc33ba9b4ed947e2a1e6836ee85783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8982eab5203266e3b7d732d6f74bfef1b5fc33ba9b4ed947e2a1e6836ee85783->enter($__internal_8982eab5203266e3b7d732d6f74bfef1b5fc33ba9b4ed947e2a1e6836ee85783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8982eab5203266e3b7d732d6f74bfef1b5fc33ba9b4ed947e2a1e6836ee85783->leave($__internal_8982eab5203266e3b7d732d6f74bfef1b5fc33ba9b4ed947e2a1e6836ee85783_prof);

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
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_boolean.html.twig");
    }
}
