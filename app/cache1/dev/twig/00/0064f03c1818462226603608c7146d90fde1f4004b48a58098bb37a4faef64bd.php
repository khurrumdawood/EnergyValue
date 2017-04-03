<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_35dcf8d70cf943d3309b5b1fe94221413041723e9dfddb4d92871b9fc1fa91ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ea6764233e2bd7ccbe456a6bfaac690a4fcd175138544818934fe32d9c8e3008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6764233e2bd7ccbe456a6bfaac690a4fcd175138544818934fe32d9c8e3008->enter($__internal_ea6764233e2bd7ccbe456a6bfaac690a4fcd175138544818934fe32d9c8e3008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6764233e2bd7ccbe456a6bfaac690a4fcd175138544818934fe32d9c8e3008->leave($__internal_ea6764233e2bd7ccbe456a6bfaac690a4fcd175138544818934fe32d9c8e3008_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7730be5fa2d8673f228c7627f92bd9bddd44a53530115a464e3665865e9b992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7730be5fa2d8673f228c7627f92bd9bddd44a53530115a464e3665865e9b992->enter($__internal_c7730be5fa2d8673f228c7627f92bd9bddd44a53530115a464e3665865e9b992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_c7730be5fa2d8673f228c7627f92bd9bddd44a53530115a464e3665865e9b992->leave($__internal_c7730be5fa2d8673f228c7627f92bd9bddd44a53530115a464e3665865e9b992_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
