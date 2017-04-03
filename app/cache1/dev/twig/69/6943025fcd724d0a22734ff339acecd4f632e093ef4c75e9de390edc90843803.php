<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_079f99d5694178809e6651adb7f1900d8474ccfb58f169dbb2db25ed0587b7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb7e685a8ef2c1cc9d5efe113935a26e21dd98933c0b4ffb2c9c4aaf0ca6d836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7e685a8ef2c1cc9d5efe113935a26e21dd98933c0b4ffb2c9c4aaf0ca6d836->enter($__internal_fb7e685a8ef2c1cc9d5efe113935a26e21dd98933c0b4ffb2c9c4aaf0ca6d836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7e685a8ef2c1cc9d5efe113935a26e21dd98933c0b4ffb2c9c4aaf0ca6d836->leave($__internal_fb7e685a8ef2c1cc9d5efe113935a26e21dd98933c0b4ffb2c9c4aaf0ca6d836_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8be1306237e358d267ee383c02c493dd91f085e11869aa951d102656a39c9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8be1306237e358d267ee383c02c493dd91f085e11869aa951d102656a39c9d5->enter($__internal_b8be1306237e358d267ee383c02c493dd91f085e11869aa951d102656a39c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8be1306237e358d267ee383c02c493dd91f085e11869aa951d102656a39c9d5->leave($__internal_b8be1306237e358d267ee383c02c493dd91f085e11869aa951d102656a39c9d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_729a1a28d58bd6a669db98baf3370b16194b26ac8d96ec3da76ef92404a56255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729a1a28d58bd6a669db98baf3370b16194b26ac8d96ec3da76ef92404a56255->enter($__internal_729a1a28d58bd6a669db98baf3370b16194b26ac8d96ec3da76ef92404a56255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_729a1a28d58bd6a669db98baf3370b16194b26ac8d96ec3da76ef92404a56255->leave($__internal_729a1a28d58bd6a669db98baf3370b16194b26ac8d96ec3da76ef92404a56255_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d02e53a7bbd2c561c80434620c64ebcaa882ed2fe6e927b1f9a83de10ff23ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d02e53a7bbd2c561c80434620c64ebcaa882ed2fe6e927b1f9a83de10ff23ee->enter($__internal_0d02e53a7bbd2c561c80434620c64ebcaa882ed2fe6e927b1f9a83de10ff23ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d02e53a7bbd2c561c80434620c64ebcaa882ed2fe6e927b1f9a83de10ff23ee->leave($__internal_0d02e53a7bbd2c561c80434620c64ebcaa882ed2fe6e927b1f9a83de10ff23ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
