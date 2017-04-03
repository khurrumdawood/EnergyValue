<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b49d9fe1d3a775e177f0900e79e44042e618a47d4af8421f93ee4ae353fb9274 extends Twig_Template
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
        $__internal_812c71b0aaf0e801d0c2bc8d11cf05e9d654a662307078b63ca491f8659644cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812c71b0aaf0e801d0c2bc8d11cf05e9d654a662307078b63ca491f8659644cb->enter($__internal_812c71b0aaf0e801d0c2bc8d11cf05e9d654a662307078b63ca491f8659644cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_812c71b0aaf0e801d0c2bc8d11cf05e9d654a662307078b63ca491f8659644cb->leave($__internal_812c71b0aaf0e801d0c2bc8d11cf05e9d654a662307078b63ca491f8659644cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
