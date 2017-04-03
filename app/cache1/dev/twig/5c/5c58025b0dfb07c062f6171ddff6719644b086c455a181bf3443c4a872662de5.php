<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_63d885c2f76984f7af569431bf5fbe337d8ccb26921965e6e23bcf54b9168d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c228b8076427b2f018ed83315f7b2ed74a8b8fd912b6a01cb7d07aec42fd712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c228b8076427b2f018ed83315f7b2ed74a8b8fd912b6a01cb7d07aec42fd712->enter($__internal_2c228b8076427b2f018ed83315f7b2ed74a8b8fd912b6a01cb7d07aec42fd712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c228b8076427b2f018ed83315f7b2ed74a8b8fd912b6a01cb7d07aec42fd712->leave($__internal_2c228b8076427b2f018ed83315f7b2ed74a8b8fd912b6a01cb7d07aec42fd712_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4e600f3373797ae5d841edbf46a55d89c204f0b3b88b1b7fe11980aef883ec86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e600f3373797ae5d841edbf46a55d89c204f0b3b88b1b7fe11980aef883ec86->enter($__internal_4e600f3373797ae5d841edbf46a55d89c204f0b3b88b1b7fe11980aef883ec86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4e600f3373797ae5d841edbf46a55d89c204f0b3b88b1b7fe11980aef883ec86->leave($__internal_4e600f3373797ae5d841edbf46a55d89c204f0b3b88b1b7fe11980aef883ec86_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_file.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
