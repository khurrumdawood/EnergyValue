<?php

/* SonataUserBundle:Profile:edit_profile_content.html.twig */
class __TwigTemplate_7c5f4e90279585443c0bcf1dfc35f56a0eefa1c18a84c1bdf2accb3ef8943dc0 extends Twig_Template
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
        $__internal_acc081ac4c9081339b535fec9b7c815bb5219f330a3f9332ff785fed5a3be4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc081ac4c9081339b535fec9b7c815bb5219f330a3f9332ff785fed5a3be4ce->enter($__internal_acc081ac4c9081339b535fec9b7c815bb5219f330a3f9332ff785fed5a3be4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_acc081ac4c9081339b535fec9b7c815bb5219f330a3f9332ff785fed5a3be4ce->leave($__internal_acc081ac4c9081339b535fec9b7c815bb5219f330a3f9332ff785fed5a3be4ce_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile_content.html.twig";
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
        return new Twig_Source("<form action=\"{{ path('sonata_user_profile_edit') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
    </div>
</form>
", "SonataUserBundle:Profile:edit_profile_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Profile/edit_profile_content.html.twig");
    }
}
