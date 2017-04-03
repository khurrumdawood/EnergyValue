<?php

/* @SonataUser/Profile/edit_authentication_content.html.twig */
class __TwigTemplate_72276660e65f5a2ff96ae18017354318971f9801ef3d4f31c4bc5c48c2387a2f extends Twig_Template
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
        $__internal_1f13b011e5af1754e7c0f2bfd00f4401450af1203d1c2a45aeebd9f104accbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f13b011e5af1754e7c0f2bfd00f4401450af1203d1c2a45aeebd9f104accbf6->enter($__internal_1f13b011e5af1754e7c0f2bfd00f4401450af1203d1c2a45aeebd9f104accbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_authentication_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_1f13b011e5af1754e7c0f2bfd00f4401450af1203d1c2a45aeebd9f104accbf6->leave($__internal_1f13b011e5af1754e7c0f2bfd00f4401450af1203d1c2a45aeebd9f104accbf6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_authentication_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('sonata_user_profile_edit_authentication') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
</form>
", "@SonataUser/Profile/edit_authentication_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Profile\\edit_authentication_content.html.twig");
    }
}
