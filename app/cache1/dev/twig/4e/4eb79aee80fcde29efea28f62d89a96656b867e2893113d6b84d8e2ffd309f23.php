<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_fd9537553e5dbc218e5831958642522857402ec965d3c3f3629d0690da09de5c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0920daf10cbba9cbeea394283ebcd45442c5a97961e83e8323a453b89c6cc679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0920daf10cbba9cbeea394283ebcd45442c5a97961e83e8323a453b89c6cc679->enter($__internal_0920daf10cbba9cbeea394283ebcd45442c5a97961e83e8323a453b89c6cc679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0920daf10cbba9cbeea394283ebcd45442c5a97961e83e8323a453b89c6cc679->leave($__internal_0920daf10cbba9cbeea394283ebcd45442c5a97961e83e8323a453b89c6cc679_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9596cb78cb559d610958b1adb12b832ff5b90729b4273480b137dfb59a0ef586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9596cb78cb559d610958b1adb12b832ff5b90729b4273480b137dfb59a0ef586->enter($__internal_9596cb78cb559d610958b1adb12b832ff5b90729b4273480b137dfb59a0ef586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9596cb78cb559d610958b1adb12b832ff5b90729b4273480b137dfb59a0ef586->leave($__internal_9596cb78cb559d610958b1adb12b832ff5b90729b4273480b137dfb59a0ef586_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
