<?php

/* SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_c5e09457e6f930826a58b48b6fbcd33ccbbfb55c55d2082a3b0440cbfe63443a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61f20919b5673b579c7a6f3380a9047b8cc29a4c67b7d803e8be06b329d9b578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f20919b5673b579c7a6f3380a9047b8cc29a4c67b7d803e8be06b329d9b578->enter($__internal_61f20919b5673b579c7a6f3380a9047b8cc29a4c67b7d803e8be06b329d9b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f20919b5673b579c7a6f3380a9047b8cc29a4c67b7d803e8be06b329d9b578->leave($__internal_61f20919b5673b579c7a6f3380a9047b8cc29a4c67b7d803e8be06b329d9b578_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_9a6152eef500055bd1c42efa3ec7dba052a6727111e4bbb7d43ba18eef69e81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6152eef500055bd1c42efa3ec7dba052a6727111e4bbb7d43ba18eef69e81a->enter($__internal_9a6152eef500055bd1c42efa3ec7dba052a6727111e4bbb7d43ba18eef69e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_9a6152eef500055bd1c42efa3ec7dba052a6727111e4bbb7d43ba18eef69e81a->leave($__internal_9a6152eef500055bd1c42efa3ec7dba052a6727111e4bbb7d43ba18eef69e81a_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ff662f05071d27f1de3578bb49b127284f6a585c6816826f5192a848aa53dd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff662f05071d27f1de3578bb49b127284f6a585c6816826f5192a848aa53dd9e->enter($__internal_ff662f05071d27f1de3578bb49b127284f6a585c6816826f5192a848aa53dd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_ff662f05071d27f1de3578bb49b127284f6a585c6816826f5192a848aa53dd9e->leave($__internal_ff662f05071d27f1de3578bb49b127284f6a585c6816826f5192a848aa53dd9e_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e2b98e942d836d6972841c24ced8eafcdc41ad677976b43447a3799f32b2091d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b98e942d836d6972841c24ced8eafcdc41ad677976b43447a3799f32b2091d->enter($__internal_e2b98e942d836d6972841c24ced8eafcdc41ad677976b43447a3799f32b2091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_e2b98e942d836d6972841c24ced8eafcdc41ad677976b43447a3799f32b2091d->leave($__internal_e2b98e942d836d6972841c24ced8eafcdc41ad677976b43447a3799f32b2091d_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_98593e2a348efabf19eaad871c496fde585ac22db50fb5ef8523e9356d8d1d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98593e2a348efabf19eaad871c496fde585ac22db50fb5ef8523e9356d8d1d5a->enter($__internal_98593e2a348efabf19eaad871c496fde585ac22db50fb5ef8523e9356d8d1d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_98593e2a348efabf19eaad871c496fde585ac22db50fb5ef8523e9356d8d1d5a->leave($__internal_98593e2a348efabf19eaad871c496fde585ac22db50fb5ef8523e9356d8d1d5a_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_7a1d73b6e1f2f77a1fe029db6675f9ccc857ed0b18473d080244305516632317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1d73b6e1f2f77a1fe029db6675f9ccc857ed0b18473d080244305516632317->enter($__internal_7a1d73b6e1f2f77a1fe029db6675f9ccc857ed0b18473d080244305516632317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_7a1d73b6e1f2f77a1fe029db6675f9ccc857ed0b18473d080244305516632317->leave($__internal_7a1d73b6e1f2f77a1fe029db6675f9ccc857ed0b18473d080244305516632317_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig";
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
", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Admin/Security/Resetting/passwordAlreadyRequested.html.twig");
    }
}
