<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_afaff30171a780d2b898dd78567c69be6e0b0e4915be015007cb9a090a6d8127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_222a14061982465c278f5cb9844e87ef9f0da757ff2d3af96867e5f3f79d22ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222a14061982465c278f5cb9844e87ef9f0da757ff2d3af96867e5f3f79d22ba->enter($__internal_222a14061982465c278f5cb9844e87ef9f0da757ff2d3af96867e5f3f79d22ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222a14061982465c278f5cb9844e87ef9f0da757ff2d3af96867e5f3f79d22ba->leave($__internal_222a14061982465c278f5cb9844e87ef9f0da757ff2d3af96867e5f3f79d22ba_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f6103a2a307733f23cb6efb01ac148fa4adb48d34ff7d665d46d5c7b3a404a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6103a2a307733f23cb6efb01ac148fa4adb48d34ff7d665d46d5c7b3a404a9->enter($__internal_3f6103a2a307733f23cb6efb01ac148fa4adb48d34ff7d665d46d5c7b3a404a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_3f6103a2a307733f23cb6efb01ac148fa4adb48d34ff7d665d46d5c7b3a404a9->leave($__internal_3f6103a2a307733f23cb6efb01ac148fa4adb48d34ff7d665d46d5c7b3a404a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
