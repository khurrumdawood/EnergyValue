<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_8b53ef874fec79512db73eaf7b8f44e3dd494ef6526f53e14a2fe6f3b2a6ae8d extends Twig_Template
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
        $__internal_e9ad1fd4ee525e303f8523754f6a382f5350442b1bf78c8050b62748d9a206fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ad1fd4ee525e303f8523754f6a382f5350442b1bf78c8050b62748d9a206fa->enter($__internal_e9ad1fd4ee525e303f8523754f6a382f5350442b1bf78c8050b62748d9a206fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_e9ad1fd4ee525e303f8523754f6a382f5350442b1bf78c8050b62748d9a206fa->leave($__internal_e9ad1fd4ee525e303f8523754f6a382f5350442b1bf78c8050b62748d9a206fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
