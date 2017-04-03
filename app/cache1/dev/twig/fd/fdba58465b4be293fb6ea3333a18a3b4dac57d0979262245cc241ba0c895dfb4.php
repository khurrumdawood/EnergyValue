<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_6d0aaf0c3c87c216dbc4270909323fab2ff8d5829c00f8fc0c8939778c8258a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea0ee56c341cc09cd4fe74324eec53cc2ff6331c23e5c359d4f29343d8d37603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0ee56c341cc09cd4fe74324eec53cc2ff6331c23e5c359d4f29343d8d37603->enter($__internal_ea0ee56c341cc09cd4fe74324eec53cc2ff6331c23e5c359d4f29343d8d37603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0ee56c341cc09cd4fe74324eec53cc2ff6331c23e5c359d4f29343d8d37603->leave($__internal_ea0ee56c341cc09cd4fe74324eec53cc2ff6331c23e5c359d4f29343d8d37603_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f7d36f07cec22ce6afab01754bd0c61fcbc13595af2aa3658f69d798b01d520f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d36f07cec22ce6afab01754bd0c61fcbc13595af2aa3658f69d798b01d520f->enter($__internal_f7d36f07cec22ce6afab01754bd0c61fcbc13595af2aa3658f69d798b01d520f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_f7d36f07cec22ce6afab01754bd0c61fcbc13595af2aa3658f69d798b01d520f->leave($__internal_f7d36f07cec22ce6afab01754bd0c61fcbc13595af2aa3658f69d798b01d520f_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6645070906eb0c85bb522330350c1c234dea32ac03e8f064d89307c0bcbc5155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6645070906eb0c85bb522330350c1c234dea32ac03e8f064d89307c0bcbc5155->enter($__internal_6645070906eb0c85bb522330350c1c234dea32ac03e8f064d89307c0bcbc5155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_6645070906eb0c85bb522330350c1c234dea32ac03e8f064d89307c0bcbc5155->leave($__internal_6645070906eb0c85bb522330350c1c234dea32ac03e8f064d89307c0bcbc5155_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_829ce31c1f665598a5ecd3aa0096b2f6ad02091009f9e63d37d8f802885793d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829ce31c1f665598a5ecd3aa0096b2f6ad02091009f9e63d37d8f802885793d5->enter($__internal_829ce31c1f665598a5ecd3aa0096b2f6ad02091009f9e63d37d8f802885793d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_829ce31c1f665598a5ecd3aa0096b2f6ad02091009f9e63d37d8f802885793d5->leave($__internal_829ce31c1f665598a5ecd3aa0096b2f6ad02091009f9e63d37d8f802885793d5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
