<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0d3c72effe8a08e8a3c36b1db459d996b1f562b6a01b455716629d2a0d61c848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e2982d7d1a3c61610012d80dc311c26a6c7a5ac33ffb8823d2ea868fa3bd17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2982d7d1a3c61610012d80dc311c26a6c7a5ac33ffb8823d2ea868fa3bd17b->enter($__internal_0e2982d7d1a3c61610012d80dc311c26a6c7a5ac33ffb8823d2ea868fa3bd17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0e2982d7d1a3c61610012d80dc311c26a6c7a5ac33ffb8823d2ea868fa3bd17b->leave($__internal_0e2982d7d1a3c61610012d80dc311c26a6c7a5ac33ffb8823d2ea868fa3bd17b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_02797dabaaa5304edb9077c17878c2393d274c11cdd2aad18ec4668735a307cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02797dabaaa5304edb9077c17878c2393d274c11cdd2aad18ec4668735a307cc->enter($__internal_02797dabaaa5304edb9077c17878c2393d274c11cdd2aad18ec4668735a307cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_02797dabaaa5304edb9077c17878c2393d274c11cdd2aad18ec4668735a307cc->leave($__internal_02797dabaaa5304edb9077c17878c2393d274c11cdd2aad18ec4668735a307cc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
