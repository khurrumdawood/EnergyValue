<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_c1c82465c04d4b68029ff917a8b8bd2c50dc3eb46f35192929f093c95f8b59c8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d77bf1463f62317b8e7143a6ed1ada524d071e5385838d4280c0fec99032a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d77bf1463f62317b8e7143a6ed1ada524d071e5385838d4280c0fec99032a87->enter($__internal_8d77bf1463f62317b8e7143a6ed1ada524d071e5385838d4280c0fec99032a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d77bf1463f62317b8e7143a6ed1ada524d071e5385838d4280c0fec99032a87->leave($__internal_8d77bf1463f62317b8e7143a6ed1ada524d071e5385838d4280c0fec99032a87_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_db968afa4c84649b99c6b1fd82a65aeb539a0e85990c19d1bd0a33c4f6add8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db968afa4c84649b99c6b1fd82a65aeb539a0e85990c19d1bd0a33c4f6add8a7->enter($__internal_db968afa4c84649b99c6b1fd82a65aeb539a0e85990c19d1bd0a33c4f6add8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_db968afa4c84649b99c6b1fd82a65aeb539a0e85990c19d1bd0a33c4f6add8a7->leave($__internal_db968afa4c84649b99c6b1fd82a65aeb539a0e85990c19d1bd0a33c4f6add8a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 33,  39 => 15,  33 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
