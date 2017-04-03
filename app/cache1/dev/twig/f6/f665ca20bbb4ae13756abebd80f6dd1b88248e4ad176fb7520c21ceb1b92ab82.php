<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_917a7dee20a3a5b193742f9d94e841ab777d9862fd65770ecaa3267f3040b947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1ed9d20190583bebe3cd76dd96c3dc1271cc71072cb46723a78c4dd2961941dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed9d20190583bebe3cd76dd96c3dc1271cc71072cb46723a78c4dd2961941dc->enter($__internal_1ed9d20190583bebe3cd76dd96c3dc1271cc71072cb46723a78c4dd2961941dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed9d20190583bebe3cd76dd96c3dc1271cc71072cb46723a78c4dd2961941dc->leave($__internal_1ed9d20190583bebe3cd76dd96c3dc1271cc71072cb46723a78c4dd2961941dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a85001317a560f3603c1ab5c17860750f3da9bc487de39c3203cbd83db17a50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85001317a560f3603c1ab5c17860750f3da9bc487de39c3203cbd83db17a50a->enter($__internal_a85001317a560f3603c1ab5c17860750f3da9bc487de39c3203cbd83db17a50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a85001317a560f3603c1ab5c17860750f3da9bc487de39c3203cbd83db17a50a->leave($__internal_a85001317a560f3603c1ab5c17860750f3da9bc487de39c3203cbd83db17a50a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
