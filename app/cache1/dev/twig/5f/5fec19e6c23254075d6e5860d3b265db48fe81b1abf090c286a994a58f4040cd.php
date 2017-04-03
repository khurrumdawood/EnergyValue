<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1d254fece7bfc245e219b81c2adbe57b890e0919251d88cf9274ff1fd3fb6600 extends Twig_Template
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
        $__internal_e19ffe3335c7bf52cb36cd6679fe8355d09699816720b45d4fd3a25107db0b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19ffe3335c7bf52cb36cd6679fe8355d09699816720b45d4fd3a25107db0b2b->enter($__internal_e19ffe3335c7bf52cb36cd6679fe8355d09699816720b45d4fd3a25107db0b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e19ffe3335c7bf52cb36cd6679fe8355d09699816720b45d4fd3a25107db0b2b->leave($__internal_e19ffe3335c7bf52cb36cd6679fe8355d09699816720b45d4fd3a25107db0b2b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d418317414b6f309deb4fc228e976d9ffae272cc80eecd46ea3bae47ed747e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d418317414b6f309deb4fc228e976d9ffae272cc80eecd46ea3bae47ed747e16->enter($__internal_d418317414b6f309deb4fc228e976d9ffae272cc80eecd46ea3bae47ed747e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d418317414b6f309deb4fc228e976d9ffae272cc80eecd46ea3bae47ed747e16->leave($__internal_d418317414b6f309deb4fc228e976d9ffae272cc80eecd46ea3bae47ed747e16_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c87d1a9b557a58974f48798ac0f32b42e71a01d02205f663e1cc972ae741db72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87d1a9b557a58974f48798ac0f32b42e71a01d02205f663e1cc972ae741db72->enter($__internal_c87d1a9b557a58974f48798ac0f32b42e71a01d02205f663e1cc972ae741db72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c87d1a9b557a58974f48798ac0f32b42e71a01d02205f663e1cc972ae741db72->leave($__internal_c87d1a9b557a58974f48798ac0f32b42e71a01d02205f663e1cc972ae741db72_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1f41efd09f041c55cb16f4a74eac443d8fed845e56047f0443731f301491c37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f41efd09f041c55cb16f4a74eac443d8fed845e56047f0443731f301491c37f->enter($__internal_1f41efd09f041c55cb16f4a74eac443d8fed845e56047f0443731f301491c37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1f41efd09f041c55cb16f4a74eac443d8fed845e56047f0443731f301491c37f->leave($__internal_1f41efd09f041c55cb16f4a74eac443d8fed845e56047f0443731f301491c37f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
