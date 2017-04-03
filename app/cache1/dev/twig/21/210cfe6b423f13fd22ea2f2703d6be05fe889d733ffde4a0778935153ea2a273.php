<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_183ce017e89ff7d58d8b43fb1d7a888e71fd489beb3531ba62a4b957c2599a63 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b01aa7af99e73c19d3cd42a65e5266b888f91500532d86d78c9d6df95a5ebe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b01aa7af99e73c19d3cd42a65e5266b888f91500532d86d78c9d6df95a5ebe3->enter($__internal_9b01aa7af99e73c19d3cd42a65e5266b888f91500532d86d78c9d6df95a5ebe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b01aa7af99e73c19d3cd42a65e5266b888f91500532d86d78c9d6df95a5ebe3->leave($__internal_9b01aa7af99e73c19d3cd42a65e5266b888f91500532d86d78c9d6df95a5ebe3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_17d4b5414e3955268d95d6ec1fa6f08801bcb9b879ba42cbfc59af9847bc978f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d4b5414e3955268d95d6ec1fa6f08801bcb9b879ba42cbfc59af9847bc978f->enter($__internal_17d4b5414e3955268d95d6ec1fa6f08801bcb9b879ba42cbfc59af9847bc978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_17d4b5414e3955268d95d6ec1fa6f08801bcb9b879ba42cbfc59af9847bc978f->leave($__internal_17d4b5414e3955268d95d6ec1fa6f08801bcb9b879ba42cbfc59af9847bc978f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
", "@SonataBlock/Block/block_core_text.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
