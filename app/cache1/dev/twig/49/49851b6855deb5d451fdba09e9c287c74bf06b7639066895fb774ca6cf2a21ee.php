<?php

/* @SonataUser/Profile/edit_profile_content.html.twig */
class __TwigTemplate_bb6edba34ec74978d3922b1dd0774ab626c833c157b2affc482e5ac18e393c53 extends Twig_Template
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
        $__internal_2c773e1239911bf2f0c58eaafd66c8e3bc2f8effb9fa2f281f5e755bcdf56548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c773e1239911bf2f0c58eaafd66c8e3bc2f8effb9fa2f281f5e755bcdf56548->enter($__internal_2c773e1239911bf2f0c58eaafd66c8e3bc2f8effb9fa2f281f5e755bcdf56548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_profile_content.html.twig"));

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
        
        $__internal_2c773e1239911bf2f0c58eaafd66c8e3bc2f8effb9fa2f281f5e755bcdf56548->leave($__internal_2c773e1239911bf2f0c58eaafd66c8e3bc2f8effb9fa2f281f5e755bcdf56548_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_profile_content.html.twig";
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
", "@SonataUser/Profile/edit_profile_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Profile\\edit_profile_content.html.twig");
    }
}
