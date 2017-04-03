<?php

/* SonataUserBundle:Profile:edit_authentication_content.html.twig */
class __TwigTemplate_949f9b21a567a9017d70af43244477e9ff19269fea866f05be1e0aa1b5feb87a extends Twig_Template
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
        $__internal_0d2bf5b445f16a7e88edace9704e01d695a390431addb40cd86a5761aef8a6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2bf5b445f16a7e88edace9704e01d695a390431addb40cd86a5761aef8a6fc->enter($__internal_0d2bf5b445f16a7e88edace9704e01d695a390431addb40cd86a5761aef8a6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_authentication_content.html.twig"));

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
        
        $__internal_0d2bf5b445f16a7e88edace9704e01d695a390431addb40cd86a5761aef8a6fc->leave($__internal_0d2bf5b445f16a7e88edace9704e01d695a390431addb40cd86a5761aef8a6fc_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication_content.html.twig";
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
", "SonataUserBundle:Profile:edit_authentication_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Profile/edit_authentication_content.html.twig");
    }
}
