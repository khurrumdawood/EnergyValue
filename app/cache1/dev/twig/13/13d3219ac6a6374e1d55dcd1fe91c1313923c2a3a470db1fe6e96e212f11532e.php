<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_58390a282ad929dfcbb81922281719e6b1eeeeeac36f1ec55a617723c186312a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a5d7d63643c20d4f1f317b8d1f24ac2fd19f9d10d7bb95faf87d53408f7f2fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d7d63643c20d4f1f317b8d1f24ac2fd19f9d10d7bb95faf87d53408f7f2fc3->enter($__internal_a5d7d63643c20d4f1f317b8d1f24ac2fd19f9d10d7bb95faf87d53408f7f2fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d7d63643c20d4f1f317b8d1f24ac2fd19f9d10d7bb95faf87d53408f7f2fc3->leave($__internal_a5d7d63643c20d4f1f317b8d1f24ac2fd19f9d10d7bb95faf87d53408f7f2fc3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d24b78d3b09ac1c73b0c4269ce608672b5892a18b49b108b92f876b06c8d103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d24b78d3b09ac1c73b0c4269ce608672b5892a18b49b108b92f876b06c8d103->enter($__internal_8d24b78d3b09ac1c73b0c4269ce608672b5892a18b49b108b92f876b06c8d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d24b78d3b09ac1c73b0c4269ce608672b5892a18b49b108b92f876b06c8d103->leave($__internal_8d24b78d3b09ac1c73b0c4269ce608672b5892a18b49b108b92f876b06c8d103_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ee62fc18f1907b0636081904777937e4f860da15a6087b8e9d8dfab6582e845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee62fc18f1907b0636081904777937e4f860da15a6087b8e9d8dfab6582e845->enter($__internal_5ee62fc18f1907b0636081904777937e4f860da15a6087b8e9d8dfab6582e845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ee62fc18f1907b0636081904777937e4f860da15a6087b8e9d8dfab6582e845->leave($__internal_5ee62fc18f1907b0636081904777937e4f860da15a6087b8e9d8dfab6582e845_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fc8ec299c1db03147fcbd167c3ee082d64333a66da9d8d7cdc31d0376adb032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc8ec299c1db03147fcbd167c3ee082d64333a66da9d8d7cdc31d0376adb032->enter($__internal_3fc8ec299c1db03147fcbd167c3ee082d64333a66da9d8d7cdc31d0376adb032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3fc8ec299c1db03147fcbd167c3ee082d64333a66da9d8d7cdc31d0376adb032->leave($__internal_3fc8ec299c1db03147fcbd167c3ee082d64333a66da9d8d7cdc31d0376adb032_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
