<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_c7907b801fd593f40b16be22543a6d6b1585b3e6f1de0912624a19c941ad3d01 extends Twig_Template
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
        $__internal_67c8ceebc12512354704cbe88b0742c730201126234403360a81335105da4a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c8ceebc12512354704cbe88b0742c730201126234403360a81335105da4a1c->enter($__internal_67c8ceebc12512354704cbe88b0742c730201126234403360a81335105da4a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_change_password")));
        echo "
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_67c8ceebc12512354704cbe88b0742c730201126234403360a81335105da4a1c->leave($__internal_67c8ceebc12512354704cbe88b0742c730201126234403360a81335105da4a1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
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
        return new Twig_Source("{{ form_start(form, {'action': path('sonata_user_change_password')  }) }}
{{ form_widget(form) }}

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>
    </div>
</div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/changePassword_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\ChangePassword\\changePassword_content.html.twig");
    }
}
