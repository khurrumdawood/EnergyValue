<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_afe433d0439fa04b5ae7eccbf4144fe22871317cc9d073ed710070a25460eba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84df7df2733e09f397e6ba0eb224e4121adc69f5626ac661c6311ea37d2d5ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84df7df2733e09f397e6ba0eb224e4121adc69f5626ac661c6311ea37d2d5ff6->enter($__internal_84df7df2733e09f397e6ba0eb224e4121adc69f5626ac661c6311ea37d2d5ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84df7df2733e09f397e6ba0eb224e4121adc69f5626ac661c6311ea37d2d5ff6->leave($__internal_84df7df2733e09f397e6ba0eb224e4121adc69f5626ac661c6311ea37d2d5ff6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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
", "@SonataAdmin/Pager/links.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\links.html.twig");
    }
}
