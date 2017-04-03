<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_403753733dae73c55e230f21e9df4f76ead4726dcb75cae800d43bdd30940567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be3d475d49a4cae9cc700e8b932c58288294ea0d77cf63095c43aa3ed8e89149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3d475d49a4cae9cc700e8b932c58288294ea0d77cf63095c43aa3ed8e89149->enter($__internal_be3d475d49a4cae9cc700e8b932c58288294ea0d77cf63095c43aa3ed8e89149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3d475d49a4cae9cc700e8b932c58288294ea0d77cf63095c43aa3ed8e89149->leave($__internal_be3d475d49a4cae9cc700e8b932c58288294ea0d77cf63095c43aa3ed8e89149_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad560b05d51fce6df6288d1c8c991f385d415dd830406ca27fd89d5b1dafdb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad560b05d51fce6df6288d1c8c991f385d415dd830406ca27fd89d5b1dafdb6e->enter($__internal_ad560b05d51fce6df6288d1c8c991f385d415dd830406ca27fd89d5b1dafdb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_ad560b05d51fce6df6288d1c8c991f385d415dd830406ca27fd89d5b1dafdb6e->leave($__internal_ad560b05d51fce6df6288d1c8c991f385d415dd830406ca27fd89d5b1dafdb6e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  50 => 7,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
