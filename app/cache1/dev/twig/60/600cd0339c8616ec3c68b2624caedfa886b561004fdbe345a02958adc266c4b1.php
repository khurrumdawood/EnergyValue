<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8569790bad89681de4d181a70b21902c5ad2e108450c3bcb48e242e44becc6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_67b8daea830e030274a368876ecb4f88533f0577fc8929fd463ae2eae587b473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b8daea830e030274a368876ecb4f88533f0577fc8929fd463ae2eae587b473->enter($__internal_67b8daea830e030274a368876ecb4f88533f0577fc8929fd463ae2eae587b473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b8daea830e030274a368876ecb4f88533f0577fc8929fd463ae2eae587b473->leave($__internal_67b8daea830e030274a368876ecb4f88533f0577fc8929fd463ae2eae587b473_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85d532b61aef0ef1034f0aafbd69b9a3a1d846299cacbd7b9d066e4f3256193e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d532b61aef0ef1034f0aafbd69b9a3a1d846299cacbd7b9d066e4f3256193e->enter($__internal_85d532b61aef0ef1034f0aafbd69b9a3a1d846299cacbd7b9d066e4f3256193e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_85d532b61aef0ef1034f0aafbd69b9a3a1d846299cacbd7b9d066e4f3256193e->leave($__internal_85d532b61aef0ef1034f0aafbd69b9a3a1d846299cacbd7b9d066e4f3256193e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ace0c324acd444579cfdaae6514b27e606a21be13458a1e47a4e0ee387166435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace0c324acd444579cfdaae6514b27e606a21be13458a1e47a4e0ee387166435->enter($__internal_ace0c324acd444579cfdaae6514b27e606a21be13458a1e47a4e0ee387166435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ace0c324acd444579cfdaae6514b27e606a21be13458a1e47a4e0ee387166435->leave($__internal_ace0c324acd444579cfdaae6514b27e606a21be13458a1e47a4e0ee387166435_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
