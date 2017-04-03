<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_36dc852bfc4b5148f29e9626397df6c323da6863a68d32ae2fd82bb6698819c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be0735bda3276b3289b86dba3278ed029d66a9920d9749b4f2b41ed457dc3d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0735bda3276b3289b86dba3278ed029d66a9920d9749b4f2b41ed457dc3d32->enter($__internal_be0735bda3276b3289b86dba3278ed029d66a9920d9749b4f2b41ed457dc3d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_be0735bda3276b3289b86dba3278ed029d66a9920d9749b4f2b41ed457dc3d32->leave($__internal_be0735bda3276b3289b86dba3278ed029d66a9920d9749b4f2b41ed457dc3d32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
