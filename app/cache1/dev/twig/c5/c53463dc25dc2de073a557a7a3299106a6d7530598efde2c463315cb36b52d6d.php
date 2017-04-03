<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_fa4f14541bada1bd03371092e921394f5ece77499811a12bf65da611132eb71a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_0f2a9885fcede02b38bd53dbef3b2a9687b19ece989b96f993111488b16bc3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2a9885fcede02b38bd53dbef3b2a9687b19ece989b96f993111488b16bc3bc->enter($__internal_0f2a9885fcede02b38bd53dbef3b2a9687b19ece989b96f993111488b16bc3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2a9885fcede02b38bd53dbef3b2a9687b19ece989b96f993111488b16bc3bc->leave($__internal_0f2a9885fcede02b38bd53dbef3b2a9687b19ece989b96f993111488b16bc3bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_406c51a73cb4d64bf75f2f88314ece28ce7dcffd0452f5b0fa7d46f1d9fe0483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406c51a73cb4d64bf75f2f88314ece28ce7dcffd0452f5b0fa7d46f1d9fe0483->enter($__internal_406c51a73cb4d64bf75f2f88314ece28ce7dcffd0452f5b0fa7d46f1d9fe0483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_406c51a73cb4d64bf75f2f88314ece28ce7dcffd0452f5b0fa7d46f1d9fe0483->leave($__internal_406c51a73cb4d64bf75f2f88314ece28ce7dcffd0452f5b0fa7d46f1d9fe0483_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
