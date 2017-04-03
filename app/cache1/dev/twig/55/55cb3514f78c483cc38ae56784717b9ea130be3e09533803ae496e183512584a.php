<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_83ce28350b66765c01bb34e4290835b03e99412ffec1c1b98efac5fbfb53e85e extends Twig_Template
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
        $__internal_2d07cd24e70e786a6fbce1932298aae56b12da43bc9cb4aff0db056b36556c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d07cd24e70e786a6fbce1932298aae56b12da43bc9cb4aff0db056b36556c73->enter($__internal_2d07cd24e70e786a6fbce1932298aae56b12da43bc9cb4aff0db056b36556c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>";
        
        $__internal_2d07cd24e70e786a6fbce1932298aae56b12da43bc9cb4aff0db056b36556c73->leave($__internal_2d07cd24e70e786a6fbce1932298aae56b12da43bc9cb4aff0db056b36556c73_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 8,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">{{ 'title_user_registration'|trans({}, 'SonataUserBundle') }}</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            {{ form_widget(form) }}

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>", "@FOSUser/Registration/register_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
