<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_ed7b1c7a654b2c9701af5f1a6eb3c7c3ca6aaaf3e28bb02b4714665935a77096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85f044b78996004912803a9b54d3de17033bfa2904cf207777d25e1d50550a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f044b78996004912803a9b54d3de17033bfa2904cf207777d25e1d50550a55->enter($__internal_85f044b78996004912803a9b54d3de17033bfa2904cf207777d25e1d50550a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f044b78996004912803a9b54d3de17033bfa2904cf207777d25e1d50550a55->leave($__internal_85f044b78996004912803a9b54d3de17033bfa2904cf207777d25e1d50550a55_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_b186063c8705c46a22182de1dc8ea83d4a47fb12f21c4f0496457eec4a9271f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b186063c8705c46a22182de1dc8ea83d4a47fb12f21c4f0496457eec4a9271f5->enter($__internal_b186063c8705c46a22182de1dc8ea83d4a47fb12f21c4f0496457eec4a9271f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_b186063c8705c46a22182de1dc8ea83d4a47fb12f21c4f0496457eec4a9271f5->leave($__internal_b186063c8705c46a22182de1dc8ea83d4a47fb12f21c4f0496457eec4a9271f5_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f85b39cd4c9e6eaceae6b7884786c6b5355f97e16b498b52543ce92eef48cb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85b39cd4c9e6eaceae6b7884786c6b5355f97e16b498b52543ce92eef48cb3c->enter($__internal_f85b39cd4c9e6eaceae6b7884786c6b5355f97e16b498b52543ce92eef48cb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_f85b39cd4c9e6eaceae6b7884786c6b5355f97e16b498b52543ce92eef48cb3c->leave($__internal_f85b39cd4c9e6eaceae6b7884786c6b5355f97e16b498b52543ce92eef48cb3c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_edit_password\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% block fos_user_content %}
                {% include \"SonataUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            {% endblock fos_user_content %}
        </div>
    </div>
{% endblock sonata_profile_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
