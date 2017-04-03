<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_e50f79a17255e1a8bcea92a6bf694da7defce59c912025dd3c56c50abb15892f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09d01bca82b3c6aa2e426d0968ccbb83cc566c2508257c243b8414d276187b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d01bca82b3c6aa2e426d0968ccbb83cc566c2508257c243b8414d276187b09->enter($__internal_09d01bca82b3c6aa2e426d0968ccbb83cc566c2508257c243b8414d276187b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d01bca82b3c6aa2e426d0968ccbb83cc566c2508257c243b8414d276187b09->leave($__internal_09d01bca82b3c6aa2e426d0968ccbb83cc566c2508257c243b8414d276187b09_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_778fd67d43d15ccca3b0dd4ffab9d736f836e634216fa2a6eef98ee7b99c7017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778fd67d43d15ccca3b0dd4ffab9d736f836e634216fa2a6eef98ee7b99c7017->enter($__internal_778fd67d43d15ccca3b0dd4ffab9d736f836e634216fa2a6eef98ee7b99c7017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_778fd67d43d15ccca3b0dd4ffab9d736f836e634216fa2a6eef98ee7b99c7017->leave($__internal_778fd67d43d15ccca3b0dd4ffab9d736f836e634216fa2a6eef98ee7b99c7017_prof);

    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "@KnpMenu/menu.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\knplabs\\knp-menu-bundle\\Resources\\views\\menu.html.twig");
    }
}
