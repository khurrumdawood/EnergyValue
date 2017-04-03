<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_cd511f3efcd77456763f9d5af402302758d46ffe1cc35838dae117a43009f1ab extends Twig_Template
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
        $__internal_6a8c7c9fe28e1015026977e6a8b2dd7e6d5038ab5692ecec67f757a9d5bd7bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8c7c9fe28e1015026977e6a8b2dd7e6d5038ab5692ecec67f757a9d5bd7bea->enter($__internal_6a8c7c9fe28e1015026977e6a8b2dd7e6d5038ab5692ecec67f757a9d5bd7bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6a8c7c9fe28e1015026977e6a8b2dd7e6d5038ab5692ecec67f757a9d5bd7bea->leave($__internal_6a8c7c9fe28e1015026977e6a8b2dd7e6d5038ab5692ecec67f757a9d5bd7bea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
