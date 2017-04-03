<?php

/* @SonataUser/Admin/Security/Resetting/reset.html.twig */
class __TwigTemplate_0569cb66f6028f7206fd86f00263c17f000cf0e9a4a98c25ffe4cfae4ea0bad1 extends Twig_Template
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
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8e26acc07d0f8d19938d4abff12a75d92f9d537726152c9e28a8fc429c88c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e26acc07d0f8d19938d4abff12a75d92f9d537726152c9e28a8fc429c88c42->enter($__internal_f8e26acc07d0f8d19938d4abff12a75d92f9d537726152c9e28a8fc429c88c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e26acc07d0f8d19938d4abff12a75d92f9d537726152c9e28a8fc429c88c42->leave($__internal_f8e26acc07d0f8d19938d4abff12a75d92f9d537726152c9e28a8fc429c88c42_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5140aebe0ac67482a578b0698e186e685bd7d25e9c9a0db3e34db190b2c9cd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140aebe0ac67482a578b0698e186e685bd7d25e9c9a0db3e34db190b2c9cd1c->enter($__internal_5140aebe0ac67482a578b0698e186e685bd7d25e9c9a0db3e34db190b2c9cd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5140aebe0ac67482a578b0698e186e685bd7d25e9c9a0db3e34db190b2c9cd1c->leave($__internal_5140aebe0ac67482a578b0698e186e685bd7d25e9c9a0db3e34db190b2c9cd1c_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_d6ed269c934f29b65911f6d4c5db080645c0ec9558bebc9d0204979d8727b334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ed269c934f29b65911f6d4c5db080645c0ec9558bebc9d0204979d8727b334->enter($__internal_d6ed269c934f29b65911f6d4c5db080645c0ec9558bebc9d0204979d8727b334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_d6ed269c934f29b65911f6d4c5db080645c0ec9558bebc9d0204979d8727b334->leave($__internal_d6ed269c934f29b65911f6d4c5db080645c0ec9558bebc9d0204979d8727b334_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e14a3cfdf4f00fb1e4a6499500626f56cefcd46330808c4b519580403931cb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14a3cfdf4f00fb1e4a6499500626f56cefcd46330808c4b519580403931cb31->enter($__internal_e14a3cfdf4f00fb1e4a6499500626f56cefcd46330808c4b519580403931cb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_e14a3cfdf4f00fb1e4a6499500626f56cefcd46330808c4b519580403931cb31->leave($__internal_e14a3cfdf4f00fb1e4a6499500626f56cefcd46330808c4b519580403931cb31_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_037bce1a5910e49b6115aab1c2f8c83a286adcb14ed94d60a3eed94711d3c025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037bce1a5910e49b6115aab1c2f8c83a286adcb14ed94d60a3eed94711d3c025->enter($__internal_037bce1a5910e49b6115aab1c2f8c83a286adcb14ed94d60a3eed94711d3c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_037bce1a5910e49b6115aab1c2f8c83a286adcb14ed94d60a3eed94711d3c025->leave($__internal_037bce1a5910e49b6115aab1c2f8c83a286adcb14ed94d60a3eed94711d3c025_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_106924caf97712c922a67364d2c3f7bf2741f22db35443e67af555b847feae9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106924caf97712c922a67364d2c3f7bf2741f22db35443e67af555b847feae9a->enter($__internal_106924caf97712c922a67364d2c3f7bf2741f22db35443e67af555b847feae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 43
        echo "        </div>
    </div>

";
        
        $__internal_106924caf97712c922a67364d2c3f7bf2741f22db35443e67af555b847feae9a->leave($__internal_106924caf97712c922a67364d2c3f7bf2741f22db35443e67af555b847feae9a_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_d25a83cac9fb1cc25584cb558883b3add809b16cc02ad1d1a01de7d90a1c0f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25a83cac9fb1cc25584cb558883b3add809b16cc02ad1d1a01de7d90a1c0f9d->enter($__internal_d25a83cac9fb1cc25584cb558883b3add809b16cc02ad1d1a01de7d90a1c0f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

        // line 26
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password_confirmation", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            ";
        
        $__internal_d25a83cac9fb1cc25584cb558883b3add809b16cc02ad1d1a01de7d90a1c0f9d->leave($__internal_d25a83cac9fb1cc25584cb558883b3add809b16cc02ad1d1a01de7d90a1c0f9d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 34,  145 => 32,  139 => 29,  134 => 27,  129 => 26,  123 => 25,  113 => 43,  111 => 25,  106 => 22,  100 => 20,  98 => 19,  94 => 18,  89 => 15,  83 => 14,  71 => 12,  60 => 9,  49 => 6,  38 => 3,  23 => 1,);
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
            {% block sonata_user_reset_form %}
                <p class=\"login-box-msg\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_reset', {'token': token}) }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"{{ 'form.new_password'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"{{ 'form.new_password_confirmation'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    {{ form_widget(form._token) }}

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/reset.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Admin\\Security\\Resetting\\reset.html.twig");
    }
}
