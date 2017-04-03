<?php

/* SonataUserBundle:Admin/Field:impersonating.html.twig */
class __TwigTemplate_b67e0f88425ac9ad32e4a798f0c7a0cb8e6d4816f04dc476797efc139de151c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataUserBundle:Admin/Field:impersonating.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9b94d633d9f495c5170b55ae4c4ac7ee7f05476d9b07d2989799ec16d84a15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b94d633d9f495c5170b55ae4c4ac7ee7f05476d9b07d2989799ec16d84a15c->enter($__internal_a9b94d633d9f495c5170b55ae4c4ac7ee7f05476d9b07d2989799ec16d84a15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Field:impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b94d633d9f495c5170b55ae4c4ac7ee7f05476d9b07d2989799ec16d84a15c->leave($__internal_a9b94d633d9f495c5170b55ae4c4ac7ee7f05476d9b07d2989799ec16d84a15c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7df08cbd9a4c5ba679c1babc7647c123275045e54088bbe20de71b030d45b0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df08cbd9a4c5ba679c1babc7647c123275045e54088bbe20de71b030d45b0a8->enter($__internal_7df08cbd9a4c5ba679c1babc7647c123275045e54088bbe20de71b030d45b0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
    ";
        } else {
            // line 20
            echo "        -
    ";
        }
        
        $__internal_7df08cbd9a4c5ba679c1babc7647c123275045e54088bbe20de71b030d45b0a8->leave($__internal_7df08cbd9a4c5ba679c1babc7647c123275045e54088bbe20de71b030d45b0a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Field:impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if app.user and object.username != app.user.username and sonata_user.impersonating %}
        <a href=\"{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters | merge({'_switch_user': object.username})) }}\" title=\"{{ 'switch_user'|trans({}, 'SonataUserBundle')}}\">
            <i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
    {% else %}
        -
    {% endif %}
{% endblock %}
", "SonataUserBundle:Admin/Field:impersonating.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Admin/Field/impersonating.html.twig");
    }
}
