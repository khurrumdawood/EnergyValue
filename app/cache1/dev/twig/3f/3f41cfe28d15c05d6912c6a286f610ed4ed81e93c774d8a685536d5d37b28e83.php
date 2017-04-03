<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_afb2833e28bfe548ba67a27b1bb822d5b950e560e7728e36ee74acb4af2e1bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04be61185b6d842f408132f2ad816417820dac4154df44e346f8a98ce11158d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04be61185b6d842f408132f2ad816417820dac4154df44e346f8a98ce11158d2->enter($__internal_04be61185b6d842f408132f2ad816417820dac4154df44e346f8a98ce11158d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04be61185b6d842f408132f2ad816417820dac4154df44e346f8a98ce11158d2->leave($__internal_04be61185b6d842f408132f2ad816417820dac4154df44e346f8a98ce11158d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_119bf30744377f6c89f721ce2198da56c88bcfdb4a97f7ad2d6fbd7a206cba08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119bf30744377f6c89f721ce2198da56c88bcfdb4a97f7ad2d6fbd7a206cba08->enter($__internal_119bf30744377f6c89f721ce2198da56c88bcfdb4a97f7ad2d6fbd7a206cba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_119bf30744377f6c89f721ce2198da56c88bcfdb4a97f7ad2d6fbd7a206cba08->leave($__internal_119bf30744377f6c89f721ce2198da56c88bcfdb4a97f7ad2d6fbd7a206cba08_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting_reset\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
