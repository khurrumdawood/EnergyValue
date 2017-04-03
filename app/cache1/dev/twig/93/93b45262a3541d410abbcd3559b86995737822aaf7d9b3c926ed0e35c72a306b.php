<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b61ba7be26f7fe31e7429cdf5f714e336574a0504d466457d118e09649f0ebb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6a2ac86ddf2fe5fc4344e1247a04606f8c190585f8beb19291d1e1d0db889e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2ac86ddf2fe5fc4344e1247a04606f8c190585f8beb19291d1e1d0db889e67->enter($__internal_6a2ac86ddf2fe5fc4344e1247a04606f8c190585f8beb19291d1e1d0db889e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2ac86ddf2fe5fc4344e1247a04606f8c190585f8beb19291d1e1d0db889e67->leave($__internal_6a2ac86ddf2fe5fc4344e1247a04606f8c190585f8beb19291d1e1d0db889e67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_520c2d378c7bf56412ef021f5d5b17d5b6dc0fac67048b044416c3eba1343154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520c2d378c7bf56412ef021f5d5b17d5b6dc0fac67048b044416c3eba1343154->enter($__internal_520c2d378c7bf56412ef021f5d5b17d5b6dc0fac67048b044416c3eba1343154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_520c2d378c7bf56412ef021f5d5b17d5b6dc0fac67048b044416c3eba1343154->leave($__internal_520c2d378c7bf56412ef021f5d5b17d5b6dc0fac67048b044416c3eba1343154_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
