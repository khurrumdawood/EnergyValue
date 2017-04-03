<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_96a291f1e328be13ba197199baaedda9efbc0f81eb0c6e4d0da32a901d36bb03 extends Twig_Template
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
        $__internal_4e618df6086cd3b82e8540d20d24ad492a27e9a3bedd9b413bca4bcc0e86a1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e618df6086cd3b82e8540d20d24ad492a27e9a3bedd9b413bca4bcc0e86a1e5->enter($__internal_4e618df6086cd3b82e8540d20d24ad492a27e9a3bedd9b413bca4bcc0e86a1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4e618df6086cd3b82e8540d20d24ad492a27e9a3bedd9b413bca4bcc0e86a1e5->leave($__internal_4e618df6086cd3b82e8540d20d24ad492a27e9a3bedd9b413bca4bcc0e86a1e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
