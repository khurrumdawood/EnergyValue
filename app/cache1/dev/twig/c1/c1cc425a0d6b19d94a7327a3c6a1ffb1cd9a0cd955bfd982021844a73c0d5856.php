<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1798c6627ae979e775e2ca9c654d02cfaca5bdba55450d075998a98be71dc013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d16ea2716d16851bbbc7b8f50e79402d73c4d84c0e7f20171298290c38287785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16ea2716d16851bbbc7b8f50e79402d73c4d84c0e7f20171298290c38287785->enter($__internal_d16ea2716d16851bbbc7b8f50e79402d73c4d84c0e7f20171298290c38287785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_d16ea2716d16851bbbc7b8f50e79402d73c4d84c0e7f20171298290c38287785->leave($__internal_d16ea2716d16851bbbc7b8f50e79402d73c4d84c0e7f20171298290c38287785_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ade3e091ed4521890a1fcf2af091c4096e9424d37b09105f968ffe39071f1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ade3e091ed4521890a1fcf2af091c4096e9424d37b09105f968ffe39071f1be->enter($__internal_8ade3e091ed4521890a1fcf2af091c4096e9424d37b09105f968ffe39071f1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_8ade3e091ed4521890a1fcf2af091c4096e9424d37b09105f968ffe39071f1be->leave($__internal_8ade3e091ed4521890a1fcf2af091c4096e9424d37b09105f968ffe39071f1be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>", "@FOSUser/layout.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
