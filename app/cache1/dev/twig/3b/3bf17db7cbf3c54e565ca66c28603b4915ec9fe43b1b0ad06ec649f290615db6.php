<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_d919af5777cb6a1a0cdf92d25dc2b69ab34c232a5d0e9e63a736c855d6fe557b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_89b5391d2a567735be364ae03880c10459f35282e1246cb8e234a6e9d3153780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b5391d2a567735be364ae03880c10459f35282e1246cb8e234a6e9d3153780->enter($__internal_89b5391d2a567735be364ae03880c10459f35282e1246cb8e234a6e9d3153780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b5391d2a567735be364ae03880c10459f35282e1246cb8e234a6e9d3153780->leave($__internal_89b5391d2a567735be364ae03880c10459f35282e1246cb8e234a6e9d3153780_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b781048f4391c8d0ca41888e9b6506b808246d2a2f8e221a164166c2e0d97dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b781048f4391c8d0ca41888e9b6506b808246d2a2f8e221a164166c2e0d97dbf->enter($__internal_b781048f4391c8d0ca41888e9b6506b808246d2a2f8e221a164166c2e0d97dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b781048f4391c8d0ca41888e9b6506b808246d2a2f8e221a164166c2e0d97dbf->leave($__internal_b781048f4391c8d0ca41888e9b6506b808246d2a2f8e221a164166c2e0d97dbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
", "FOSUserBundle:Resetting:checkEmail.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
