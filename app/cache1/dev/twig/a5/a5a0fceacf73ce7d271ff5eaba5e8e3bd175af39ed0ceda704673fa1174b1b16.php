<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_93498a507b447509a87c79039125b2b2fc5f2ef80ed6dcdad936853b6ebf6f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96ff594f2332fef50b4eb61fbc6c84914366505fd546028d6413de96cd16780f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ff594f2332fef50b4eb61fbc6c84914366505fd546028d6413de96cd16780f->enter($__internal_96ff594f2332fef50b4eb61fbc6c84914366505fd546028d6413de96cd16780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_96ff594f2332fef50b4eb61fbc6c84914366505fd546028d6413de96cd16780f->leave($__internal_96ff594f2332fef50b4eb61fbc6c84914366505fd546028d6413de96cd16780f_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_559a1383875a4107b1e41d5ece4878f8d8aea0ad991c08908ba1efb061cff172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559a1383875a4107b1e41d5ece4878f8d8aea0ad991c08908ba1efb061cff172->enter($__internal_559a1383875a4107b1e41d5ece4878f8d8aea0ad991c08908ba1efb061cff172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_559a1383875a4107b1e41d5ece4878f8d8aea0ad991c08908ba1efb061cff172->leave($__internal_559a1383875a4107b1e41d5ece4878f8d8aea0ad991c08908ba1efb061cff172_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_9b77065055cf118b2476c76abb40c812978988bfa3b5e2d7008afbfc1e0fc9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b77065055cf118b2476c76abb40c812978988bfa3b5e2d7008afbfc1e0fc9af->enter($__internal_9b77065055cf118b2476c76abb40c812978988bfa3b5e2d7008afbfc1e0fc9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_9b77065055cf118b2476c76abb40c812978988bfa3b5e2d7008afbfc1e0fc9af->leave($__internal_9b77065055cf118b2476c76abb40c812978988bfa3b5e2d7008afbfc1e0fc9af_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_110d5c64bbc4e8734b74a274b17b3d5e5dd942efb3a1f63bc84b2f37a7f6eb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110d5c64bbc4e8734b74a274b17b3d5e5dd942efb3a1f63bc84b2f37a7f6eb1d->enter($__internal_110d5c64bbc4e8734b74a274b17b3d5e5dd942efb3a1f63bc84b2f37a7f6eb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_110d5c64bbc4e8734b74a274b17b3d5e5dd942efb3a1f63bc84b2f37a7f6eb1d->leave($__internal_110d5c64bbc4e8734b74a274b17b3d5e5dd942efb3a1f63bc84b2f37a7f6eb1d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 25,  91 => 23,  87 => 21,  81 => 19,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  54 => 29,  52 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 14,  28 => 12,  25 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
