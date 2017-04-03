<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_b2a0aa81f6de0f0a23be5e58816bbce01bfda913d03f1d9dbebdd46189647f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_628d5d43575b075fc66e2bb07c16697f0368e7cd44674c20ed842489742625e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628d5d43575b075fc66e2bb07c16697f0368e7cd44674c20ed842489742625e9->enter($__internal_628d5d43575b075fc66e2bb07c16697f0368e7cd44674c20ed842489742625e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628d5d43575b075fc66e2bb07c16697f0368e7cd44674c20ed842489742625e9->leave($__internal_628d5d43575b075fc66e2bb07c16697f0368e7cd44674c20ed842489742625e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa353e7ba5282aa43a7ffd0abeeed13ef5927a29c82362740a23da644bf596c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa353e7ba5282aa43a7ffd0abeeed13ef5927a29c82362740a23da644bf596c4->enter($__internal_aa353e7ba5282aa43a7ffd0abeeed13ef5927a29c82362740a23da644bf596c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 9
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_aa353e7ba5282aa43a7ffd0abeeed13ef5927a29c82362740a23da644bf596c4->leave($__internal_aa353e7ba5282aa43a7ffd0abeeed13ef5927a29c82362740a23da644bf596c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
