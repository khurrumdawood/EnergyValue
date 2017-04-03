<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_de70f152d5c0d0b0c38e8ebd196f80da2d4ef2f17c8d20992988640b9f452afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb51ab9424f64936142782bacb663a5122498538b350fd4c864e54a42f95e03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb51ab9424f64936142782bacb663a5122498538b350fd4c864e54a42f95e03a->enter($__internal_fb51ab9424f64936142782bacb663a5122498538b350fd4c864e54a42f95e03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb51ab9424f64936142782bacb663a5122498538b350fd4c864e54a42f95e03a->leave($__internal_fb51ab9424f64936142782bacb663a5122498538b350fd4c864e54a42f95e03a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_434ac155f9abad40ca349d1a7a77a360a205f18de0a5e9bf4fe64c9dfd696421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434ac155f9abad40ca349d1a7a77a360a205f18de0a5e9bf4fe64c9dfd696421->enter($__internal_434ac155f9abad40ca349d1a7a77a360a205f18de0a5e9bf4fe64c9dfd696421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_434ac155f9abad40ca349d1a7a77a360a205f18de0a5e9bf4fe64c9dfd696421->leave($__internal_434ac155f9abad40ca349d1a7a77a360a205f18de0a5e9bf4fe64c9dfd696421_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
