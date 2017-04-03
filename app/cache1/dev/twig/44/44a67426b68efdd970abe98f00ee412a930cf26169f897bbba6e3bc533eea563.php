<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_6895cc1362b62a92b7b7b9dd2583cd5cadb72f182af6bbc81641319a7ce08603 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_889de4917c1d33de7acfffe38bce870d158d367aba6c3b775a0baaf02348eec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889de4917c1d33de7acfffe38bce870d158d367aba6c3b775a0baaf02348eec3->enter($__internal_889de4917c1d33de7acfffe38bce870d158d367aba6c3b775a0baaf02348eec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889de4917c1d33de7acfffe38bce870d158d367aba6c3b775a0baaf02348eec3->leave($__internal_889de4917c1d33de7acfffe38bce870d158d367aba6c3b775a0baaf02348eec3_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d55aa96f9b9bc965d10bc2f0321884cac3cc6b5504107e8cc5d99e5573707d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55aa96f9b9bc965d10bc2f0321884cac3cc6b5504107e8cc5d99e5573707d0e->enter($__internal_d55aa96f9b9bc965d10bc2f0321884cac3cc6b5504107e8cc5d99e5573707d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_d55aa96f9b9bc965d10bc2f0321884cac3cc6b5504107e8cc5d99e5573707d0e->leave($__internal_d55aa96f9b9bc965d10bc2f0321884cac3cc6b5504107e8cc5d99e5573707d0e_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_5f73028c86db8f3f3b14db7b5eec83643e765e3392bf76ebe42005107ea833f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f73028c86db8f3f3b14db7b5eec83643e765e3392bf76ebe42005107ea833f2->enter($__internal_5f73028c86db8f3f3b14db7b5eec83643e765e3392bf76ebe42005107ea833f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_5f73028c86db8f3f3b14db7b5eec83643e765e3392bf76ebe42005107ea833f2->leave($__internal_5f73028c86db8f3f3b14db7b5eec83643e765e3392bf76ebe42005107ea833f2_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_3d017c4ab49e9f7dbede6e598e2d4ba0a1016bffcc82b5232f538f26b5e861cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d017c4ab49e9f7dbede6e598e2d4ba0a1016bffcc82b5232f538f26b5e861cc->enter($__internal_3d017c4ab49e9f7dbede6e598e2d4ba0a1016bffcc82b5232f538f26b5e861cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_3d017c4ab49e9f7dbede6e598e2d4ba0a1016bffcc82b5232f538f26b5e861cc->leave($__internal_3d017c4ab49e9f7dbede6e598e2d4ba0a1016bffcc82b5232f538f26b5e861cc_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f64b0aceee9d9aa5c986df2bb9b9fb5d21ad887d9038a74000aa6dc314e4608b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64b0aceee9d9aa5c986df2bb9b9fb5d21ad887d9038a74000aa6dc314e4608b->enter($__internal_f64b0aceee9d9aa5c986df2bb9b9fb5d21ad887d9038a74000aa6dc314e4608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_f64b0aceee9d9aa5c986df2bb9b9fb5d21ad887d9038a74000aa6dc314e4608b->leave($__internal_f64b0aceee9d9aa5c986df2bb9b9fb5d21ad887d9038a74000aa6dc314e4608b_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e1d3a939bb5b090407383e018bec5fd12530cade2853822344b5a6d2b5628ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d3a939bb5b090407383e018bec5fd12530cade2853822344b5a6d2b5628ba9->enter($__internal_e1d3a939bb5b090407383e018bec5fd12530cade2853822344b5a6d2b5628ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_e1d3a939bb5b090407383e018bec5fd12530cade2853822344b5a6d2b5628ba9->leave($__internal_e1d3a939bb5b090407383e018bec5fd12530cade2853822344b5a6d2b5628ba9_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
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
", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Admin/Security/Resetting/checkEmail.html.twig");
    }
}
