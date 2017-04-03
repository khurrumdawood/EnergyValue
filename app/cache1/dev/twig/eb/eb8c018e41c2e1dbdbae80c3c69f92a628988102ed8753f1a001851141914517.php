<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_b19b852245e50aa33668d9a69e91ec762480c29a0641328f76ae0877fe4cc152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86a776c7d3c0f1f380ed9486540323fcffee67798ba9ffe206729cc895da98a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a776c7d3c0f1f380ed9486540323fcffee67798ba9ffe206729cc895da98a0->enter($__internal_86a776c7d3c0f1f380ed9486540323fcffee67798ba9ffe206729cc895da98a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_86a776c7d3c0f1f380ed9486540323fcffee67798ba9ffe206729cc895da98a0->leave($__internal_86a776c7d3c0f1f380ed9486540323fcffee67798ba9ffe206729cc895da98a0_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_f941db6fd6a27ccd855606b10ee8c5c6ee23a273bf67c776c8507fa76c5892d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f941db6fd6a27ccd855606b10ee8c5c6ee23a273bf67c776c8507fa76c5892d7->enter($__internal_f941db6fd6a27ccd855606b10ee8c5c6ee23a273bf67c776c8507fa76c5892d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_f941db6fd6a27ccd855606b10ee8c5c6ee23a273bf67c776c8507fa76c5892d7->leave($__internal_f941db6fd6a27ccd855606b10ee8c5c6ee23a273bf67c776c8507fa76c5892d7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "@SonataBlock/Block/block_base.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
