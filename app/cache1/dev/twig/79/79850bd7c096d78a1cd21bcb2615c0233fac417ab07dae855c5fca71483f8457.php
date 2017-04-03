<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_858c68b508e612c5dfb6d8744e30334ee88e26a738bbde64ad01fcf154ff5fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_39616f4683963b9a1e71bbbbd76031f80fdfd975dd56a6a102332c849558aae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39616f4683963b9a1e71bbbbd76031f80fdfd975dd56a6a102332c849558aae8->enter($__internal_39616f4683963b9a1e71bbbbd76031f80fdfd975dd56a6a102332c849558aae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39616f4683963b9a1e71bbbbd76031f80fdfd975dd56a6a102332c849558aae8->leave($__internal_39616f4683963b9a1e71bbbbd76031f80fdfd975dd56a6a102332c849558aae8_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_1be1bd2d405ad738411d294b559c179c02a2143fe4a34b54abe969b7b6c352f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be1bd2d405ad738411d294b559c179c02a2143fe4a34b54abe969b7b6c352f6->enter($__internal_1be1bd2d405ad738411d294b559c179c02a2143fe4a34b54abe969b7b6c352f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_1be1bd2d405ad738411d294b559c179c02a2143fe4a34b54abe969b7b6c352f6->leave($__internal_1be1bd2d405ad738411d294b559c179c02a2143fe4a34b54abe969b7b6c352f6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
", "@SonataAdmin/CRUD/show_email.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_email.html.twig");
    }
}
