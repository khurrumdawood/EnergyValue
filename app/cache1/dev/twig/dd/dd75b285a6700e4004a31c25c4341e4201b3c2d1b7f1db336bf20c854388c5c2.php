<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2acfd08539b29da77b340cdb7bf17494343683468e4cb6e9d03082d9f87b8141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4f67d1d5798c380eb49997b22137c7a033dece85053ebaa2d770fb97e589a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f67d1d5798c380eb49997b22137c7a033dece85053ebaa2d770fb97e589a70->enter($__internal_e4f67d1d5798c380eb49997b22137c7a033dece85053ebaa2d770fb97e589a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f67d1d5798c380eb49997b22137c7a033dece85053ebaa2d770fb97e589a70->leave($__internal_e4f67d1d5798c380eb49997b22137c7a033dece85053ebaa2d770fb97e589a70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d6d9591a79fade61909b8775ceaddacfd0bb2e38b4bdf09547ae621aebff5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6d9591a79fade61909b8775ceaddacfd0bb2e38b4bdf09547ae621aebff5ad->enter($__internal_5d6d9591a79fade61909b8775ceaddacfd0bb2e38b4bdf09547ae621aebff5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5d6d9591a79fade61909b8775ceaddacfd0bb2e38b4bdf09547ae621aebff5ad->leave($__internal_5d6d9591a79fade61909b8775ceaddacfd0bb2e38b4bdf09547ae621aebff5ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
