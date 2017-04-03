<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_0399ba6767ac5977fad3fa46444e9e1b28b115022ab3450283d36e2d7fc729e1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29873b3c9a7b876cd4cc219dddf4807afa706c93f31b3be07e668dc238334971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29873b3c9a7b876cd4cc219dddf4807afa706c93f31b3be07e668dc238334971->enter($__internal_29873b3c9a7b876cd4cc219dddf4807afa706c93f31b3be07e668dc238334971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29873b3c9a7b876cd4cc219dddf4807afa706c93f31b3be07e668dc238334971->leave($__internal_29873b3c9a7b876cd4cc219dddf4807afa706c93f31b3be07e668dc238334971_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2650fb35080183973719a274ff19b9bcce37483d95e1af0ba7e5ce6100ac6b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2650fb35080183973719a274ff19b9bcce37483d95e1af0ba7e5ce6100ac6b8c->enter($__internal_2650fb35080183973719a274ff19b9bcce37483d95e1af0ba7e5ce6100ac6b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_2650fb35080183973719a274ff19b9bcce37483d95e1af0ba7e5ce6100ac6b8c->leave($__internal_2650fb35080183973719a274ff19b9bcce37483d95e1af0ba7e5ce6100ac6b8c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
", "SonataBlockBundle:Block:block_core_menu.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
