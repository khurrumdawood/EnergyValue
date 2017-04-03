<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_099775a79ca327d29abfa7ecd0037cfad8f612253d3899ceafa390abe114c482 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b1f4e55d92ae00dd1ba822ac5a121ef4848e359bbebf1c8d5fe7f9713f7b434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1f4e55d92ae00dd1ba822ac5a121ef4848e359bbebf1c8d5fe7f9713f7b434->enter($__internal_8b1f4e55d92ae00dd1ba822ac5a121ef4848e359bbebf1c8d5fe7f9713f7b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1f4e55d92ae00dd1ba822ac5a121ef4848e359bbebf1c8d5fe7f9713f7b434->leave($__internal_8b1f4e55d92ae00dd1ba822ac5a121ef4848e359bbebf1c8d5fe7f9713f7b434_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5345479cd757d950072bc0f7789fc794dd1e3495eee81972f874abba05c9cc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5345479cd757d950072bc0f7789fc794dd1e3495eee81972f874abba05c9cc64->enter($__internal_5345479cd757d950072bc0f7789fc794dd1e3495eee81972f874abba05c9cc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_5345479cd757d950072bc0f7789fc794dd1e3495eee81972f874abba05c9cc64->leave($__internal_5345479cd757d950072bc0f7789fc794dd1e3495eee81972f874abba05c9cc64_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
", "@SonataBlock/Block/block_core_action.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_action.html.twig");
    }
}
