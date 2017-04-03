<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_aa05ab4959237c0515198bc0152d3b2645c6d415980b047fbc1f1eacb2040aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d92c3cf7aea9b980e308933e20b2a04774096b8c13788ca81cb256772f8dcf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92c3cf7aea9b980e308933e20b2a04774096b8c13788ca81cb256772f8dcf81->enter($__internal_d92c3cf7aea9b980e308933e20b2a04774096b8c13788ca81cb256772f8dcf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92c3cf7aea9b980e308933e20b2a04774096b8c13788ca81cb256772f8dcf81->leave($__internal_d92c3cf7aea9b980e308933e20b2a04774096b8c13788ca81cb256772f8dcf81_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "@SonataAdmin/CRUD/edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit.html.twig");
    }
}
