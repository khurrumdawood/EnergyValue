<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_9d54e360ea4722537c8b86fa80feacc20414819c74affcdddc8e74a8772635ce extends Twig_Template
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
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95270a29e63e1b6d156811f1ca885e3a1277ebb4928cad49743c4682f30c8fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95270a29e63e1b6d156811f1ca885e3a1277ebb4928cad49743c4682f30c8fab->enter($__internal_95270a29e63e1b6d156811f1ca885e3a1277ebb4928cad49743c4682f30c8fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95270a29e63e1b6d156811f1ca885e3a1277ebb4928cad49743c4682f30c8fab->leave($__internal_95270a29e63e1b6d156811f1ca885e3a1277ebb4928cad49743c4682f30c8fab_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_caefbe4448941fc50d1651b1f99aa5fb6a4aa4fcda935c785b68005e4da70c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caefbe4448941fc50d1651b1f99aa5fb6a4aa4fcda935c785b68005e4da70c8a->enter($__internal_caefbe4448941fc50d1651b1f99aa5fb6a4aa4fcda935c785b68005e4da70c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_caefbe4448941fc50d1651b1f99aa5fb6a4aa4fcda935c785b68005e4da70c8a->leave($__internal_caefbe4448941fc50d1651b1f99aa5fb6a4aa4fcda935c785b68005e4da70c8a_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_94feb978a232fe2d3c9dc7b0522a0439b7c087a51e86482f061c5a729ef1800b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94feb978a232fe2d3c9dc7b0522a0439b7c087a51e86482f061c5a729ef1800b->enter($__internal_94feb978a232fe2d3c9dc7b0522a0439b7c087a51e86482f061c5a729ef1800b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_94feb978a232fe2d3c9dc7b0522a0439b7c087a51e86482f061c5a729ef1800b->leave($__internal_94feb978a232fe2d3c9dc7b0522a0439b7c087a51e86482f061c5a729ef1800b_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5bd0a65e161c6826eabe99ef755a1b4e3267125e191a1f8abd8ddec1c2b5699f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd0a65e161c6826eabe99ef755a1b4e3267125e191a1f8abd8ddec1c2b5699f->enter($__internal_5bd0a65e161c6826eabe99ef755a1b4e3267125e191a1f8abd8ddec1c2b5699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5bd0a65e161c6826eabe99ef755a1b4e3267125e191a1f8abd8ddec1c2b5699f->leave($__internal_5bd0a65e161c6826eabe99ef755a1b4e3267125e191a1f8abd8ddec1c2b5699f_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_4518250ca3dc4f55ff496c38285052d9f5a1aa80ff168803288daacb41bead23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4518250ca3dc4f55ff496c38285052d9f5a1aa80ff168803288daacb41bead23->enter($__internal_4518250ca3dc4f55ff496c38285052d9f5a1aa80ff168803288daacb41bead23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_4518250ca3dc4f55ff496c38285052d9f5a1aa80ff168803288daacb41bead23->leave($__internal_4518250ca3dc4f55ff496c38285052d9f5a1aa80ff168803288daacb41bead23_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_6c703e2ac9d93a75fa1c45e2889039f8313f546eefc17ea3e48298b482601142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c703e2ac9d93a75fa1c45e2889039f8313f546eefc17ea3e48298b482601142->enter($__internal_6c703e2ac9d93a75fa1c45e2889039f8313f546eefc17ea3e48298b482601142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
            ";
        // line 25
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_6c703e2ac9d93a75fa1c45e2889039f8313f546eefc17ea3e48298b482601142->leave($__internal_6c703e2ac9d93a75fa1c45e2889039f8313f546eefc17ea3e48298b482601142_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_ca9fddbe06d5bb1c146119040f554bf095e43f6235e366896a7686cda9405f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9fddbe06d5bb1c146119040f554bf095e43f6235e366896a7686cda9405f65->enter($__internal_ca9fddbe06d5bb1c146119040f554bf095e43f6235e366896a7686cda9405f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 26
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 31
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_ca9fddbe06d5bb1c146119040f554bf095e43f6235e366896a7686cda9405f65->leave($__internal_ca9fddbe06d5bb1c146119040f554bf095e43f6235e366896a7686cda9405f65_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_e60687e6ff0cc9d3adeb242a459f16b8fdf456bc4b66f53a7494740bf7d643b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60687e6ff0cc9d3adeb242a459f16b8fdf456bc4b66f53a7494740bf7d643b5->enter($__internal_e60687e6ff0cc9d3adeb242a459f16b8fdf456bc4b66f53a7494740bf7d643b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 27
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 28
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_e60687e6ff0cc9d3adeb242a459f16b8fdf456bc4b66f53a7494740bf7d643b5->leave($__internal_e60687e6ff0cc9d3adeb242a459f16b8fdf456bc4b66f53a7494740bf7d643b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 30,  180 => 28,  177 => 27,  171 => 26,  160 => 45,  152 => 40,  143 => 34,  138 => 32,  133 => 31,  130 => 26,  124 => 25,  114 => 47,  112 => 25,  107 => 22,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
            {% block sonata_user_reset_request_form %}
                {% block sonata_user_reset_request_error %}
                    {% if invalid_username is defined %}
                        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_send_email') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:request.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Admin/Security/Resetting/request.html.twig");
    }
}
