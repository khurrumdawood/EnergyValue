<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_aa3291ce6978e583aa892b7991952a866e4c0765e9e14bee2bbf66fb1c2dac69 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48538c814ce5b5e769c3a7ac507d729acc61b7b6784a931de3d6c2b0ff2f5ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48538c814ce5b5e769c3a7ac507d729acc61b7b6784a931de3d6c2b0ff2f5ad0->enter($__internal_48538c814ce5b5e769c3a7ac507d729acc61b7b6784a931de3d6c2b0ff2f5ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48538c814ce5b5e769c3a7ac507d729acc61b7b6784a931de3d6c2b0ff2f5ad0->leave($__internal_48538c814ce5b5e769c3a7ac507d729acc61b7b6784a931de3d6c2b0ff2f5ad0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_555ad495cdca36b5ac518b159846a0a1a7e4073114fa7d3f647e1be475ec2feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555ad495cdca36b5ac518b159846a0a1a7e4073114fa7d3f647e1be475ec2feb->enter($__internal_555ad495cdca36b5ac518b159846a0a1a7e4073114fa7d3f647e1be475ec2feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_555ad495cdca36b5ac518b159846a0a1a7e4073114fa7d3f647e1be475ec2feb->leave($__internal_555ad495cdca36b5ac518b159846a0a1a7e4073114fa7d3f647e1be475ec2feb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
", "@SonataAdmin/CRUD/edit_string.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_string.html.twig");
    }
}
