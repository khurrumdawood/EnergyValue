<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_876f5b323b252674606e5f98bafea5a7ef8c308cba8bbc97dd1bbe723c46e8ea extends Twig_Template
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
        $__internal_ee3b6192d216397acb1bcca601831b116d0ccb3ab0dbba6411d4a62b2d18b742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3b6192d216397acb1bcca601831b116d0ccb3ab0dbba6411d4a62b2d18b742->enter($__internal_ee3b6192d216397acb1bcca601831b116d0ccb3ab0dbba6411d4a62b2d18b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee3b6192d216397acb1bcca601831b116d0ccb3ab0dbba6411d4a62b2d18b742->leave($__internal_ee3b6192d216397acb1bcca601831b116d0ccb3ab0dbba6411d4a62b2d18b742_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f291428f9daace33d53a95b4e7d4f97eebfc459a3db543a2a1f7102647d26af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f291428f9daace33d53a95b4e7d4f97eebfc459a3db543a2a1f7102647d26af->enter($__internal_8f291428f9daace33d53a95b4e7d4f97eebfc459a3db543a2a1f7102647d26af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f291428f9daace33d53a95b4e7d4f97eebfc459a3db543a2a1f7102647d26af->leave($__internal_8f291428f9daace33d53a95b4e7d4f97eebfc459a3db543a2a1f7102647d26af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c16a7321d730b2f726106fcf2aa36fdac6ef3ea2ab22c76be0abeeb4e43002e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16a7321d730b2f726106fcf2aa36fdac6ef3ea2ab22c76be0abeeb4e43002e9->enter($__internal_c16a7321d730b2f726106fcf2aa36fdac6ef3ea2ab22c76be0abeeb4e43002e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c16a7321d730b2f726106fcf2aa36fdac6ef3ea2ab22c76be0abeeb4e43002e9->leave($__internal_c16a7321d730b2f726106fcf2aa36fdac6ef3ea2ab22c76be0abeeb4e43002e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_769f9d63ce3234c6277aadca76237e5f5334aaae0bd1ace28bdb846e9da4cbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769f9d63ce3234c6277aadca76237e5f5334aaae0bd1ace28bdb846e9da4cbd2->enter($__internal_769f9d63ce3234c6277aadca76237e5f5334aaae0bd1ace28bdb846e9da4cbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_769f9d63ce3234c6277aadca76237e5f5334aaae0bd1ace28bdb846e9da4cbd2->leave($__internal_769f9d63ce3234c6277aadca76237e5f5334aaae0bd1ace28bdb846e9da4cbd2_prof);

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
