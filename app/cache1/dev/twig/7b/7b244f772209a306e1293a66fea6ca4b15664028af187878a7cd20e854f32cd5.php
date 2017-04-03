<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_65dc0cd2fa57d973e80290815d0d71dc70c7f2b8499021123649f7f756a64ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_262127935965175ac1090ecfbe208720aa9ce7b7d698efcc9a3400dd06ed3dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262127935965175ac1090ecfbe208720aa9ce7b7d698efcc9a3400dd06ed3dbf->enter($__internal_262127935965175ac1090ecfbe208720aa9ce7b7d698efcc9a3400dd06ed3dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262127935965175ac1090ecfbe208720aa9ce7b7d698efcc9a3400dd06ed3dbf->leave($__internal_262127935965175ac1090ecfbe208720aa9ce7b7d698efcc9a3400dd06ed3dbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a60d243ca970bc496ecbebad3b42f2c2f7362268ce3de171014e76e71b6829d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a60d243ca970bc496ecbebad3b42f2c2f7362268ce3de171014e76e71b6829d->enter($__internal_9a60d243ca970bc496ecbebad3b42f2c2f7362268ce3de171014e76e71b6829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9a60d243ca970bc496ecbebad3b42f2c2f7362268ce3de171014e76e71b6829d->leave($__internal_9a60d243ca970bc496ecbebad3b42f2c2f7362268ce3de171014e76e71b6829d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
", "@FOSUser/Registration/checkEmail.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
