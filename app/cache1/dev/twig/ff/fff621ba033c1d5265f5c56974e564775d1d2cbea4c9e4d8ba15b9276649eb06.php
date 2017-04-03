<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_716df53a24350805030fdf039261422b994eea48817fe696552afebe6a5ac7ef extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ac74bc46f70646eb35ac10110c28085a94993323a9f533ad9e2b4012b7d0ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac74bc46f70646eb35ac10110c28085a94993323a9f533ad9e2b4012b7d0ad2->enter($__internal_1ac74bc46f70646eb35ac10110c28085a94993323a9f533ad9e2b4012b7d0ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac74bc46f70646eb35ac10110c28085a94993323a9f533ad9e2b4012b7d0ad2->leave($__internal_1ac74bc46f70646eb35ac10110c28085a94993323a9f533ad9e2b4012b7d0ad2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c229939250eece25aa1210763ef2494fd60547409cb708da357089ba21f45304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c229939250eece25aa1210763ef2494fd60547409cb708da357089ba21f45304->enter($__internal_c229939250eece25aa1210763ef2494fd60547409cb708da357089ba21f45304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c229939250eece25aa1210763ef2494fd60547409cb708da357089ba21f45304->leave($__internal_c229939250eece25aa1210763ef2494fd60547409cb708da357089ba21f45304_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
", "@SonataAdmin/CRUD/edit_text.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_text.html.twig");
    }
}