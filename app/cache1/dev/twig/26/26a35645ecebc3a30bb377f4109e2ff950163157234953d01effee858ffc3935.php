<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_c4faf466a97ba4a0e137e23b6df6adece83ce0bee9bfe638260907d7cd1420bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ac1db7eb7a9b58312d25209cb0d816c025bf3c1f5a8623f8d7067d28ca69ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac1db7eb7a9b58312d25209cb0d816c025bf3c1f5a8623f8d7067d28ca69ba7->enter($__internal_0ac1db7eb7a9b58312d25209cb0d816c025bf3c1f5a8623f8d7067d28ca69ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac1db7eb7a9b58312d25209cb0d816c025bf3c1f5a8623f8d7067d28ca69ba7->leave($__internal_0ac1db7eb7a9b58312d25209cb0d816c025bf3c1f5a8623f8d7067d28ca69ba7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "@SonataAdmin/CRUD/list_inner_row.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_inner_row.html.twig");
    }
}
