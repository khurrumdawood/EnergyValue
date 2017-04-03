<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7f58395f2379de5911cdee4769dba763d7537197e747d3affb3405635c4d74cd extends Twig_Template
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
        $__internal_4d0a537984454c3bcbc1952b255137cbdda60835a050029cdd0f72945e90b86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0a537984454c3bcbc1952b255137cbdda60835a050029cdd0f72945e90b86a->enter($__internal_4d0a537984454c3bcbc1952b255137cbdda60835a050029cdd0f72945e90b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_4d0a537984454c3bcbc1952b255137cbdda60835a050029cdd0f72945e90b86a->leave($__internal_4d0a537984454c3bcbc1952b255137cbdda60835a050029cdd0f72945e90b86a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
</div>", "FOSUserBundle:Registration:register_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
