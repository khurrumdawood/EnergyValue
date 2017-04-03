<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_e08cacc46c0456e75207c17e8d83c7e49cb25fa8fcd7d60a0a9ed09f976c0b86 extends Twig_Template
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
        $__internal_935a951e57af2d9ba0ea06e1c66e6007e19a17ae11eae6fbd2ca88922cb9a061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935a951e57af2d9ba0ea06e1c66e6007e19a17ae11eae6fbd2ca88922cb9a061->enter($__internal_935a951e57af2d9ba0ea06e1c66e6007e19a17ae11eae6fbd2ca88922cb9a061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_935a951e57af2d9ba0ea06e1c66e6007e19a17ae11eae6fbd2ca88922cb9a061->leave($__internal_935a951e57af2d9ba0ea06e1c66e6007e19a17ae11eae6fbd2ca88922cb9a061_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
