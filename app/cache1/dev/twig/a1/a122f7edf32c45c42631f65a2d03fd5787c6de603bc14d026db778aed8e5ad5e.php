<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_b2f84066f2d0fd234712a361793bb130f9a71f685b6b69fef016d7b619c5e328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef62991bf5f789b0ad604a2d4044d255c68a8f334902cad17f97d40675a43c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef62991bf5f789b0ad604a2d4044d255c68a8f334902cad17f97d40675a43c9c->enter($__internal_ef62991bf5f789b0ad604a2d4044d255c68a8f334902cad17f97d40675a43c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef62991bf5f789b0ad604a2d4044d255c68a8f334902cad17f97d40675a43c9c->leave($__internal_ef62991bf5f789b0ad604a2d4044d255c68a8f334902cad17f97d40675a43c9c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list.html.twig");
    }
}
