<?php

/* VaultBundle:Admin:soft_delete.html.twig */
class __TwigTemplate_efcbc5b4c4309e25f6c1f3a82a548c6ddb9b265574aa60cddade3156ac2a4853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "VaultBundle:Admin:soft_delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f80bf8257b1a7d84bfb65e947325f3ecb484901c2646f9fd0ece156fa244a575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80bf8257b1a7d84bfb65e947325f3ecb484901c2646f9fd0ece156fa244a575->enter($__internal_f80bf8257b1a7d84bfb65e947325f3ecb484901c2646f9fd0ece156fa244a575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VaultBundle:Admin:soft_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80bf8257b1a7d84bfb65e947325f3ecb484901c2646f9fd0ece156fa244a575->leave($__internal_f80bf8257b1a7d84bfb65e947325f3ecb484901c2646f9fd0ece156fa244a575_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f7a127045d96aae8bf646abb8a1bd9484de32d0846bec40aab5cda7613c760c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7a127045d96aae8bf646abb8a1bd9484de32d0846bec40aab5cda7613c760c->enter($__internal_3f7a127045d96aae8bf646abb8a1bd9484de32d0846bec40aab5cda7613c760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "VaultBundle:Admin:softDelete";
        
        $__internal_3f7a127045d96aae8bf646abb8a1bd9484de32d0846bec40aab5cda7613c760c->leave($__internal_3f7a127045d96aae8bf646abb8a1bd9484de32d0846bec40aab5cda7613c760c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f713ef88e076c931e478b8059d29f6cc47462e0176f283f5662336293ce82a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f713ef88e076c931e478b8059d29f6cc47462e0176f283f5662336293ce82a8->enter($__internal_0f713ef88e076c931e478b8059d29f6cc47462e0176f283f5662336293ce82a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:softDelete page</h1>
";
        
        $__internal_0f713ef88e076c931e478b8059d29f6cc47462e0176f283f5662336293ce82a8->leave($__internal_0f713ef88e076c931e478b8059d29f6cc47462e0176f283f5662336293ce82a8_prof);

    }

    public function getTemplateName()
    {
        return "VaultBundle:Admin:soft_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}VaultBundle:Admin:softDelete{% endblock %}

{% block body %}
<h1>Welcome to the Admin:softDelete page</h1>
{% endblock %}
", "VaultBundle:Admin:soft_delete.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle/Resources/views/Admin/soft_delete.html.twig");
    }
}
