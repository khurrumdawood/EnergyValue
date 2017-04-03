<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_2b0fe3ffb464f6ba140b048ef1a6d816b851aeeff1b30c7e8e38a2aa178910bb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a9ec4b7cbf3ec0b3f95f67a1f2daa70148ace8cce85a805b9b8303f1e660897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9ec4b7cbf3ec0b3f95f67a1f2daa70148ace8cce85a805b9b8303f1e660897->enter($__internal_7a9ec4b7cbf3ec0b3f95f67a1f2daa70148ace8cce85a805b9b8303f1e660897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9ec4b7cbf3ec0b3f95f67a1f2daa70148ace8cce85a805b9b8303f1e660897->leave($__internal_7a9ec4b7cbf3ec0b3f95f67a1f2daa70148ace8cce85a805b9b8303f1e660897_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a912887145cb43f16087a8163c8592deb0b9c63195f86e5263fa0831308738fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a912887145cb43f16087a8163c8592deb0b9c63195f86e5263fa0831308738fd->enter($__internal_a912887145cb43f16087a8163c8592deb0b9c63195f86e5263fa0831308738fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_a912887145cb43f16087a8163c8592deb0b9c63195f86e5263fa0831308738fd->leave($__internal_a912887145cb43f16087a8163c8592deb0b9c63195f86e5263fa0831308738fd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
