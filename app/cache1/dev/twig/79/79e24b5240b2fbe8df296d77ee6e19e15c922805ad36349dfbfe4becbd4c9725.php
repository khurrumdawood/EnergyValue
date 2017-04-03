<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_addb8c3d39e0203552141b1c32096b6dd7fff6c26aca2deb527d09a0e2160079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd8a966f8fcfbae2a35da0077eb016e134c9df2624a6649e9fb290c98b8bc9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8a966f8fcfbae2a35da0077eb016e134c9df2624a6649e9fb290c98b8bc9df->enter($__internal_dd8a966f8fcfbae2a35da0077eb016e134c9df2624a6649e9fb290c98b8bc9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_dd8a966f8fcfbae2a35da0077eb016e134c9df2624a6649e9fb290c98b8bc9df->leave($__internal_dd8a966f8fcfbae2a35da0077eb016e134c9df2624a6649e9fb290c98b8bc9df_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_e5966001c104455d91797e7e0ba40f04c1039873e537b35b163dfae24443b5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5966001c104455d91797e7e0ba40f04c1039873e537b35b163dfae24443b5c8->enter($__internal_e5966001c104455d91797e7e0ba40f04c1039873e537b35b163dfae24443b5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_e5966001c104455d91797e7e0ba40f04c1039873e537b35b163dfae24443b5c8->leave($__internal_e5966001c104455d91797e7e0ba40f04c1039873e537b35b163dfae24443b5c8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "@SonataAdmin/Core/user_block.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\user_block.html.twig");
    }
}
