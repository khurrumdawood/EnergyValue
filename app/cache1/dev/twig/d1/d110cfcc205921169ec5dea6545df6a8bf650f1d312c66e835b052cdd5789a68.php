<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_653fff703a84b22cc38b93b19543d3bb5463fb78eee87ebe36d89d3b6aa46113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "@FOSUser/Security/login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f5c6b6f55b8fd3f00e487c9c97f1982c730f4d31c353666e8c0afd6b3e5fa53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5c6b6f55b8fd3f00e487c9c97f1982c730f4d31c353666e8c0afd6b3e5fa53->enter($__internal_6f5c6b6f55b8fd3f00e487c9c97f1982c730f4d31c353666e8c0afd6b3e5fa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5c6b6f55b8fd3f00e487c9c97f1982c730f4d31c353666e8c0afd6b3e5fa53->leave($__internal_6f5c6b6f55b8fd3f00e487c9c97f1982c730f4d31c353666e8c0afd6b3e5fa53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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

{% extends \"SonataUserBundle:Security:base_login.html.twig\" %}", "@FOSUser/Security/login.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}