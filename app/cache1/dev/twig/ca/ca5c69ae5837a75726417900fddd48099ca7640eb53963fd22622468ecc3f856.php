<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_e4889c13ecc6d6dff9f239dc1c420f677db71e729d839b3a448c4387b3e38d3f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a3aeca774e0e2087f625671744196a80b15ae16270f0a71684589e8cd1989a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3aeca774e0e2087f625671744196a80b15ae16270f0a71684589e8cd1989a7->enter($__internal_8a3aeca774e0e2087f625671744196a80b15ae16270f0a71684589e8cd1989a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a3aeca774e0e2087f625671744196a80b15ae16270f0a71684589e8cd1989a7->leave($__internal_8a3aeca774e0e2087f625671744196a80b15ae16270f0a71684589e8cd1989a7_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ab95e8a48a352234f8e2b272b859edc367c223db3e67a983ca0cd5fa307bc02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab95e8a48a352234f8e2b272b859edc367c223db3e67a983ca0cd5fa307bc02f->enter($__internal_ab95e8a48a352234f8e2b272b859edc367c223db3e67a983ca0cd5fa307bc02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_ab95e8a48a352234f8e2b272b859edc367c223db3e67a983ca0cd5fa307bc02f->leave($__internal_ab95e8a48a352234f8e2b272b859edc367c223db3e67a983ca0cd5fa307bc02f_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_49edf17cd53a0666ae4bef1aeae917370c8ea4dfe80e99b4cc146aa0fca20ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49edf17cd53a0666ae4bef1aeae917370c8ea4dfe80e99b4cc146aa0fca20ce3->enter($__internal_49edf17cd53a0666ae4bef1aeae917370c8ea4dfe80e99b4cc146aa0fca20ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_49edf17cd53a0666ae4bef1aeae917370c8ea4dfe80e99b4cc146aa0fca20ce3->leave($__internal_49edf17cd53a0666ae4bef1aeae917370c8ea4dfe80e99b4cc146aa0fca20ce3_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_79559a84cc6cb13ca0515c1fe775938eef84449836f8415d6a2a8dafeb65afc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79559a84cc6cb13ca0515c1fe775938eef84449836f8415d6a2a8dafeb65afc5->enter($__internal_79559a84cc6cb13ca0515c1fe775938eef84449836f8415d6a2a8dafeb65afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_79559a84cc6cb13ca0515c1fe775938eef84449836f8415d6a2a8dafeb65afc5->leave($__internal_79559a84cc6cb13ca0515c1fe775938eef84449836f8415d6a2a8dafeb65afc5_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_a2e38bb19a78cee1c992647e6c9f18bc70b1f673e59e7b2329e2fb94cd666036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e38bb19a78cee1c992647e6c9f18bc70b1f673e59e7b2329e2fb94cd666036->enter($__internal_a2e38bb19a78cee1c992647e6c9f18bc70b1f673e59e7b2329e2fb94cd666036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a2e38bb19a78cee1c992647e6c9f18bc70b1f673e59e7b2329e2fb94cd666036->leave($__internal_a2e38bb19a78cee1c992647e6c9f18bc70b1f673e59e7b2329e2fb94cd666036_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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
", "@SonataAdmin/CRUD/base_acl.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_acl.html.twig");
    }
}
