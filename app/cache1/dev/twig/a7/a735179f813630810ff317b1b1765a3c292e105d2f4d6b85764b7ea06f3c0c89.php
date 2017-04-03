<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_881234aeb4a95f5e83452593ee61bc467b8370e85e1f4230993d2ec6facccbba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8375842e63ed9ead91a1624be4085cea90ab0ac86073ce16806352514303e183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8375842e63ed9ead91a1624be4085cea90ab0ac86073ce16806352514303e183->enter($__internal_8375842e63ed9ead91a1624be4085cea90ab0ac86073ce16806352514303e183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8375842e63ed9ead91a1624be4085cea90ab0ac86073ce16806352514303e183->leave($__internal_8375842e63ed9ead91a1624be4085cea90ab0ac86073ce16806352514303e183_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71de231a59ed92b984645dcae42bbb4f0397facf9a4506ea163fd85f7c38cb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71de231a59ed92b984645dcae42bbb4f0397facf9a4506ea163fd85f7c38cb07->enter($__internal_71de231a59ed92b984645dcae42bbb4f0397facf9a4506ea163fd85f7c38cb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_71de231a59ed92b984645dcae42bbb4f0397facf9a4506ea163fd85f7c38cb07->leave($__internal_71de231a59ed92b984645dcae42bbb4f0397facf9a4506ea163fd85f7c38cb07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
