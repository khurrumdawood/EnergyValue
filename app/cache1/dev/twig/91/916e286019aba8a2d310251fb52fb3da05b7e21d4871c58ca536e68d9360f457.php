<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_a55187b20c37f06298b1fc2b2673e4cc8a13c4f49a3e9055772dfcc6fdf7fd3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c570af45f0cc061eb82e6b4d5d7d24485b94f7c96eb9fef856bf5c5e4f16c510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c570af45f0cc061eb82e6b4d5d7d24485b94f7c96eb9fef856bf5c5e4f16c510->enter($__internal_c570af45f0cc061eb82e6b4d5d7d24485b94f7c96eb9fef856bf5c5e4f16c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c570af45f0cc061eb82e6b4d5d7d24485b94f7c96eb9fef856bf5c5e4f16c510->leave($__internal_c570af45f0cc061eb82e6b4d5d7d24485b94f7c96eb9fef856bf5c5e4f16c510_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a8940588e7f026b84c2ab71cf171f41f4ae1c3a39500a86db9f2cd1843855b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8940588e7f026b84c2ab71cf171f41f4ae1c3a39500a86db9f2cd1843855b22->enter($__internal_a8940588e7f026b84c2ab71cf171f41f4ae1c3a39500a86db9f2cd1843855b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_a8940588e7f026b84c2ab71cf171f41f4ae1c3a39500a86db9f2cd1843855b22->leave($__internal_a8940588e7f026b84c2ab71cf171f41f4ae1c3a39500a86db9f2cd1843855b22_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
