<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3de65abbd0ca44b8d26db694f32b3ea78c4dfe9767d840f82be695fb411935a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c8caa416f0c507a69a00e213325b6b482d3651ed78e133b55c4314ee5bd61376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8caa416f0c507a69a00e213325b6b482d3651ed78e133b55c4314ee5bd61376->enter($__internal_c8caa416f0c507a69a00e213325b6b482d3651ed78e133b55c4314ee5bd61376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8caa416f0c507a69a00e213325b6b482d3651ed78e133b55c4314ee5bd61376->leave($__internal_c8caa416f0c507a69a00e213325b6b482d3651ed78e133b55c4314ee5bd61376_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2347c8cde1ea23ebb76fb75725fdaabd30a66c553f4006c7df03b02962a51cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2347c8cde1ea23ebb76fb75725fdaabd30a66c553f4006c7df03b02962a51cab->enter($__internal_2347c8cde1ea23ebb76fb75725fdaabd30a66c553f4006c7df03b02962a51cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2347c8cde1ea23ebb76fb75725fdaabd30a66c553f4006c7df03b02962a51cab->leave($__internal_2347c8cde1ea23ebb76fb75725fdaabd30a66c553f4006c7df03b02962a51cab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
