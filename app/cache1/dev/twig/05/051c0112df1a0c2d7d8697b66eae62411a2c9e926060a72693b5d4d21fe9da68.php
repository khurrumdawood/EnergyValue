<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_c6e2745e3c45571a17f358fecc7f13c6e24b4b9c5c12cbd16470bfacf04c8ebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_79b3b3308c2d9454e9191ca22899a84b05f3adbb266eb7be01b937ecb5642fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b3b3308c2d9454e9191ca22899a84b05f3adbb266eb7be01b937ecb5642fa6->enter($__internal_79b3b3308c2d9454e9191ca22899a84b05f3adbb266eb7be01b937ecb5642fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b3b3308c2d9454e9191ca22899a84b05f3adbb266eb7be01b937ecb5642fa6->leave($__internal_79b3b3308c2d9454e9191ca22899a84b05f3adbb266eb7be01b937ecb5642fa6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f70870c2e43369c99ca68fb1d4eb639f7ca2d18329c24f703d4c03a15343e206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70870c2e43369c99ca68fb1d4eb639f7ca2d18329c24f703d4c03a15343e206->enter($__internal_f70870c2e43369c99ca68fb1d4eb639f7ca2d18329c24f703d4c03a15343e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f70870c2e43369c99ca68fb1d4eb639f7ca2d18329c24f703d4c03a15343e206->leave($__internal_f70870c2e43369c99ca68fb1d4eb639f7ca2d18329c24f703d4c03a15343e206_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
