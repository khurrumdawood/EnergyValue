<?php

/* @SonataUser/Admin/Security/two_step_form.html.twig */
class __TwigTemplate_14b9b0d205859689f3d6f6e331625849ce98337e6c4d7a87e631e712ca5de273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08bffaa855c2d9afe99b2f1d062615ebae32fe580088dac7e26fd7e28932c2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bffaa855c2d9afe99b2f1d062615ebae32fe580088dac7e26fd7e28932c2d5->enter($__internal_08bffaa855c2d9afe99b2f1d062615ebae32fe580088dac7e26fd7e28932c2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/two_step_form.html.twig"));

        // line 11
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/layout.css\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/colors.css\" type=\"text/css\" media=\"all\">
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"connection\">

                    <form method=\"POST\">
                        ";
        // line 25
        if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) == "error")) {
            // line 26
            echo "                            <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_two_step_code_error", array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 28
        echo "
                        <div class=\"control-group\">
                            <label for=\"code\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_two_step_code", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"controls\">
                                <input type=\"text\" id=\"username\" name=\"_code\" class=\"big sonata-medium\" autocomplete='off'/>
                                <span class=\"help-block sonata-ba-field-help\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_two_step_code_help", array(), "SonataUserBundle"), "html", null, true);
        echo "</span>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_08bffaa855c2d9afe99b2f1d062615ebae32fe580088dac7e26fd7e28932c2d5->leave($__internal_08bffaa855c2d9afe99b2f1d062615ebae32fe580088dac7e26fd7e28932c2d5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/two_step_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  60 => 34,  53 => 30,  49 => 28,  43 => 26,  41 => 25,  27 => 14,  22 => 11,);
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
<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataadmin/bootstrap/css/bootstrap.min.css') }}\" type=\"text/css\" media=\"all\" >
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/layout.css\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/colors.css\" type=\"text/css\" media=\"all\">
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"connection\">

                    <form method=\"POST\">
                        {% if state == 'error' %}
                            <div class=\"alert alert-error\">{{ 'label_two_step_code_error'|trans({}, 'SonataUserBundle') }}</div>
                        {% endif %}

                        <div class=\"control-group\">
                            <label for=\"code\">{{ 'label_two_step_code'|trans({}, 'SonataUserBundle') }}</label>

                            <div class=\"controls\">
                                <input type=\"text\" id=\"username\" name=\"_code\" class=\"big sonata-medium\" autocomplete='off'/>
                                <span class=\"help-block sonata-ba-field-help\">{{ 'message_two_step_code_help'|trans({}, 'SonataUserBundle') }}</span>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
", "@SonataUser/Admin/Security/two_step_form.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Admin\\Security\\two_step_form.html.twig");
    }
}
