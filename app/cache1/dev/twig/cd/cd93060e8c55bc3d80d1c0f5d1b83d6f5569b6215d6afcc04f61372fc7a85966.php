<?php

/* @SonataAdmin/CRUD/delete.html.twig */
class __TwigTemplate_53bfbd46290462747eaf5605cf567f5283a7356d0b5ca217c513b6ee5527c438 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91624205c4169e50b26de6f9b5e56d2d87702f0b082af5f9b76b7316a081dc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91624205c4169e50b26de6f9b5e56d2d87702f0b082af5f9b76b7316a081dc85->enter($__internal_91624205c4169e50b26de6f9b5e56d2d87702f0b082af5f9b76b7316a081dc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91624205c4169e50b26de6f9b5e56d2d87702f0b082af5f9b76b7316a081dc85->leave($__internal_91624205c4169e50b26de6f9b5e56d2d87702f0b082af5f9b76b7316a081dc85_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e6c53046a86ee22b8ae80750a23e641f609cb29e3841df354574dda1cb8d34be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c53046a86ee22b8ae80750a23e641f609cb29e3841df354574dda1cb8d34be->enter($__internal_e6c53046a86ee22b8ae80750a23e641f609cb29e3841df354574dda1cb8d34be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/delete.html.twig", 15)->display($context);
        
        $__internal_e6c53046a86ee22b8ae80750a23e641f609cb29e3841df354574dda1cb8d34be->leave($__internal_e6c53046a86ee22b8ae80750a23e641f609cb29e3841df354574dda1cb8d34be_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0188cf3931eeee0f35c8eb9b5ad4b185afff810b02ca3eff8694e975c9087ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0188cf3931eeee0f35c8eb9b5ad4b185afff810b02ca3eff8694e975c9087ec6->enter($__internal_0188cf3931eeee0f35c8eb9b5ad4b185afff810b02ca3eff8694e975c9087ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_0188cf3931eeee0f35c8eb9b5ad4b185afff810b02ca3eff8694e975c9087ec6->leave($__internal_0188cf3931eeee0f35c8eb9b5ad4b185afff810b02ca3eff8694e975c9087ec6_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_156f6dbd47a654b27cf09898092c09ad64bb6f0d0dcc70151ffe413b180b7d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156f6dbd47a654b27cf09898092c09ad64bb6f0d0dcc70151ffe413b180b7d63->enter($__internal_156f6dbd47a654b27cf09898092c09ad64bb6f0d0dcc70151ffe413b180b7d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_156f6dbd47a654b27cf09898092c09ad64bb6f0d0dcc70151ffe413b180b7d63->leave($__internal_156f6dbd47a654b27cf09898092c09ad64bb6f0d0dcc70151ffe413b180b7d63_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  111 => 41,  106 => 39,  100 => 37,  98 => 36,  94 => 35,  89 => 33,  84 => 31,  78 => 28,  72 => 25,  66 => 21,  60 => 20,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.isGranted('EDIT', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/delete.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\delete.html.twig");
    }
}
