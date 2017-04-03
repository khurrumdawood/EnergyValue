<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_6933874174a75447ef0c51cedc3d8f41f5881cc43a3c50322975607bb07bab3e extends Twig_Template
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
        $__internal_6d6b01699fba5a6015da84cac404050a61490e05507f8a76cfc16c1663b4a3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6b01699fba5a6015da84cac404050a61490e05507f8a76cfc16c1663b4a3f3->enter($__internal_6d6b01699fba5a6015da84cac404050a61490e05507f8a76cfc16c1663b4a3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))))));
        echo "
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6d6b01699fba5a6015da84cac404050a61490e05507f8a76cfc16c1663b4a3f3->leave($__internal_6d6b01699fba5a6015da84cac404050a61490e05507f8a76cfc16c1663b4a3f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 6,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'action': path('sonata_user_resetting_reset', {'token': token } ) }) }}
{{ form_widget(form) }}

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary\" />
    </div>
</div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
