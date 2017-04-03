<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_5c7499ef878aa1df462812744ae4d7567148371d121fabc1ad81b7669f3dc29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Security:base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_registration' => array($this, 'block_sonata_user_registration'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f6caee8bd605330ebdda54df8a427d873c847a4dd8cf1defc0db20ed5c5ed1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6caee8bd605330ebdda54df8a427d873c847a4dd8cf1defc0db20ed5c5ed1f->enter($__internal_2f6caee8bd605330ebdda54df8a427d873c847a4dd8cf1defc0db20ed5c5ed1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6caee8bd605330ebdda54df8a427d873c847a4dd8cf1defc0db20ed5c5ed1f->leave($__internal_2f6caee8bd605330ebdda54df8a427d873c847a4dd8cf1defc0db20ed5c5ed1f_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7fdece21db27d9f51ef1da2f1843083694ba856cd77c5c5ffbd47c411173cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fdece21db27d9f51ef1da2f1843083694ba856cd77c5c5ffbd47c411173cd4->enter($__internal_b7fdece21db27d9f51ef1da2f1843083694ba856cd77c5c5ffbd47c411173cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 17
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 76
        echo "        </div>
        <div class=\"col-sm-6\">
            ";
        // line 78
        $this->displayBlock('sonata_user_registration', $context, $blocks);
        // line 81
        echo "        </div>
    </div>
";
        
        $__internal_b7fdece21db27d9f51ef1da2f1843083694ba856cd77c5c5ffbd47c411173cd4->leave($__internal_b7fdece21db27d9f51ef1da2f1843083694ba856cd77c5c5ffbd47c411173cd4_prof);

    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_15ba1a3326a1242720efac3402dd360581a6b33ae7a776728fcba4ad95518c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ba1a3326a1242720efac3402dd360581a6b33ae7a776728fcba4ad95518c31->enter($__internal_15ba1a3326a1242720efac3402dd360581a6b33ae7a776728fcba4ad95518c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

        // line 18
        echo "                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 26
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 33
        echo "
                    ";
        // line 34
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 73
        echo "                </div>
            </div>
            ";
        
        $__internal_15ba1a3326a1242720efac3402dd360581a6b33ae7a776728fcba4ad95518c31->leave($__internal_15ba1a3326a1242720efac3402dd360581a6b33ae7a776728fcba4ad95518c31_prof);

    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_7ea779b1c02501633c113596b85c805b789a23a1a7b162f11a59826553f1b675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea779b1c02501633c113596b85c805b789a23a1a7b162f11a59826553f1b675->enter($__internal_7ea779b1c02501633c113596b85c805b789a23a1a7b162f11a59826553f1b675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 27
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "                            <div class=\"alert alert-danger alert-error\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 32
        echo "                    ";
        
        $__internal_7ea779b1c02501633c113596b85c805b789a23a1a7b162f11a59826553f1b675->leave($__internal_7ea779b1c02501633c113596b85c805b789a23a1a7b162f11a59826553f1b675_prof);

    }

    // line 34
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_ff8444fb839166c14e0a7c095873ce8a7241f2f5e556ef6affd7ec89ae71ca2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8444fb839166c14e0a7c095873ce8a7241f2f5e556ef6affd7ec89ae71ca2c->enter($__internal_ff8444fb839166c14e0a7c095873ce8a7241f2f5e556ef6affd7ec89ae71ca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 35
        echo "                        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </form>
                    ";
        
        $__internal_ff8444fb839166c14e0a7c095873ce8a7241f2f5e556ef6affd7ec89ae71ca2c->leave($__internal_ff8444fb839166c14e0a7c095873ce8a7241f2f5e556ef6affd7ec89ae71ca2c_prof);

    }

    // line 78
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        $__internal_80a4638b5377f93634a44273648943529eb41bbf7058ebd05c0d9ba4a048b36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a4638b5377f93634a44273648943529eb41bbf7058ebd05c0d9ba4a048b36e->enter($__internal_80a4638b5377f93634a44273648943529eb41bbf7058ebd05c0d9ba4a048b36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_registration"));

        // line 79
        echo "                ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 80
        echo "            ";
        
        $__internal_80a4638b5377f93634a44273648943529eb41bbf7058ebd05c0d9ba4a048b36e->leave($__internal_80a4638b5377f93634a44273648943529eb41bbf7058ebd05c0d9ba4a048b36e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 80,  206 => 79,  200 => 78,  188 => 68,  177 => 62,  166 => 54,  154 => 45,  146 => 40,  142 => 39,  136 => 36,  131 => 35,  125 => 34,  118 => 32,  112 => 29,  109 => 28,  106 => 27,  100 => 26,  91 => 73,  89 => 34,  86 => 33,  84 => 26,  76 => 21,  71 => 18,  65 => 17,  56 => 81,  54 => 78,  50 => 76,  48 => 17,  44 => 15,  38 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"row\">
        <div class=\"col-sm-6\">
            {% block sonata_user_login %}
                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>
                </div>

                <div class=\"panel-body\">

                    {% block sonata_user_login_error %}
                        {% if error %}
                            <div class=\"alert alert-danger alert-error\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block sonata_user_login_form %}
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"{{ path('fos_user_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\"/>
                                </div>
                            </div>
                        </form>
                    {% endblock %}
                </div>
            </div>
            {% endblock %}
        </div>
        <div class=\"col-sm-6\">
            {% block sonata_user_registration %}
                {% render controller(\"SonataUserBundle:RegistrationFOSUser1:register\") %}
            {% endblock %}
        </div>
    </div>
{% endblock fos_user_content %}
", "SonataUserBundle:Security:base_login.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Security/base_login.html.twig");
    }
}
