<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_9e8299968c78756ca4bafa0ab2d782949d2e08a4fa7f7bd327aa0d52a463303d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a4cd941ae9c209b01eec0a6f8ef4de43dcb0e296d7d447050c3bd26e502e4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4cd941ae9c209b01eec0a6f8ef4de43dcb0e296d7d447050c3bd26e502e4a9->enter($__internal_2a4cd941ae9c209b01eec0a6f8ef4de43dcb0e296d7d447050c3bd26e502e4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4cd941ae9c209b01eec0a6f8ef4de43dcb0e296d7d447050c3bd26e502e4a9->leave($__internal_2a4cd941ae9c209b01eec0a6f8ef4de43dcb0e296d7d447050c3bd26e502e4a9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_33bf1c52c5faed128e2b8bb22152cd089768b0ddb4c5801136d6aa8cfe0ef05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bf1c52c5faed128e2b8bb22152cd089768b0ddb4c5801136d6aa8cfe0ef05a->enter($__internal_33bf1c52c5faed128e2b8bb22152cd089768b0ddb4c5801136d6aa8cfe0ef05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_33bf1c52c5faed128e2b8bb22152cd089768b0ddb4c5801136d6aa8cfe0ef05a->leave($__internal_33bf1c52c5faed128e2b8bb22152cd089768b0ddb4c5801136d6aa8cfe0ef05a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
