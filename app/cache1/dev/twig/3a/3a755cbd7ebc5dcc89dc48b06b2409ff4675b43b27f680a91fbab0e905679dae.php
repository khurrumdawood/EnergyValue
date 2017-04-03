<?php

/* @SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_5a0e52151c28fe8fc1664efaf065e07f1163db94b55bb2f6b130cce60936a35c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57c8acf72e6deae2c9a034166d58cf5163e355c630d5af8eabd29c60bfa5be3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c8acf72e6deae2c9a034166d58cf5163e355c630d5af8eabd29c60bfa5be3f->enter($__internal_57c8acf72e6deae2c9a034166d58cf5163e355c630d5af8eabd29c60bfa5be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c8acf72e6deae2c9a034166d58cf5163e355c630d5af8eabd29c60bfa5be3f->leave($__internal_57c8acf72e6deae2c9a034166d58cf5163e355c630d5af8eabd29c60bfa5be3f_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f72ca5f667491b5c22582722de676726654775caa309cc5f3b56c13392d26954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72ca5f667491b5c22582722de676726654775caa309cc5f3b56c13392d26954->enter($__internal_f72ca5f667491b5c22582722de676726654775caa309cc5f3b56c13392d26954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_f72ca5f667491b5c22582722de676726654775caa309cc5f3b56c13392d26954->leave($__internal_f72ca5f667491b5c22582722de676726654775caa309cc5f3b56c13392d26954_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3fd55622eea48b58a4ef476a2ed013b4d4111f16e7bff47f99fbcce177f80cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd55622eea48b58a4ef476a2ed013b4d4111f16e7bff47f99fbcce177f80cff->enter($__internal_3fd55622eea48b58a4ef476a2ed013b4d4111f16e7bff47f99fbcce177f80cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_3fd55622eea48b58a4ef476a2ed013b4d4111f16e7bff47f99fbcce177f80cff->leave($__internal_3fd55622eea48b58a4ef476a2ed013b4d4111f16e7bff47f99fbcce177f80cff_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4913070d7ef8d5ab878d41d8d06f0c1afbfe44fe34ec30c2264f232dba12d429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4913070d7ef8d5ab878d41d8d06f0c1afbfe44fe34ec30c2264f232dba12d429->enter($__internal_4913070d7ef8d5ab878d41d8d06f0c1afbfe44fe34ec30c2264f232dba12d429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4913070d7ef8d5ab878d41d8d06f0c1afbfe44fe34ec30c2264f232dba12d429->leave($__internal_4913070d7ef8d5ab878d41d8d06f0c1afbfe44fe34ec30c2264f232dba12d429_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_6e1d6a33ada8234f2a39f5a04152dc40898d8a65a9c68762a13f58355060fac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1d6a33ada8234f2a39f5a04152dc40898d8a65a9c68762a13f58355060fac6->enter($__internal_6e1d6a33ada8234f2a39f5a04152dc40898d8a65a9c68762a13f58355060fac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_6e1d6a33ada8234f2a39f5a04152dc40898d8a65a9c68762a13f58355060fac6->leave($__internal_6e1d6a33ada8234f2a39f5a04152dc40898d8a65a9c68762a13f58355060fac6_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e22acbae71e4c7d7891505458ecdb4b1d6c15353a0a9b19faf6912e95736648c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22acbae71e4c7d7891505458ecdb4b1d6c15353a0a9b19faf6912e95736648c->enter($__internal_e22acbae71e4c7d7891505458ecdb4b1d6c15353a0a9b19faf6912e95736648c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
        
        $__internal_e22acbae71e4c7d7891505458ecdb4b1d6c15353a0a9b19faf6912e95736648c->leave($__internal_e22acbae71e4c7d7891505458ecdb4b1d6c15353a0a9b19faf6912e95736648c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  110 => 25,  105 => 22,  99 => 20,  97 => 19,  93 => 18,  88 => 15,  82 => 14,  70 => 12,  59 => 9,  48 => 6,  37 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}
                    <span>{{ admin_pool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Admin\\Security\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
