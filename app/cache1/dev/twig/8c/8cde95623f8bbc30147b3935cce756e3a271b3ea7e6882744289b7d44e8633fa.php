<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_2058d2e94382d14d27f6b9798c054e434a35d0495149d82190e502cad91f7599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_ee2152ecfc0b00af8f5c70e1d7935e8aafeda93a379db9bf24d6dbd7ac90e640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2152ecfc0b00af8f5c70e1d7935e8aafeda93a379db9bf24d6dbd7ac90e640->enter($__internal_ee2152ecfc0b00af8f5c70e1d7935e8aafeda93a379db9bf24d6dbd7ac90e640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2152ecfc0b00af8f5c70e1d7935e8aafeda93a379db9bf24d6dbd7ac90e640->leave($__internal_ee2152ecfc0b00af8f5c70e1d7935e8aafeda93a379db9bf24d6dbd7ac90e640_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3145dc27527e19691e99e91fa941e69f284dc79c0edc53b89c623be2076bc54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3145dc27527e19691e99e91fa941e69f284dc79c0edc53b89c623be2076bc54c->enter($__internal_3145dc27527e19691e99e91fa941e69f284dc79c0edc53b89c623be2076bc54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3145dc27527e19691e99e91fa941e69f284dc79c0edc53b89c623be2076bc54c->leave($__internal_3145dc27527e19691e99e91fa941e69f284dc79c0edc53b89c623be2076bc54c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
