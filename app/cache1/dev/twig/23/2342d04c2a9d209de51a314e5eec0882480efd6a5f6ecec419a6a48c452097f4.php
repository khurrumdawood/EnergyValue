<?php

/* @SonataUser/Security/base_login.html.twig */
class __TwigTemplate_73ab1c7eaa7943bcc45f5d951ea3b59743c3dbaade0b6685f48a211a6e288de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Security/base_login.html.twig", 12);
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
        $__internal_830a26280653ac022d00fc5e3ac8bcbb8ed14eb8c5d26503b672e3bb1c13ba08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830a26280653ac022d00fc5e3ac8bcbb8ed14eb8c5d26503b672e3bb1c13ba08->enter($__internal_830a26280653ac022d00fc5e3ac8bcbb8ed14eb8c5d26503b672e3bb1c13ba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Security/base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830a26280653ac022d00fc5e3ac8bcbb8ed14eb8c5d26503b672e3bb1c13ba08->leave($__internal_830a26280653ac022d00fc5e3ac8bcbb8ed14eb8c5d26503b672e3bb1c13ba08_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dddf0da57054243bda59fc60ceb87c5e8aca9b87fe1042b86750c4a864e1916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dddf0da57054243bda59fc60ceb87c5e8aca9b87fe1042b86750c4a864e1916->enter($__internal_5dddf0da57054243bda59fc60ceb87c5e8aca9b87fe1042b86750c4a864e1916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5dddf0da57054243bda59fc60ceb87c5e8aca9b87fe1042b86750c4a864e1916->leave($__internal_5dddf0da57054243bda59fc60ceb87c5e8aca9b87fe1042b86750c4a864e1916_prof);

    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_8c2c1d4607231f335798096fe3ad042df966fb68520db23a6bd2a177f027734d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2c1d4607231f335798096fe3ad042df966fb68520db23a6bd2a177f027734d->enter($__internal_8c2c1d4607231f335798096fe3ad042df966fb68520db23a6bd2a177f027734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

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
        
        $__internal_8c2c1d4607231f335798096fe3ad042df966fb68520db23a6bd2a177f027734d->leave($__internal_8c2c1d4607231f335798096fe3ad042df966fb68520db23a6bd2a177f027734d_prof);

    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_80fa600b27e6f7a1a3955cbf5d786ef4cec31fbcea5c8174168970668fd30969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fa600b27e6f7a1a3955cbf5d786ef4cec31fbcea5c8174168970668fd30969->enter($__internal_80fa600b27e6f7a1a3955cbf5d786ef4cec31fbcea5c8174168970668fd30969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

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
        
        $__internal_80fa600b27e6f7a1a3955cbf5d786ef4cec31fbcea5c8174168970668fd30969->leave($__internal_80fa600b27e6f7a1a3955cbf5d786ef4cec31fbcea5c8174168970668fd30969_prof);

    }

    // line 34
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_e929596be0a6dd9af14c140020ff87b29c79cc749209e652f9872dfed8df69f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e929596be0a6dd9af14c140020ff87b29c79cc749209e652f9872dfed8df69f4->enter($__internal_e929596be0a6dd9af14c140020ff87b29c79cc749209e652f9872dfed8df69f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

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
        
        $__internal_e929596be0a6dd9af14c140020ff87b29c79cc749209e652f9872dfed8df69f4->leave($__internal_e929596be0a6dd9af14c140020ff87b29c79cc749209e652f9872dfed8df69f4_prof);

    }

    // line 78
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        $__internal_77baccf8c71b3ef9f52098929f67c4d05db74a2320f7aabc0b0f985641a711d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77baccf8c71b3ef9f52098929f67c4d05db74a2320f7aabc0b0f985641a711d9->enter($__internal_77baccf8c71b3ef9f52098929f67c4d05db74a2320f7aabc0b0f985641a711d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_registration"));

        // line 79
        echo "                ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 80
        echo "            ";
        
        $__internal_77baccf8c71b3ef9f52098929f67c4d05db74a2320f7aabc0b0f985641a711d9->leave($__internal_77baccf8c71b3ef9f52098929f67c4d05db74a2320f7aabc0b0f985641a711d9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Security/base_login.html.twig";
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
", "@SonataUser/Security/base_login.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Security\\base_login.html.twig");
    }
}
