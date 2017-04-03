<?php

/* base.html.twig */
class __TwigTemplate_5ce7fc8af2f3b1faeaa6f157a94b75fd35ad167a3644efa6991c3df46630cc5f extends Twig_Template
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
        $__internal_1cfe2eb0c349f61295839219f80bb128aa1ed5d43afbf7d86a932dc49e64fddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfe2eb0c349f61295839219f80bb128aa1ed5d43afbf7d86a932dc49e64fddd->enter($__internal_1cfe2eb0c349f61295839219f80bb128aa1ed5d43afbf7d86a932dc49e64fddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1cfe2eb0c349f61295839219f80bb128aa1ed5d43afbf7d86a932dc49e64fddd->leave($__internal_1cfe2eb0c349f61295839219f80bb128aa1ed5d43afbf7d86a932dc49e64fddd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_431f8996807b5824353402ccfe39138196395ed5b2aa4a5446727d452a7d8e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431f8996807b5824353402ccfe39138196395ed5b2aa4a5446727d452a7d8e9a->enter($__internal_431f8996807b5824353402ccfe39138196395ed5b2aa4a5446727d452a7d8e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_431f8996807b5824353402ccfe39138196395ed5b2aa4a5446727d452a7d8e9a->leave($__internal_431f8996807b5824353402ccfe39138196395ed5b2aa4a5446727d452a7d8e9a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85d5a65d2b02ef60721afa7b71a42684ea64cacb3e1b7e05c883925abd75d7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d5a65d2b02ef60721afa7b71a42684ea64cacb3e1b7e05c883925abd75d7c8->enter($__internal_85d5a65d2b02ef60721afa7b71a42684ea64cacb3e1b7e05c883925abd75d7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85d5a65d2b02ef60721afa7b71a42684ea64cacb3e1b7e05c883925abd75d7c8->leave($__internal_85d5a65d2b02ef60721afa7b71a42684ea64cacb3e1b7e05c883925abd75d7c8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11a016659e1e38428728768d93b46c832d9136bdf3ab79cf496fe86b77d3337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11a016659e1e38428728768d93b46c832d9136bdf3ab79cf496fe86b77d3337->enter($__internal_b11a016659e1e38428728768d93b46c832d9136bdf3ab79cf496fe86b77d3337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b11a016659e1e38428728768d93b46c832d9136bdf3ab79cf496fe86b77d3337->leave($__internal_b11a016659e1e38428728768d93b46c832d9136bdf3ab79cf496fe86b77d3337_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a95a5dd4ed4635532649c92653827619db48a3bcc19055342737d065e5d6177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a95a5dd4ed4635532649c92653827619db48a3bcc19055342737d065e5d6177->enter($__internal_7a95a5dd4ed4635532649c92653827619db48a3bcc19055342737d065e5d6177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a95a5dd4ed4635532649c92653827619db48a3bcc19055342737d065e5d6177->leave($__internal_7a95a5dd4ed4635532649c92653827619db48a3bcc19055342737d065e5d6177_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Resources\\views\\base.html.twig");
    }
}
