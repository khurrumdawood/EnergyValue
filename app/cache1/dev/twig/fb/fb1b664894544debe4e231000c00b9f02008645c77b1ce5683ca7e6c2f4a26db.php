<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_6fa48293f36ef2dbcf92d8737e1fddc1576123b6ffea075a4ee9bdd5bd667d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f82ec9703d076b9c543cf6a4baf8562666a931adbab709c10cca9432e3cdc953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82ec9703d076b9c543cf6a4baf8562666a931adbab709c10cca9432e3cdc953->enter($__internal_f82ec9703d076b9c543cf6a4baf8562666a931adbab709c10cca9432e3cdc953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f82ec9703d076b9c543cf6a4baf8562666a931adbab709c10cca9432e3cdc953->leave($__internal_f82ec9703d076b9c543cf6a4baf8562666a931adbab709c10cca9432e3cdc953_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
