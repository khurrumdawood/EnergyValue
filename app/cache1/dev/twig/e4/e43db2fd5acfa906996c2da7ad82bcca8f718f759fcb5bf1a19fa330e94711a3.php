<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2998db0e88d9ffbc3d4b3ae7586f83d090bd2467bcf2a6aedbb60623bbaf9236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2b5e1e0bb51470aefc2b7281a0b685043bab924074afcf0c5e036b60bfe9d2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5e1e0bb51470aefc2b7281a0b685043bab924074afcf0c5e036b60bfe9d2ce->enter($__internal_2b5e1e0bb51470aefc2b7281a0b685043bab924074afcf0c5e036b60bfe9d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5e1e0bb51470aefc2b7281a0b685043bab924074afcf0c5e036b60bfe9d2ce->leave($__internal_2b5e1e0bb51470aefc2b7281a0b685043bab924074afcf0c5e036b60bfe9d2ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c6a1cfbf11699f830ee8ee69c68a52eb432099eea9deecf8b99ca92e0f0478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6a1cfbf11699f830ee8ee69c68a52eb432099eea9deecf8b99ca92e0f0478a->enter($__internal_0c6a1cfbf11699f830ee8ee69c68a52eb432099eea9deecf8b99ca92e0f0478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0c6a1cfbf11699f830ee8ee69c68a52eb432099eea9deecf8b99ca92e0f0478a->leave($__internal_0c6a1cfbf11699f830ee8ee69c68a52eb432099eea9deecf8b99ca92e0f0478a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
