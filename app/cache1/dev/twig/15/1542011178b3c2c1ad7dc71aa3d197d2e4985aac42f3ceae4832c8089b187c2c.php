<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b256ecfc86e2b37ab3766dddab1f82977af80b6a3368621b9150d91de88f523d extends Twig_Template
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
        $__internal_d11be7a27f6884402491441ad909882a5a4f59b3ed718d39cc1ef2a701bdc9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11be7a27f6884402491441ad909882a5a4f59b3ed718d39cc1ef2a701bdc9bc->enter($__internal_d11be7a27f6884402491441ad909882a5a4f59b3ed718d39cc1ef2a701bdc9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d11be7a27f6884402491441ad909882a5a4f59b3ed718d39cc1ef2a701bdc9bc->leave($__internal_d11be7a27f6884402491441ad909882a5a4f59b3ed718d39cc1ef2a701bdc9bc_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8271c8889ace70cc2551dc75577c8682f913a3759d31bc2d27b9972b89a3ef89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8271c8889ace70cc2551dc75577c8682f913a3759d31bc2d27b9972b89a3ef89->enter($__internal_8271c8889ace70cc2551dc75577c8682f913a3759d31bc2d27b9972b89a3ef89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8271c8889ace70cc2551dc75577c8682f913a3759d31bc2d27b9972b89a3ef89->leave($__internal_8271c8889ace70cc2551dc75577c8682f913a3759d31bc2d27b9972b89a3ef89_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_122080fffcfd9e3f6039953d78679e9f58f4f59eac9d79f8db9fdcab2f2a4d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122080fffcfd9e3f6039953d78679e9f58f4f59eac9d79f8db9fdcab2f2a4d90->enter($__internal_122080fffcfd9e3f6039953d78679e9f58f4f59eac9d79f8db9fdcab2f2a4d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_122080fffcfd9e3f6039953d78679e9f58f4f59eac9d79f8db9fdcab2f2a4d90->leave($__internal_122080fffcfd9e3f6039953d78679e9f58f4f59eac9d79f8db9fdcab2f2a4d90_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eb4e2e5e791fe96addb4d2c058cf64e01562669c94de7ce267fc97022cbc2084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4e2e5e791fe96addb4d2c058cf64e01562669c94de7ce267fc97022cbc2084->enter($__internal_eb4e2e5e791fe96addb4d2c058cf64e01562669c94de7ce267fc97022cbc2084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eb4e2e5e791fe96addb4d2c058cf64e01562669c94de7ce267fc97022cbc2084->leave($__internal_eb4e2e5e791fe96addb4d2c058cf64e01562669c94de7ce267fc97022cbc2084_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
