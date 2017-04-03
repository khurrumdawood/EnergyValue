<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_780551fa6553001a0d0e5f63f96f26b58551648d5cf32ec9521fe8b58acd7d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33ed7e71cf58736b217d071f549138336824ee1680072b44b671da1810d16ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ed7e71cf58736b217d071f549138336824ee1680072b44b671da1810d16ff0->enter($__internal_33ed7e71cf58736b217d071f549138336824ee1680072b44b671da1810d16ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ed7e71cf58736b217d071f549138336824ee1680072b44b671da1810d16ff0->leave($__internal_33ed7e71cf58736b217d071f549138336824ee1680072b44b671da1810d16ff0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c9788d0d88f2eb2d83d1b27858ead187f18936da59f7512eed3bc00eef785e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9788d0d88f2eb2d83d1b27858ead187f18936da59f7512eed3bc00eef785e57->enter($__internal_c9788d0d88f2eb2d83d1b27858ead187f18936da59f7512eed3bc00eef785e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_c9788d0d88f2eb2d83d1b27858ead187f18936da59f7512eed3bc00eef785e57->leave($__internal_c9788d0d88f2eb2d83d1b27858ead187f18936da59f7512eed3bc00eef785e57_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
