<?php

/* @SonataUser/Admin/Security/Resetting/checkEmail.html.twig */
class __TwigTemplate_ee4ca239f494393a9297f1b05b44fabc3db2ed5c885fe7acca621366e2406acd extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20cce7d27b9b21333ba29985d7b1e20265955c5432da1d80e6641c2803866a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cce7d27b9b21333ba29985d7b1e20265955c5432da1d80e6641c2803866a73->enter($__internal_20cce7d27b9b21333ba29985d7b1e20265955c5432da1d80e6641c2803866a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20cce7d27b9b21333ba29985d7b1e20265955c5432da1d80e6641c2803866a73->leave($__internal_20cce7d27b9b21333ba29985d7b1e20265955c5432da1d80e6641c2803866a73_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6f24118d8be531d9f8a790e6ffc5b0d977bde66497e951cfb16f7433e01f25dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f24118d8be531d9f8a790e6ffc5b0d977bde66497e951cfb16f7433e01f25dd->enter($__internal_6f24118d8be531d9f8a790e6ffc5b0d977bde66497e951cfb16f7433e01f25dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_6f24118d8be531d9f8a790e6ffc5b0d977bde66497e951cfb16f7433e01f25dd->leave($__internal_6f24118d8be531d9f8a790e6ffc5b0d977bde66497e951cfb16f7433e01f25dd_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_1d9ac86d32fd271f8d886055260fa0c0b0e960103a8e313708c5b66a25713abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9ac86d32fd271f8d886055260fa0c0b0e960103a8e313708c5b66a25713abf->enter($__internal_1d9ac86d32fd271f8d886055260fa0c0b0e960103a8e313708c5b66a25713abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_1d9ac86d32fd271f8d886055260fa0c0b0e960103a8e313708c5b66a25713abf->leave($__internal_1d9ac86d32fd271f8d886055260fa0c0b0e960103a8e313708c5b66a25713abf_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_705581abd2c508d264d0568dc206390a415a804df9a1a39931f56b270d6a1c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705581abd2c508d264d0568dc206390a415a804df9a1a39931f56b270d6a1c0d->enter($__internal_705581abd2c508d264d0568dc206390a415a804df9a1a39931f56b270d6a1c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_705581abd2c508d264d0568dc206390a415a804df9a1a39931f56b270d6a1c0d->leave($__internal_705581abd2c508d264d0568dc206390a415a804df9a1a39931f56b270d6a1c0d_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_cbec42d2e1ed1fd56c7e4d55a6eb09e754f7ba935828f8f54c559242e5dcb47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbec42d2e1ed1fd56c7e4d55a6eb09e754f7ba935828f8f54c559242e5dcb47e->enter($__internal_cbec42d2e1ed1fd56c7e4d55a6eb09e754f7ba935828f8f54c559242e5dcb47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_cbec42d2e1ed1fd56c7e4d55a6eb09e754f7ba935828f8f54c559242e5dcb47e->leave($__internal_cbec42d2e1ed1fd56c7e4d55a6eb09e754f7ba935828f8f54c559242e5dcb47e_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_d6cd6f87fedec7fb834cf2828e8a57119ea85b6226de20c060b18d6fca4d123f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cd6f87fedec7fb834cf2828e8a57119ea85b6226de20c060b18d6fca4d123f->enter($__internal_d6cd6f87fedec7fb834cf2828e8a57119ea85b6226de20c060b18d6fca4d123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_d6cd6f87fedec7fb834cf2828e8a57119ea85b6226de20c060b18d6fca4d123f->leave($__internal_d6cd6f87fedec7fb834cf2828e8a57119ea85b6226de20c060b18d6fca4d123f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig";
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
            <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Admin\\Security\\Resetting\\checkEmail.html.twig");
    }
}
