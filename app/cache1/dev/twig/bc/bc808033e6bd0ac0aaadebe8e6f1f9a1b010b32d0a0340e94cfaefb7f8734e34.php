<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ef527a2a1498c99c338a01b0e3a5b9083b694b6bd7bd02c4dd34a85bba8ead4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a2693a5fd3f966b5bde310de5c5cda7df9c8b0b36ccad749c296fb5461b9fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2693a5fd3f966b5bde310de5c5cda7df9c8b0b36ccad749c296fb5461b9fcb->enter($__internal_4a2693a5fd3f966b5bde310de5c5cda7df9c8b0b36ccad749c296fb5461b9fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2693a5fd3f966b5bde310de5c5cda7df9c8b0b36ccad749c296fb5461b9fcb->leave($__internal_4a2693a5fd3f966b5bde310de5c5cda7df9c8b0b36ccad749c296fb5461b9fcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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

{% extends \"SonataUserBundle:Security:base_login.html.twig\" %}", "FOSUserBundle:Security:login.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
