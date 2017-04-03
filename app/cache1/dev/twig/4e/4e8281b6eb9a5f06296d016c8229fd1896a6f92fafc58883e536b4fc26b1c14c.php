<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_237f2ef605169b5bdb0d2e0463ad7a78e7faae540144d41fd23c098681d92aed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_0ad5fff49f65de3e0862077331bc2e4ce8f4eeb21d578b90a546212c79b83f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad5fff49f65de3e0862077331bc2e4ce8f4eeb21d578b90a546212c79b83f4a->enter($__internal_0ad5fff49f65de3e0862077331bc2e4ce8f4eeb21d578b90a546212c79b83f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad5fff49f65de3e0862077331bc2e4ce8f4eeb21d578b90a546212c79b83f4a->leave($__internal_0ad5fff49f65de3e0862077331bc2e4ce8f4eeb21d578b90a546212c79b83f4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_545f034df6917a67b6d253d377d461195eee3a3fdd43583f917d590104bcc3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545f034df6917a67b6d253d377d461195eee3a3fdd43583f917d590104bcc3ee->enter($__internal_545f034df6917a67b6d253d377d461195eee3a3fdd43583f917d590104bcc3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_545f034df6917a67b6d253d377d461195eee3a3fdd43583f917d590104bcc3ee->leave($__internal_545f034df6917a67b6d253d377d461195eee3a3fdd43583f917d590104bcc3ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
