<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_644753734b0beaddd334d31fd7e46b61cbd19bc846d59102dfdf2528a7e1ad5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3dffa2c75a2acf27a7e2d91b9561957a1df644edc8022079c7fc831b1d6f662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dffa2c75a2acf27a7e2d91b9561957a1df644edc8022079c7fc831b1d6f662->enter($__internal_a3dffa2c75a2acf27a7e2d91b9561957a1df644edc8022079c7fc831b1d6f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3dffa2c75a2acf27a7e2d91b9561957a1df644edc8022079c7fc831b1d6f662->leave($__internal_a3dffa2c75a2acf27a7e2d91b9561957a1df644edc8022079c7fc831b1d6f662_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
