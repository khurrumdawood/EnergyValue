<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_1b8ff41cf94a5772fb4e5a15db51dd9c61093d1c1127a98a13ab43cb4f6f6dcf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef9287fba0b4c4dda1a94a07e96a94991561cd6b8a5f81e7090144481e7fed15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9287fba0b4c4dda1a94a07e96a94991561cd6b8a5f81e7090144481e7fed15->enter($__internal_ef9287fba0b4c4dda1a94a07e96a94991561cd6b8a5f81e7090144481e7fed15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9287fba0b4c4dda1a94a07e96a94991561cd6b8a5f81e7090144481e7fed15->leave($__internal_ef9287fba0b4c4dda1a94a07e96a94991561cd6b8a5f81e7090144481e7fed15_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_10d34d7e9e66d58d550d6ae76b98329b00d30777c492152dda0d27752f48208e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d34d7e9e66d58d550d6ae76b98329b00d30777c492152dda0d27752f48208e->enter($__internal_10d34d7e9e66d58d550d6ae76b98329b00d30777c492152dda0d27752f48208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_10d34d7e9e66d58d550d6ae76b98329b00d30777c492152dda0d27752f48208e->leave($__internal_10d34d7e9e66d58d550d6ae76b98329b00d30777c492152dda0d27752f48208e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
