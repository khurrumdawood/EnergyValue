<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_caea7db47097dc80e48e0582d16ed87b9e46d429263a06ed2bf08db2704a0734 extends Twig_Template
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
        $__internal_eb10e6d7ef60f02cd1a0d1f852964a8599a39d4a1eb438fe831f9817b07b5860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb10e6d7ef60f02cd1a0d1f852964a8599a39d4a1eb438fe831f9817b07b5860->enter($__internal_eb10e6d7ef60f02cd1a0d1f852964a8599a39d4a1eb438fe831f9817b07b5860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eb10e6d7ef60f02cd1a0d1f852964a8599a39d4a1eb438fe831f9817b07b5860->leave($__internal_eb10e6d7ef60f02cd1a0d1f852964a8599a39d4a1eb438fe831f9817b07b5860_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_09fe4f9f5bf3e327e1ca70c65ecace8b33b9a3be80d4bc14f0e7f0336595582b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fe4f9f5bf3e327e1ca70c65ecace8b33b9a3be80d4bc14f0e7f0336595582b->enter($__internal_09fe4f9f5bf3e327e1ca70c65ecace8b33b9a3be80d4bc14f0e7f0336595582b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_09fe4f9f5bf3e327e1ca70c65ecace8b33b9a3be80d4bc14f0e7f0336595582b->leave($__internal_09fe4f9f5bf3e327e1ca70c65ecace8b33b9a3be80d4bc14f0e7f0336595582b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
