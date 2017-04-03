<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_54f9e2fad41b0e905ec900c6c7e8434c42d280c6fba45dda297a12843d8affbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_f16d9d76a82a2aa454457698d269d15bfe3c63a8c67029ac95957dc47f852549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16d9d76a82a2aa454457698d269d15bfe3c63a8c67029ac95957dc47f852549->enter($__internal_f16d9d76a82a2aa454457698d269d15bfe3c63a8c67029ac95957dc47f852549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16d9d76a82a2aa454457698d269d15bfe3c63a8c67029ac95957dc47f852549->leave($__internal_f16d9d76a82a2aa454457698d269d15bfe3c63a8c67029ac95957dc47f852549_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a332a4e4b9aa239f346760fd91ae6981de2ed04c771cc07a448a9da8360b1529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a332a4e4b9aa239f346760fd91ae6981de2ed04c771cc07a448a9da8360b1529->enter($__internal_a332a4e4b9aa239f346760fd91ae6981de2ed04c771cc07a448a9da8360b1529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_a332a4e4b9aa239f346760fd91ae6981de2ed04c771cc07a448a9da8360b1529->leave($__internal_a332a4e4b9aa239f346760fd91ae6981de2ed04c771cc07a448a9da8360b1529_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
