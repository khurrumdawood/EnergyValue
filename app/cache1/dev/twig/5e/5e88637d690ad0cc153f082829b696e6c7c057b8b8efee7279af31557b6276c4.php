<?php

/* SonataUserBundle:Admin:Field/impersonating.html.twig */
class __TwigTemplate_cb74f7f0268b5a0c8603aa0922c56e80f1508de78f87b6c3e11fb85cc72d7858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataUserBundle:Admin:Field/impersonating.html.twig", 12);
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
        $__internal_579ff5e3a6f69cf6e27010a532f48022de285d30b4d2e6e712e6f5f9e101ff83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579ff5e3a6f69cf6e27010a532f48022de285d30b4d2e6e712e6f5f9e101ff83->enter($__internal_579ff5e3a6f69cf6e27010a532f48022de285d30b4d2e6e712e6f5f9e101ff83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Field/impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_579ff5e3a6f69cf6e27010a532f48022de285d30b4d2e6e712e6f5f9e101ff83->leave($__internal_579ff5e3a6f69cf6e27010a532f48022de285d30b4d2e6e712e6f5f9e101ff83_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a1b460c07fce6f4ca820ea81b490e731ff349b453940c98964e465485662b6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b460c07fce6f4ca820ea81b490e731ff349b453940c98964e465485662b6a4->enter($__internal_a1b460c07fce6f4ca820ea81b490e731ff349b453940c98964e465485662b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_a1b460c07fce6f4ca820ea81b490e731ff349b453940c98964e465485662b6a4->leave($__internal_a1b460c07fce6f4ca820ea81b490e731ff349b453940c98964e465485662b6a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Field/impersonating.html.twig";
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
", "SonataUserBundle:Admin:Field/impersonating.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Admin/Field/impersonating.html.twig");
    }
}
