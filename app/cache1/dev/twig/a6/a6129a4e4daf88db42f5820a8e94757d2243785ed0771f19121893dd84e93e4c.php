<?php

/* @Vault/Admin/soft_delete.html.twig */
class __TwigTemplate_ffc5a2f1b83ad3379d7a1b9a467511014b29b84b80567c0670685f61c61e9a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Vault/Admin/soft_delete.html.twig", 1);
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
        $__internal_de9665977c0af72ce711daf1bd9eda510ebdf2e07722b975a7ad498bc3fcc82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9665977c0af72ce711daf1bd9eda510ebdf2e07722b975a7ad498bc3fcc82c->enter($__internal_de9665977c0af72ce711daf1bd9eda510ebdf2e07722b975a7ad498bc3fcc82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Vault/Admin/soft_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de9665977c0af72ce711daf1bd9eda510ebdf2e07722b975a7ad498bc3fcc82c->leave($__internal_de9665977c0af72ce711daf1bd9eda510ebdf2e07722b975a7ad498bc3fcc82c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a147f2be926df24d8573ee17a0bf875d5efa49c5977b08b7bf97f0fa292c982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a147f2be926df24d8573ee17a0bf875d5efa49c5977b08b7bf97f0fa292c982->enter($__internal_1a147f2be926df24d8573ee17a0bf875d5efa49c5977b08b7bf97f0fa292c982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "VaultBundle:Admin:softDelete";
        
        $__internal_1a147f2be926df24d8573ee17a0bf875d5efa49c5977b08b7bf97f0fa292c982->leave($__internal_1a147f2be926df24d8573ee17a0bf875d5efa49c5977b08b7bf97f0fa292c982_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb9c17eca2b127eb29de0d7857e802bf2d0e904cba0655f96ff7872cbab4fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb9c17eca2b127eb29de0d7857e802bf2d0e904cba0655f96ff7872cbab4fdd->enter($__internal_ecb9c17eca2b127eb29de0d7857e802bf2d0e904cba0655f96ff7872cbab4fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:softDelete page</h1>
";
        
        $__internal_ecb9c17eca2b127eb29de0d7857e802bf2d0e904cba0655f96ff7872cbab4fdd->leave($__internal_ecb9c17eca2b127eb29de0d7857e802bf2d0e904cba0655f96ff7872cbab4fdd_prof);

    }

    public function getTemplateName()
    {
        return "@Vault/Admin/soft_delete.html.twig";
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
", "@Vault/Admin/soft_delete.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle\\Resources\\views\\Admin\\soft_delete.html.twig");
    }
}
