<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_06e736ecf9c60895ae52fb24da61ac1b82745166d85240d52d00924c129a55b7 extends Twig_Template
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
        $__internal_e1f9ed614bfdcde5710c67f9de8f318776d45e11f1c0fbb1f7bf21e794747b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f9ed614bfdcde5710c67f9de8f318776d45e11f1c0fbb1f7bf21e794747b25->enter($__internal_e1f9ed614bfdcde5710c67f9de8f318776d45e11f1c0fbb1f7bf21e794747b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e1f9ed614bfdcde5710c67f9de8f318776d45e11f1c0fbb1f7bf21e794747b25->leave($__internal_e1f9ed614bfdcde5710c67f9de8f318776d45e11f1c0fbb1f7bf21e794747b25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
