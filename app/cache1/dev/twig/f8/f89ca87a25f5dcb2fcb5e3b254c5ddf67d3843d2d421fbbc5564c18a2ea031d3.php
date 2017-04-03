<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_491656030e807baccea63c9f8cd49be20ec6bed719de37902085ea2508750e8c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b0a3300f9f96b60b18b3173bbbdc5c2bb8b750b51e20a29c6d8c33c1e870783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0a3300f9f96b60b18b3173bbbdc5c2bb8b750b51e20a29c6d8c33c1e870783->enter($__internal_6b0a3300f9f96b60b18b3173bbbdc5c2bb8b750b51e20a29c6d8c33c1e870783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b0a3300f9f96b60b18b3173bbbdc5c2bb8b750b51e20a29c6d8c33c1e870783->leave($__internal_6b0a3300f9f96b60b18b3173bbbdc5c2bb8b750b51e20a29c6d8c33c1e870783_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6b7ee1cf1b3d4c7a85580d8f9110eb1dce64ce1a7cf94eabec5c85193a7ec032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7ee1cf1b3d4c7a85580d8f9110eb1dce64ce1a7cf94eabec5c85193a7ec032->enter($__internal_6b7ee1cf1b3d4c7a85580d8f9110eb1dce64ce1a7cf94eabec5c85193a7ec032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_6b7ee1cf1b3d4c7a85580d8f9110eb1dce64ce1a7cf94eabec5c85193a7ec032->leave($__internal_6b7ee1cf1b3d4c7a85580d8f9110eb1dce64ce1a7cf94eabec5c85193a7ec032_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9659e5b9351b0f1d30c3ed19566a55fa7c86227d83d92d609530856af1476522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9659e5b9351b0f1d30c3ed19566a55fa7c86227d83d92d609530856af1476522->enter($__internal_9659e5b9351b0f1d30c3ed19566a55fa7c86227d83d92d609530856af1476522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_9659e5b9351b0f1d30c3ed19566a55fa7c86227d83d92d609530856af1476522->leave($__internal_9659e5b9351b0f1d30c3ed19566a55fa7c86227d83d92d609530856af1476522_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_22b9692f5318ce42b9af58b0867d7b776067e6b800cbe19c144db5aad36cd56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b9692f5318ce42b9af58b0867d7b776067e6b800cbe19c144db5aad36cd56c->enter($__internal_22b9692f5318ce42b9af58b0867d7b776067e6b800cbe19c144db5aad36cd56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_22b9692f5318ce42b9af58b0867d7b776067e6b800cbe19c144db5aad36cd56c->leave($__internal_22b9692f5318ce42b9af58b0867d7b776067e6b800cbe19c144db5aad36cd56c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
", "@SonataAdmin/CRUD/action.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
