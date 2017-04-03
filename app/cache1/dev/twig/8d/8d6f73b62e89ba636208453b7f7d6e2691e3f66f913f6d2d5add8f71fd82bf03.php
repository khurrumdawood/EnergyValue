<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_3b9e187796a32908df1791b3d30426a373596a8f4fc76ce1494a89fb3a66d6f5 extends Twig_Template
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
        $__internal_45b92dda68d805589cdfb96ea195b95ca330a5afec60e876590ae9dab0ff38cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b92dda68d805589cdfb96ea195b95ca330a5afec60e876590ae9dab0ff38cd->enter($__internal_45b92dda68d805589cdfb96ea195b95ca330a5afec60e876590ae9dab0ff38cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_45b92dda68d805589cdfb96ea195b95ca330a5afec60e876590ae9dab0ff38cd->leave($__internal_45b92dda68d805589cdfb96ea195b95ca330a5afec60e876590ae9dab0ff38cd_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4416fcaefe8660f37a88ee368f6e8a6c5105f53fe4348cf4830d0c7b412d09b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4416fcaefe8660f37a88ee368f6e8a6c5105f53fe4348cf4830d0c7b412d09b6->enter($__internal_4416fcaefe8660f37a88ee368f6e8a6c5105f53fe4348cf4830d0c7b412d09b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4416fcaefe8660f37a88ee368f6e8a6c5105f53fe4348cf4830d0c7b412d09b6->leave($__internal_4416fcaefe8660f37a88ee368f6e8a6c5105f53fe4348cf4830d0c7b412d09b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
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
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
