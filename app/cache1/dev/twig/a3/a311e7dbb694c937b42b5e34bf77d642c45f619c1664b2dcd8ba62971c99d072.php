<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_113811963b935a366ceaaccbdabdf7d84863a24f708769f7887b43ace60af563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_083f42dbceb087bd6e26a5211864a43e3fb85c2fb4973e101ca8a9049d7ee1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083f42dbceb087bd6e26a5211864a43e3fb85c2fb4973e101ca8a9049d7ee1a0->enter($__internal_083f42dbceb087bd6e26a5211864a43e3fb85c2fb4973e101ca8a9049d7ee1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_083f42dbceb087bd6e26a5211864a43e3fb85c2fb4973e101ca8a9049d7ee1a0->leave($__internal_083f42dbceb087bd6e26a5211864a43e3fb85c2fb4973e101ca8a9049d7ee1a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
