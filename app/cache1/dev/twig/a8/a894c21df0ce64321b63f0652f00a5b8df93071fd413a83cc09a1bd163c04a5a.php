<?php

/* ::base.html.twig */
class __TwigTemplate_99439cb722c81643e26edaf70cde04a46c26cb4daa106b2d46a6e59572850d5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cca38b7b66943a01df23fabfba1e0297d496be43f59902bc48bb56a89806c6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca38b7b66943a01df23fabfba1e0297d496be43f59902bc48bb56a89806c6bb->enter($__internal_cca38b7b66943a01df23fabfba1e0297d496be43f59902bc48bb56a89806c6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cca38b7b66943a01df23fabfba1e0297d496be43f59902bc48bb56a89806c6bb->leave($__internal_cca38b7b66943a01df23fabfba1e0297d496be43f59902bc48bb56a89806c6bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a5b5993da00f38a5828efd8d43e807065a9f51b8106852a54ca1bd17e39af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a5b5993da00f38a5828efd8d43e807065a9f51b8106852a54ca1bd17e39af6->enter($__internal_b5a5b5993da00f38a5828efd8d43e807065a9f51b8106852a54ca1bd17e39af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b5a5b5993da00f38a5828efd8d43e807065a9f51b8106852a54ca1bd17e39af6->leave($__internal_b5a5b5993da00f38a5828efd8d43e807065a9f51b8106852a54ca1bd17e39af6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93bb2e6845096774ba5c524dd648ad0c7c7373082547c368b739fd91a71923b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bb2e6845096774ba5c524dd648ad0c7c7373082547c368b739fd91a71923b2->enter($__internal_93bb2e6845096774ba5c524dd648ad0c7c7373082547c368b739fd91a71923b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_93bb2e6845096774ba5c524dd648ad0c7c7373082547c368b739fd91a71923b2->leave($__internal_93bb2e6845096774ba5c524dd648ad0c7c7373082547c368b739fd91a71923b2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_052b2948ee65c52b1401bedc75d17b84de48bccef4201513c9632b1e1fd9d2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052b2948ee65c52b1401bedc75d17b84de48bccef4201513c9632b1e1fd9d2c8->enter($__internal_052b2948ee65c52b1401bedc75d17b84de48bccef4201513c9632b1e1fd9d2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_052b2948ee65c52b1401bedc75d17b84de48bccef4201513c9632b1e1fd9d2c8->leave($__internal_052b2948ee65c52b1401bedc75d17b84de48bccef4201513c9632b1e1fd9d2c8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a68fde20438401af2d5c528c7b784e9065bad6767c2e19ba2621517d4cde5e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68fde20438401af2d5c528c7b784e9065bad6767c2e19ba2621517d4cde5e26->enter($__internal_a68fde20438401af2d5c528c7b784e9065bad6767c2e19ba2621517d4cde5e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a68fde20438401af2d5c528c7b784e9065bad6767c2e19ba2621517d4cde5e26->leave($__internal_a68fde20438401af2d5c528c7b784e9065bad6767c2e19ba2621517d4cde5e26_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app/Resources\\views/base.html.twig");
    }
}
