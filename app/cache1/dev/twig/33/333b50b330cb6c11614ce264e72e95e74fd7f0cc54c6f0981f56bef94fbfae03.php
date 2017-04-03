<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d506a66fe79de4d70c9c5e6ed799ef27e9eeac7b37b28de72f9e5871130c9cbe extends Twig_Template
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
        $__internal_16014b1f5d56c3749563fbce72ff098f9ad95d2a4ca2e47c03219fd8073d19a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16014b1f5d56c3749563fbce72ff098f9ad95d2a4ca2e47c03219fd8073d19a6->enter($__internal_16014b1f5d56c3749563fbce72ff098f9ad95d2a4ca2e47c03219fd8073d19a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_16014b1f5d56c3749563fbce72ff098f9ad95d2a4ca2e47c03219fd8073d19a6->leave($__internal_16014b1f5d56c3749563fbce72ff098f9ad95d2a4ca2e47c03219fd8073d19a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
