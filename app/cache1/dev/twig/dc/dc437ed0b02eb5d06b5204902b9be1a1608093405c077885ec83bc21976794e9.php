<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_528bc9c08202a7154de52532ee10a0d2f9c2581907fc41909a9055e05bec141d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3943c81cb4f2fe63873f6921a5e5dc4f23c51507c3eea511cf9a5817cd5a936a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3943c81cb4f2fe63873f6921a5e5dc4f23c51507c3eea511cf9a5817cd5a936a->enter($__internal_3943c81cb4f2fe63873f6921a5e5dc4f23c51507c3eea511cf9a5817cd5a936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3943c81cb4f2fe63873f6921a5e5dc4f23c51507c3eea511cf9a5817cd5a936a->leave($__internal_3943c81cb4f2fe63873f6921a5e5dc4f23c51507c3eea511cf9a5817cd5a936a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f7059e7b2374b9f4c676f1cf84b65bd9563187846f47174d947a6619f281482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7059e7b2374b9f4c676f1cf84b65bd9563187846f47174d947a6619f281482->enter($__internal_2f7059e7b2374b9f4c676f1cf84b65bd9563187846f47174d947a6619f281482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2f7059e7b2374b9f4c676f1cf84b65bd9563187846f47174d947a6619f281482->leave($__internal_2f7059e7b2374b9f4c676f1cf84b65bd9563187846f47174d947a6619f281482_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
