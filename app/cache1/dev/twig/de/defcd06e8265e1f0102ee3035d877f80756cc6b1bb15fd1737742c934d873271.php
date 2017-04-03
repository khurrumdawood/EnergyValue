<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_8fa954a6992d2ea8726552720772a94382b65cb5adf497eeac9066e3240385dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ff833d11fe061fafa29e3bd999d8cc45a679a5a0a6da613ce39bfdfe6dad7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff833d11fe061fafa29e3bd999d8cc45a679a5a0a6da613ce39bfdfe6dad7cd->enter($__internal_1ff833d11fe061fafa29e3bd999d8cc45a679a5a0a6da613ce39bfdfe6dad7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff833d11fe061fafa29e3bd999d8cc45a679a5a0a6da613ce39bfdfe6dad7cd->leave($__internal_1ff833d11fe061fafa29e3bd999d8cc45a679a5a0a6da613ce39bfdfe6dad7cd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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
", "@SonataAdmin/CRUD/list.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list.html.twig");
    }
}
