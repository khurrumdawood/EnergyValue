<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_acd20e1c2dd5706918daf8c8a9266548f75fdfd15f496a41405a2b573f7d4aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c92374f098c7e80a6e3fd8b29549b020619ff31830925a4cdc39ea2ec4416cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c92374f098c7e80a6e3fd8b29549b020619ff31830925a4cdc39ea2ec4416cf->enter($__internal_5c92374f098c7e80a6e3fd8b29549b020619ff31830925a4cdc39ea2ec4416cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c92374f098c7e80a6e3fd8b29549b020619ff31830925a4cdc39ea2ec4416cf->leave($__internal_5c92374f098c7e80a6e3fd8b29549b020619ff31830925a4cdc39ea2ec4416cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_892cca5ef73e848f00ffca498f2d6f303d56d62b3ac9ad22bc03636d399afe38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892cca5ef73e848f00ffca498f2d6f303d56d62b3ac9ad22bc03636d399afe38->enter($__internal_892cca5ef73e848f00ffca498f2d6f303d56d62b3ac9ad22bc03636d399afe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_892cca5ef73e848f00ffca498f2d6f303d56d62b3ac9ad22bc03636d399afe38->leave($__internal_892cca5ef73e848f00ffca498f2d6f303d56d62b3ac9ad22bc03636d399afe38_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84600e75994f03c3d960df0b639b2923128678592e06d40be5ebabcb0e375c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84600e75994f03c3d960df0b639b2923128678592e06d40be5ebabcb0e375c1b->enter($__internal_84600e75994f03c3d960df0b639b2923128678592e06d40be5ebabcb0e375c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_84600e75994f03c3d960df0b639b2923128678592e06d40be5ebabcb0e375c1b->leave($__internal_84600e75994f03c3d960df0b639b2923128678592e06d40be5ebabcb0e375c1b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84ce5c3aa9d6670afbe4daac43b8439fe4f40f701ed21d9e552cb5b138b25db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ce5c3aa9d6670afbe4daac43b8439fe4f40f701ed21d9e552cb5b138b25db0->enter($__internal_84ce5c3aa9d6670afbe4daac43b8439fe4f40f701ed21d9e552cb5b138b25db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_84ce5c3aa9d6670afbe4daac43b8439fe4f40f701ed21d9e552cb5b138b25db0->leave($__internal_84ce5c3aa9d6670afbe4daac43b8439fe4f40f701ed21d9e552cb5b138b25db0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
