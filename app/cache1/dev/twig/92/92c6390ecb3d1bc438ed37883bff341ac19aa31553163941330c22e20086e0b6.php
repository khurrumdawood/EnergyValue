<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_400e1feda5eca1847d46dfba898261c799cfceaafc97344f5dffb36d74137572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2abe57790bd99501e98a181f3ffc204e8c7aabd1c8629aca3aa20a9800ac4ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abe57790bd99501e98a181f3ffc204e8c7aabd1c8629aca3aa20a9800ac4ec8->enter($__internal_2abe57790bd99501e98a181f3ffc204e8c7aabd1c8629aca3aa20a9800ac4ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2abe57790bd99501e98a181f3ffc204e8c7aabd1c8629aca3aa20a9800ac4ec8->leave($__internal_2abe57790bd99501e98a181f3ffc204e8c7aabd1c8629aca3aa20a9800ac4ec8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80ee8c1d07deea767e1fe2ccdfd9ee13b328ca165a350171cdf1c8c9a9d5539c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ee8c1d07deea767e1fe2ccdfd9ee13b328ca165a350171cdf1c8c9a9d5539c->enter($__internal_80ee8c1d07deea767e1fe2ccdfd9ee13b328ca165a350171cdf1c8c9a9d5539c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80ee8c1d07deea767e1fe2ccdfd9ee13b328ca165a350171cdf1c8c9a9d5539c->leave($__internal_80ee8c1d07deea767e1fe2ccdfd9ee13b328ca165a350171cdf1c8c9a9d5539c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04b8bceb2054d18294d84e7b58259dab667c582aa4b10a8f37bab574a92fd05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b8bceb2054d18294d84e7b58259dab667c582aa4b10a8f37bab574a92fd05a->enter($__internal_04b8bceb2054d18294d84e7b58259dab667c582aa4b10a8f37bab574a92fd05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04b8bceb2054d18294d84e7b58259dab667c582aa4b10a8f37bab574a92fd05a->leave($__internal_04b8bceb2054d18294d84e7b58259dab667c582aa4b10a8f37bab574a92fd05a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a34ad23bf5a57f0170573ff5714b034ef9755e1215d087e130fbd0b99fa53f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a34ad23bf5a57f0170573ff5714b034ef9755e1215d087e130fbd0b99fa53f1->enter($__internal_1a34ad23bf5a57f0170573ff5714b034ef9755e1215d087e130fbd0b99fa53f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1a34ad23bf5a57f0170573ff5714b034ef9755e1215d087e130fbd0b99fa53f1->leave($__internal_1a34ad23bf5a57f0170573ff5714b034ef9755e1215d087e130fbd0b99fa53f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
