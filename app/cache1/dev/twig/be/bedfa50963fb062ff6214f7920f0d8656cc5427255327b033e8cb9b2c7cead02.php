<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_29d01897d3ed42df7ba6ef6858810a1e8429bf2027f96280db9cb1809cd82f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_d3747190422d013ea93dc681ab06982673bf1709889b132e178d00e8efee7530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3747190422d013ea93dc681ab06982673bf1709889b132e178d00e8efee7530->enter($__internal_d3747190422d013ea93dc681ab06982673bf1709889b132e178d00e8efee7530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3747190422d013ea93dc681ab06982673bf1709889b132e178d00e8efee7530->leave($__internal_d3747190422d013ea93dc681ab06982673bf1709889b132e178d00e8efee7530_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b78f5b13f23173033e66aea0e598be1156fbbbc61afd64174efd9e45ba6d777b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78f5b13f23173033e66aea0e598be1156fbbbc61afd64174efd9e45ba6d777b->enter($__internal_b78f5b13f23173033e66aea0e598be1156fbbbc61afd64174efd9e45ba6d777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b78f5b13f23173033e66aea0e598be1156fbbbc61afd64174efd9e45ba6d777b->leave($__internal_b78f5b13f23173033e66aea0e598be1156fbbbc61afd64174efd9e45ba6d777b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
