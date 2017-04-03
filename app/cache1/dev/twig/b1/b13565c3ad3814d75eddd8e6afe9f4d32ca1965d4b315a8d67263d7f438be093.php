<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_a3e7e7938b2062f57bda789835b2638b850e1052f25d611571288c0d90dd9f6b extends Twig_Template
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
        $__internal_8bf7b795d1af45782fbad02dbd229e022a479aea87bb5b1d118bbac52fe1fc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf7b795d1af45782fbad02dbd229e022a479aea87bb5b1d118bbac52fe1fc49->enter($__internal_8bf7b795d1af45782fbad02dbd229e022a479aea87bb5b1d118bbac52fe1fc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_8bf7b795d1af45782fbad02dbd229e022a479aea87bb5b1d118bbac52fe1fc49->leave($__internal_8bf7b795d1af45782fbad02dbd229e022a479aea87bb5b1d118bbac52fe1fc49_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_3a7070929d2f908d97ef4af14390d7c78857bc698503a9f0da2e78a330a74f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7070929d2f908d97ef4af14390d7c78857bc698503a9f0da2e78a330a74f30->enter($__internal_3a7070929d2f908d97ef4af14390d7c78857bc698503a9f0da2e78a330a74f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_3a7070929d2f908d97ef4af14390d7c78857bc698503a9f0da2e78a330a74f30->leave($__internal_3a7070929d2f908d97ef4af14390d7c78857bc698503a9f0da2e78a330a74f30_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
