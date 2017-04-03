<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_d604fe890ef474c96dbc797a117ea6d16ae7abecc408d9c4d4338bf46dea265a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d6bfe6943a9b6eb759206b9cb4e1fb6e49a0bd58415fcc9eba7d677d66338e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6bfe6943a9b6eb759206b9cb4e1fb6e49a0bd58415fcc9eba7d677d66338e1->enter($__internal_2d6bfe6943a9b6eb759206b9cb4e1fb6e49a0bd58415fcc9eba7d677d66338e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6bfe6943a9b6eb759206b9cb4e1fb6e49a0bd58415fcc9eba7d677d66338e1->leave($__internal_2d6bfe6943a9b6eb759206b9cb4e1fb6e49a0bd58415fcc9eba7d677d66338e1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
