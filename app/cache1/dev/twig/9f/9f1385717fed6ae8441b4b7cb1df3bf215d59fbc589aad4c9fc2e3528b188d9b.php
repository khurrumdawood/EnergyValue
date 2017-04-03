<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_b464acd403b87351d176fa505f7b5833537e779ed080cd18e17943813928528e extends Twig_Template
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
        $__internal_f1bd7709bd1cacedae5f574c2757ed39c604f7bc07889683a1e8733d23370ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bd7709bd1cacedae5f574c2757ed39c604f7bc07889683a1e8733d23370ff4->enter($__internal_f1bd7709bd1cacedae5f574c2757ed39c604f7bc07889683a1e8733d23370ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1bd7709bd1cacedae5f574c2757ed39c604f7bc07889683a1e8733d23370ff4->leave($__internal_f1bd7709bd1cacedae5f574c2757ed39c604f7bc07889683a1e8733d23370ff4_prof);

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
", "SonataAdminBundle:CRUD:list.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
