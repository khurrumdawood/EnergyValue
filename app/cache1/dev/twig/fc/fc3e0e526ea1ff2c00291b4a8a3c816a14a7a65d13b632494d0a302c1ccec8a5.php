<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_6994c41d6e4dfe155f0b0486e9eec7ed1341a8ab6223423cb7f5522a6dd37a24 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab0367de75c03badb5d6957f816af058c5d7c109573c42943c79ba7baa89dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab0367de75c03badb5d6957f816af058c5d7c109573c42943c79ba7baa89dcd->enter($__internal_4ab0367de75c03badb5d6957f816af058c5d7c109573c42943c79ba7baa89dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab0367de75c03badb5d6957f816af058c5d7c109573c42943c79ba7baa89dcd->leave($__internal_4ab0367de75c03badb5d6957f816af058c5d7c109573c42943c79ba7baa89dcd_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_aec6866650af99aab703eafdba9351d8216e5e44fdb5a9729804d4bd351747eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec6866650af99aab703eafdba9351d8216e5e44fdb5a9729804d4bd351747eb->enter($__internal_aec6866650af99aab703eafdba9351d8216e5e44fdb5a9729804d4bd351747eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_aec6866650af99aab703eafdba9351d8216e5e44fdb5a9729804d4bd351747eb->leave($__internal_aec6866650af99aab703eafdba9351d8216e5e44fdb5a9729804d4bd351747eb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "@SonataBlock/Block/block_core_menu.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
