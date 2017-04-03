<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3b46d5456b8041b81aade580864b892fbcda7f12dbd5c1f07facc1219da472d4 extends Twig_Template
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
        $__internal_ab763e80907ef97453acb5c4dd76abe22cae69888912bf8724c7a581dea2546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab763e80907ef97453acb5c4dd76abe22cae69888912bf8724c7a581dea2546e->enter($__internal_ab763e80907ef97453acb5c4dd76abe22cae69888912bf8724c7a581dea2546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ab763e80907ef97453acb5c4dd76abe22cae69888912bf8724c7a581dea2546e->leave($__internal_ab763e80907ef97453acb5c4dd76abe22cae69888912bf8724c7a581dea2546e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
