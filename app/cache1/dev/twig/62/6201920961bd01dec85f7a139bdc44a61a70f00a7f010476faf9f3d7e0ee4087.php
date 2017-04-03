<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d4ddf74c3c5155c885125c84acabfc996316351729befe3fc749484a1911836a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_903bb72485e930a068436ff7a2b6b2b71ab87f9f1a80cf6ba4af9f95a191336f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903bb72485e930a068436ff7a2b6b2b71ab87f9f1a80cf6ba4af9f95a191336f->enter($__internal_903bb72485e930a068436ff7a2b6b2b71ab87f9f1a80cf6ba4af9f95a191336f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_903bb72485e930a068436ff7a2b6b2b71ab87f9f1a80cf6ba4af9f95a191336f->leave($__internal_903bb72485e930a068436ff7a2b6b2b71ab87f9f1a80cf6ba4af9f95a191336f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab62b509b653b54d7c58e4b5d7a7a7ae11fea17485e9b09801f7d2fea98ba112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab62b509b653b54d7c58e4b5d7a7a7ae11fea17485e9b09801f7d2fea98ba112->enter($__internal_ab62b509b653b54d7c58e4b5d7a7a7ae11fea17485e9b09801f7d2fea98ba112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab62b509b653b54d7c58e4b5d7a7a7ae11fea17485e9b09801f7d2fea98ba112->leave($__internal_ab62b509b653b54d7c58e4b5d7a7a7ae11fea17485e9b09801f7d2fea98ba112_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1b0ddcf3ac13ea43e8fab7a5e21a9d1f8f84b4897e7c79d3c97488c3303f86c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0ddcf3ac13ea43e8fab7a5e21a9d1f8f84b4897e7c79d3c97488c3303f86c6->enter($__internal_1b0ddcf3ac13ea43e8fab7a5e21a9d1f8f84b4897e7c79d3c97488c3303f86c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1b0ddcf3ac13ea43e8fab7a5e21a9d1f8f84b4897e7c79d3c97488c3303f86c6->leave($__internal_1b0ddcf3ac13ea43e8fab7a5e21a9d1f8f84b4897e7c79d3c97488c3303f86c6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_468023b46b3dbb96898e0f43a1fff19b77d46d412ff46b158159e748b10601b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468023b46b3dbb96898e0f43a1fff19b77d46d412ff46b158159e748b10601b0->enter($__internal_468023b46b3dbb96898e0f43a1fff19b77d46d412ff46b158159e748b10601b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_468023b46b3dbb96898e0f43a1fff19b77d46d412ff46b158159e748b10601b0->leave($__internal_468023b46b3dbb96898e0f43a1fff19b77d46d412ff46b158159e748b10601b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
