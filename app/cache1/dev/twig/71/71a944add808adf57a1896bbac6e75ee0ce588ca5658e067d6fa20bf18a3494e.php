<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a98674b634f21dccd2607491f6a49c1dedf9143679a897e4b7a102e9a72d50f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_70c9f795c4d84f2b0d9fe264146f54df53c46cf34041d42bd9007d30a05e64b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c9f795c4d84f2b0d9fe264146f54df53c46cf34041d42bd9007d30a05e64b1->enter($__internal_70c9f795c4d84f2b0d9fe264146f54df53c46cf34041d42bd9007d30a05e64b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70c9f795c4d84f2b0d9fe264146f54df53c46cf34041d42bd9007d30a05e64b1->leave($__internal_70c9f795c4d84f2b0d9fe264146f54df53c46cf34041d42bd9007d30a05e64b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98276c8fcce5a603b94f2a89870fb952befabdf72f202317413dcca79a249dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98276c8fcce5a603b94f2a89870fb952befabdf72f202317413dcca79a249dd3->enter($__internal_98276c8fcce5a603b94f2a89870fb952befabdf72f202317413dcca79a249dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_98276c8fcce5a603b94f2a89870fb952befabdf72f202317413dcca79a249dd3->leave($__internal_98276c8fcce5a603b94f2a89870fb952befabdf72f202317413dcca79a249dd3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
