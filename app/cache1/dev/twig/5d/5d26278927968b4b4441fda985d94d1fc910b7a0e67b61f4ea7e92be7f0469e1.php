<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_721ec808d786477b8e88c8d9e1b8b3ee461876fbb20ff4935b08ece4eb4be1b4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d36f27a927ab60ed7d433ef4b64eb16666d45a53834acd8d13f9d5edde76c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d36f27a927ab60ed7d433ef4b64eb16666d45a53834acd8d13f9d5edde76c08->enter($__internal_0d36f27a927ab60ed7d433ef4b64eb16666d45a53834acd8d13f9d5edde76c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d36f27a927ab60ed7d433ef4b64eb16666d45a53834acd8d13f9d5edde76c08->leave($__internal_0d36f27a927ab60ed7d433ef4b64eb16666d45a53834acd8d13f9d5edde76c08_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2bc17e2a3fdd9834fb86fe0c05a65c6fbc21b60cf704304f90198684f92d2007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc17e2a3fdd9834fb86fe0c05a65c6fbc21b60cf704304f90198684f92d2007->enter($__internal_2bc17e2a3fdd9834fb86fe0c05a65c6fbc21b60cf704304f90198684f92d2007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2bc17e2a3fdd9834fb86fe0c05a65c6fbc21b60cf704304f90198684f92d2007->leave($__internal_2bc17e2a3fdd9834fb86fe0c05a65c6fbc21b60cf704304f90198684f92d2007_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
