<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_1b2b5dbe67013d15c51c566dccd8566fbf845d2f7e273007a7e648f9d0615521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_datetime.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a59337548ea5379095ed973a04d4520472145d77cc862860e34822cd62ba6050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59337548ea5379095ed973a04d4520472145d77cc862860e34822cd62ba6050->enter($__internal_a59337548ea5379095ed973a04d4520472145d77cc862860e34822cd62ba6050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59337548ea5379095ed973a04d4520472145d77cc862860e34822cd62ba6050->leave($__internal_a59337548ea5379095ed973a04d4520472145d77cc862860e34822cd62ba6050_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7d13558f2f0de02d18b014969d6906c20714a9a595b6e113795e7979f3bc49fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d13558f2f0de02d18b014969d6906c20714a9a595b6e113795e7979f3bc49fd->enter($__internal_7d13558f2f0de02d18b014969d6906c20714a9a595b6e113795e7979f3bc49fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_7d13558f2f0de02d18b014969d6906c20714a9a595b6e113795e7979f3bc49fd->leave($__internal_7d13558f2f0de02d18b014969d6906c20714a9a595b6e113795e7979f3bc49fd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_datetime.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_datetime.html.twig");
    }
}
