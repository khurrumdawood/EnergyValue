<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1f96d121337ae880d2414ebe605bf5cd51f467f1a97c8031539d495ad40a0fc6 extends Twig_Template
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
        $__internal_478d9c55a484502da1f91d3a946d9730a82aee01318b3922d34628a678dd22c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478d9c55a484502da1f91d3a946d9730a82aee01318b3922d34628a678dd22c6->enter($__internal_478d9c55a484502da1f91d3a946d9730a82aee01318b3922d34628a678dd22c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_478d9c55a484502da1f91d3a946d9730a82aee01318b3922d34628a678dd22c6->leave($__internal_478d9c55a484502da1f91d3a946d9730a82aee01318b3922d34628a678dd22c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
