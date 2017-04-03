<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_fc000b1023eaa92732398f8999753f312acb8bc8ba24af9396c7053d58568bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_25d0a4dec1cc6e100da806ae04785dafc64081dd3e34452dfcfb94782f5accc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d0a4dec1cc6e100da806ae04785dafc64081dd3e34452dfcfb94782f5accc4->enter($__internal_25d0a4dec1cc6e100da806ae04785dafc64081dd3e34452dfcfb94782f5accc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d0a4dec1cc6e100da806ae04785dafc64081dd3e34452dfcfb94782f5accc4->leave($__internal_25d0a4dec1cc6e100da806ae04785dafc64081dd3e34452dfcfb94782f5accc4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a9cd4aac103421a5f97945cffdace1c6f01495e3ee0007370c5a196b2558545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9cd4aac103421a5f97945cffdace1c6f01495e3ee0007370c5a196b2558545->enter($__internal_6a9cd4aac103421a5f97945cffdace1c6f01495e3ee0007370c5a196b2558545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6a9cd4aac103421a5f97945cffdace1c6f01495e3ee0007370c5a196b2558545->leave($__internal_6a9cd4aac103421a5f97945cffdace1c6f01495e3ee0007370c5a196b2558545_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
