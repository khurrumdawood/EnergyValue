<?php

/* @SonataUser/Admin/Security/login.html.twig */
class __TwigTemplate_898548aaba0091c6e8d042a084b2d5958b63e3ee3b55309273194bcad02060bd extends Twig_Template
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
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3171989994826a09c5dc4f71b0be356adbbee86405be4ac665cda10730306fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3171989994826a09c5dc4f71b0be356adbbee86405be4ac665cda10730306fb6->enter($__internal_3171989994826a09c5dc4f71b0be356adbbee86405be4ac665cda10730306fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3171989994826a09c5dc4f71b0be356adbbee86405be4ac665cda10730306fb6->leave($__internal_3171989994826a09c5dc4f71b0be356adbbee86405be4ac665cda10730306fb6_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b4db0c65cf090451ac1c3ba24bf47a62ac458a62494eb1690b4682bdf4270aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4db0c65cf090451ac1c3ba24bf47a62ac458a62494eb1690b4682bdf4270aea->enter($__internal_b4db0c65cf090451ac1c3ba24bf47a62ac458a62494eb1690b4682bdf4270aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b4db0c65cf090451ac1c3ba24bf47a62ac458a62494eb1690b4682bdf4270aea->leave($__internal_b4db0c65cf090451ac1c3ba24bf47a62ac458a62494eb1690b4682bdf4270aea_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_b2a8e142721b63ec3251c1bc8e065286a8e24d1f6a04bd68c90f79b020b640a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a8e142721b63ec3251c1bc8e065286a8e24d1f6a04bd68c90f79b020b640a7->enter($__internal_b2a8e142721b63ec3251c1bc8e065286a8e24d1f6a04bd68c90f79b020b640a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_b2a8e142721b63ec3251c1bc8e065286a8e24d1f6a04bd68c90f79b020b640a7->leave($__internal_b2a8e142721b63ec3251c1bc8e065286a8e24d1f6a04bd68c90f79b020b640a7_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_0fe02efb5db8c5353adbab9391107601ad95d99f9e4e379b8a113e5c7cfb3189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe02efb5db8c5353adbab9391107601ad95d99f9e4e379b8a113e5c7cfb3189->enter($__internal_0fe02efb5db8c5353adbab9391107601ad95d99f9e4e379b8a113e5c7cfb3189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_0fe02efb5db8c5353adbab9391107601ad95d99f9e4e379b8a113e5c7cfb3189->leave($__internal_0fe02efb5db8c5353adbab9391107601ad95d99f9e4e379b8a113e5c7cfb3189_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_cf0ca05dd248a8ca5f7e587fe3ff6d6be476ce797ad3c9c1548bd3457b8e9e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0ca05dd248a8ca5f7e587fe3ff6d6be476ce797ad3c9c1548bd3457b8e9e90->enter($__internal_cf0ca05dd248a8ca5f7e587fe3ff6d6be476ce797ad3c9c1548bd3457b8e9e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_cf0ca05dd248a8ca5f7e587fe3ff6d6be476ce797ad3c9c1548bd3457b8e9e90->leave($__internal_cf0ca05dd248a8ca5f7e587fe3ff6d6be476ce797ad3c9c1548bd3457b8e9e90_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_52cfd307ad767eb32fd1c3213f7ff1041becdeee45eb13747241c7f96e7ccc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cfd307ad767eb32fd1c3213f7ff1041becdeee45eb13747241c7f96e7ccc8e->enter($__internal_52cfd307ad767eb32fd1c3213f7ff1041becdeee45eb13747241c7f96e7ccc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <div>
                        <img style=\"width:64px;\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 24
        echo "                ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 25
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 30
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 70
        echo "        </div>
    </div>

";
        
        $__internal_52cfd307ad767eb32fd1c3213f7ff1041becdeee45eb13747241c7f96e7ccc8e->leave($__internal_52cfd307ad767eb32fd1c3213f7ff1041becdeee45eb13747241c7f96e7ccc8e_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_36cc6582e121dfff167434138f056c2197c98c9a32d543d0fb37923378fae3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cc6582e121dfff167434138f056c2197c98c9a32d543d0fb37923378fae3fa->enter($__internal_36cc6582e121dfff167434138f056c2197c98c9a32d543d0fb37923378fae3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 31
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 38
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                ";
        // line 68
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["reset_route"]) ? $context["reset_route"] : $this->getContext($context, "reset_route")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_36cc6582e121dfff167434138f056c2197c98c9a32d543d0fb37923378fae3fa->leave($__internal_36cc6582e121dfff167434138f056c2197c98c9a32d543d0fb37923378fae3fa_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_1b3b0d95e63852c48b41c45a533793eb198f9ea1fcaa585a9fc32b233bb9c263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3b0d95e63852c48b41c45a533793eb198f9ea1fcaa585a9fc32b233bb9c263->enter($__internal_1b3b0d95e63852c48b41c45a533793eb198f9ea1fcaa585a9fc32b233bb9c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 32
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 33
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 37
        echo "                ";
        
        $__internal_1b3b0d95e63852c48b41c45a533793eb198f9ea1fcaa585a9fc32b233bb9c263->leave($__internal_1b3b0d95e63852c48b41c45a533793eb198f9ea1fcaa585a9fc32b233bb9c263_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 37,  224 => 34,  221 => 33,  218 => 32,  212 => 31,  200 => 68,  192 => 62,  184 => 57,  172 => 48,  162 => 43,  156 => 40,  152 => 39,  147 => 38,  144 => 31,  138 => 30,  128 => 70,  126 => 30,  121 => 27,  115 => 25,  112 => 24,  104 => 21,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
                {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <div>
                        <img style=\"width:64px;\" src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                    </div>
                {% endif %}
                {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <span>{{ sonata_admin.adminPool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            {% block sonata_user_login_form %}
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>
                <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                {#<a href=\"{{ path('sonata_user_admin_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>#}
                <a href=\"{{ reset_route }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/login.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Admin\\Security\\login.html.twig");
    }
}
