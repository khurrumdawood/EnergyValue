<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_ca109dd629af279273da019bc48770481852af61ade783d7ddf568c97cff16f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a884661463d74b73f0bcd546756bdc2d223734c1de1747d3d21b3c6e2fb26fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a884661463d74b73f0bcd546756bdc2d223734c1de1747d3d21b3c6e2fb26fe6->enter($__internal_a884661463d74b73f0bcd546756bdc2d223734c1de1747d3d21b3c6e2fb26fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a884661463d74b73f0bcd546756bdc2d223734c1de1747d3d21b3c6e2fb26fe6->leave($__internal_a884661463d74b73f0bcd546756bdc2d223734c1de1747d3d21b3c6e2fb26fe6_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5b40696e1a3d4703b38d043ab61c355d35fc090bd86b49522537b394c43c255d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b40696e1a3d4703b38d043ab61c355d35fc090bd86b49522537b394c43c255d->enter($__internal_5b40696e1a3d4703b38d043ab61c355d35fc090bd86b49522537b394c43c255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_5b40696e1a3d4703b38d043ab61c355d35fc090bd86b49522537b394c43c255d->leave($__internal_5b40696e1a3d4703b38d043ab61c355d35fc090bd86b49522537b394c43c255d_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_5f55b21131e7e33acb5c55e49184a380275d3777416bb2be985f5382cfb8bbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f55b21131e7e33acb5c55e49184a380275d3777416bb2be985f5382cfb8bbe0->enter($__internal_5f55b21131e7e33acb5c55e49184a380275d3777416bb2be985f5382cfb8bbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_5f55b21131e7e33acb5c55e49184a380275d3777416bb2be985f5382cfb8bbe0->leave($__internal_5f55b21131e7e33acb5c55e49184a380275d3777416bb2be985f5382cfb8bbe0_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_950c856e19514c5b03f4de9206701795687106dc3f2e54a8f47714291a0518a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950c856e19514c5b03f4de9206701795687106dc3f2e54a8f47714291a0518a9->enter($__internal_950c856e19514c5b03f4de9206701795687106dc3f2e54a8f47714291a0518a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_950c856e19514c5b03f4de9206701795687106dc3f2e54a8f47714291a0518a9->leave($__internal_950c856e19514c5b03f4de9206701795687106dc3f2e54a8f47714291a0518a9_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_ffc7dbd8ad84e8cf51e0b6a99e0228178116586b9326aa73c65ec41d56e6eb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc7dbd8ad84e8cf51e0b6a99e0228178116586b9326aa73c65ec41d56e6eb09->enter($__internal_ffc7dbd8ad84e8cf51e0b6a99e0228178116586b9326aa73c65ec41d56e6eb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_ffc7dbd8ad84e8cf51e0b6a99e0228178116586b9326aa73c65ec41d56e6eb09->leave($__internal_ffc7dbd8ad84e8cf51e0b6a99e0228178116586b9326aa73c65ec41d56e6eb09_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
