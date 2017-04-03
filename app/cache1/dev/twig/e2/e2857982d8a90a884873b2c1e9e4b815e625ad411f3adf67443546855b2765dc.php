<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9e20abb88392919504e1c63edc19a8ce147a7960d6d3add13009b278e124c36d extends Twig_Template
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
        $__internal_b37903e97a588e9e05df976c7aae53b263f837c87fd149a8cc8ae1db78ec2254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37903e97a588e9e05df976c7aae53b263f837c87fd149a8cc8ae1db78ec2254->enter($__internal_b37903e97a588e9e05df976c7aae53b263f837c87fd149a8cc8ae1db78ec2254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b37903e97a588e9e05df976c7aae53b263f837c87fd149a8cc8ae1db78ec2254->leave($__internal_b37903e97a588e9e05df976c7aae53b263f837c87fd149a8cc8ae1db78ec2254_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b1118d93b09f29a4427091e55b3f5088334dd4b4941567759429197221c59678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1118d93b09f29a4427091e55b3f5088334dd4b4941567759429197221c59678->enter($__internal_b1118d93b09f29a4427091e55b3f5088334dd4b4941567759429197221c59678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b1118d93b09f29a4427091e55b3f5088334dd4b4941567759429197221c59678->leave($__internal_b1118d93b09f29a4427091e55b3f5088334dd4b4941567759429197221c59678_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1837e09da1ebd1a5bd41043782b5882473b837fa2dd642077e3245a9aa932aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1837e09da1ebd1a5bd41043782b5882473b837fa2dd642077e3245a9aa932aac->enter($__internal_1837e09da1ebd1a5bd41043782b5882473b837fa2dd642077e3245a9aa932aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1837e09da1ebd1a5bd41043782b5882473b837fa2dd642077e3245a9aa932aac->leave($__internal_1837e09da1ebd1a5bd41043782b5882473b837fa2dd642077e3245a9aa932aac_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ef740b266ddd1b60a3b38052cf0299bc2d9becaabcbc08db6b7a48dbc52da879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef740b266ddd1b60a3b38052cf0299bc2d9becaabcbc08db6b7a48dbc52da879->enter($__internal_ef740b266ddd1b60a3b38052cf0299bc2d9becaabcbc08db6b7a48dbc52da879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ef740b266ddd1b60a3b38052cf0299bc2d9becaabcbc08db6b7a48dbc52da879->leave($__internal_ef740b266ddd1b60a3b38052cf0299bc2d9becaabcbc08db6b7a48dbc52da879_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
