<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8fc7d96935c2a3f76266e0e6edd17bef8ba629ba4e182b9f654c88a610dffa24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_c6fa43c4891a8563a907a0ffc5e2673ca63331e978e9694e001215c45eb5542c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fa43c4891a8563a907a0ffc5e2673ca63331e978e9694e001215c45eb5542c->enter($__internal_c6fa43c4891a8563a907a0ffc5e2673ca63331e978e9694e001215c45eb5542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6fa43c4891a8563a907a0ffc5e2673ca63331e978e9694e001215c45eb5542c->leave($__internal_c6fa43c4891a8563a907a0ffc5e2673ca63331e978e9694e001215c45eb5542c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b080ebad3ab626618ba99e80f059b0f5c4b8b4d048dcda5d594be39cab6ca32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b080ebad3ab626618ba99e80f059b0f5c4b8b4d048dcda5d594be39cab6ca32->enter($__internal_7b080ebad3ab626618ba99e80f059b0f5c4b8b4d048dcda5d594be39cab6ca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7b080ebad3ab626618ba99e80f059b0f5c4b8b4d048dcda5d594be39cab6ca32->leave($__internal_7b080ebad3ab626618ba99e80f059b0f5c4b8b4d048dcda5d594be39cab6ca32_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b70937285900ce274ca70f2d28bb1420bba3749521e4b5c247dd61f6499847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b70937285900ce274ca70f2d28bb1420bba3749521e4b5c247dd61f6499847->enter($__internal_15b70937285900ce274ca70f2d28bb1420bba3749521e4b5c247dd61f6499847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15b70937285900ce274ca70f2d28bb1420bba3749521e4b5c247dd61f6499847->leave($__internal_15b70937285900ce274ca70f2d28bb1420bba3749521e4b5c247dd61f6499847_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
