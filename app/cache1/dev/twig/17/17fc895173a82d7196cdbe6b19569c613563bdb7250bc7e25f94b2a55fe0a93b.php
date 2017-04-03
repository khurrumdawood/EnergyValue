<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_78e7c0818ee3c34399d375a0231dedb18502d019f837655ffa0e820aa8af3bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a43d3eb121129e9a169ec3c60ca92075e9da3f1a7cec200dcd1a371f5f489a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a43d3eb121129e9a169ec3c60ca92075e9da3f1a7cec200dcd1a371f5f489a6->enter($__internal_6a43d3eb121129e9a169ec3c60ca92075e9da3f1a7cec200dcd1a371f5f489a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a43d3eb121129e9a169ec3c60ca92075e9da3f1a7cec200dcd1a371f5f489a6->leave($__internal_6a43d3eb121129e9a169ec3c60ca92075e9da3f1a7cec200dcd1a371f5f489a6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "@SonataAdmin/Pager/results.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\results.html.twig");
    }
}
