<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f8971dc11690ed2031f19c1bd2b1349b6309e7867e346237221ee70b76b84395 extends Twig_Template
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
        $__internal_7acbe0cd8df0d49d62800b9b942c9f7fcf9d89f9feaad9d686611346b544c7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acbe0cd8df0d49d62800b9b942c9f7fcf9d89f9feaad9d686611346b544c7d5->enter($__internal_7acbe0cd8df0d49d62800b9b942c9f7fcf9d89f9feaad9d686611346b544c7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7acbe0cd8df0d49d62800b9b942c9f7fcf9d89f9feaad9d686611346b544c7d5->leave($__internal_7acbe0cd8df0d49d62800b9b942c9f7fcf9d89f9feaad9d686611346b544c7d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
