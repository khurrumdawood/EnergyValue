<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_9cf7e88cc74ad0e59ad5f1076afb4bcb46039594a2ec1f5cafe3c4c2584430e3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a8e76e5ee0043b408b73936ccb00bdcad504273c04ba44c871930c6b4b36ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a8e76e5ee0043b408b73936ccb00bdcad504273c04ba44c871930c6b4b36ed->enter($__internal_f7a8e76e5ee0043b408b73936ccb00bdcad504273c04ba44c871930c6b4b36ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a8e76e5ee0043b408b73936ccb00bdcad504273c04ba44c871930c6b4b36ed->leave($__internal_f7a8e76e5ee0043b408b73936ccb00bdcad504273c04ba44c871930c6b4b36ed_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8bd8664c778affc83cbf874917f3c3a1d7189524895cccd9d07054d226024e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd8664c778affc83cbf874917f3c3a1d7189524895cccd9d07054d226024e4f->enter($__internal_8bd8664c778affc83cbf874917f3c3a1d7189524895cccd9d07054d226024e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_8bd8664c778affc83cbf874917f3c3a1d7189524895cccd9d07054d226024e4f->leave($__internal_8bd8664c778affc83cbf874917f3c3a1d7189524895cccd9d07054d226024e4f_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
