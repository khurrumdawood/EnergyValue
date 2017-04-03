<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_0524fa78f1097957347d1a868dd4ba091a373f24787ef283ad97d4ea756d5fbd extends Twig_Template
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
        $__internal_9768a7ea87c3dc547d22c5dddad8f9f9fa3d49d940f6d86c7b4947c9bda0d85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9768a7ea87c3dc547d22c5dddad8f9f9fa3d49d940f6d86c7b4947c9bda0d85b->enter($__internal_9768a7ea87c3dc547d22c5dddad8f9f9fa3d49d940f6d86c7b4947c9bda0d85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_9768a7ea87c3dc547d22c5dddad8f9f9fa3d49d940f6d86c7b4947c9bda0d85b->leave($__internal_9768a7ea87c3dc547d22c5dddad8f9f9fa3d49d940f6d86c7b4947c9bda0d85b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
", "@FOSUser/Profile/show_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
