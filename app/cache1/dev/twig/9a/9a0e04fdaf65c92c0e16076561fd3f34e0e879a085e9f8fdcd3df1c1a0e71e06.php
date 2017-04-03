<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_dc1a15324eca508581dcbbf35d772aff30379019f63055809bba021127702939 extends Twig_Template
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
        $__internal_29d0a81cfcd77dd9aed9382cf5e51c8ee8286a3ae05dbcd2b643bcd9c9e590ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d0a81cfcd77dd9aed9382cf5e51c8ee8286a3ae05dbcd2b643bcd9c9e590ab->enter($__internal_29d0a81cfcd77dd9aed9382cf5e51c8ee8286a3ae05dbcd2b643bcd9c9e590ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_29d0a81cfcd77dd9aed9382cf5e51c8ee8286a3ae05dbcd2b643bcd9c9e590ab->leave($__internal_29d0a81cfcd77dd9aed9382cf5e51c8ee8286a3ae05dbcd2b643bcd9c9e590ab_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_1504513a3805978d283830d1d2191311f2935080148fbadd6ca7c04dec8d6265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1504513a3805978d283830d1d2191311f2935080148fbadd6ca7c04dec8d6265->enter($__internal_1504513a3805978d283830d1d2191311f2935080148fbadd6ca7c04dec8d6265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_1504513a3805978d283830d1d2191311f2935080148fbadd6ca7c04dec8d6265->leave($__internal_1504513a3805978d283830d1d2191311f2935080148fbadd6ca7c04dec8d6265_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
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
", "SonataAdminBundle:Core:user_block.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
