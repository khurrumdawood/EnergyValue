<?php

/* @SonataAdmin/CRUD/base_standard_edit_field.html.twig */
class __TwigTemplate_4250ded981b12f83e2d81b37a983cc7ac9155f500af4b85bac07d6c277b56a70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b940a38d188c4303e8793978751d3a2d50821e39415fcdf7c068c4b942890275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b940a38d188c4303e8793978751d3a2d50821e39415fcdf7c068c4b942890275->enter($__internal_b940a38d188c4303e8793978751d3a2d50821e39415fcdf7c068c4b942890275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_b940a38d188c4303e8793978751d3a2d50821e39415fcdf7c068c4b942890275->leave($__internal_b940a38d188c4303e8793978751d3a2d50821e39415fcdf7c068c4b942890275_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_4b889c8d1ff14483b6569997d734a9d68d706aa8f687497a3c2a1097a06f9cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b889c8d1ff14483b6569997d734a9d68d706aa8f687497a3c2a1097a06f9cf7->enter($__internal_4b889c8d1ff14483b6569997d734a9d68d706aa8f687497a3c2a1097a06f9cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_4b889c8d1ff14483b6569997d734a9d68d706aa8f687497a3c2a1097a06f9cf7->leave($__internal_4b889c8d1ff14483b6569997d734a9d68d706aa8f687497a3c2a1097a06f9cf7_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_e45266e460a40d34e554a0a4cbd3e05fa269725df92c14b4caec925745ca5e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45266e460a40d34e554a0a4cbd3e05fa269725df92c14b4caec925745ca5e80->enter($__internal_e45266e460a40d34e554a0a4cbd3e05fa269725df92c14b4caec925745ca5e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_e45266e460a40d34e554a0a4cbd3e05fa269725df92c14b4caec925745ca5e80->leave($__internal_e45266e460a40d34e554a0a4cbd3e05fa269725df92c14b4caec925745ca5e80_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_664a46780aefeb94d3c4a31701a9040cbc73b66926a8ada28952712fc70e1e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664a46780aefeb94d3c4a31701a9040cbc73b66926a8ada28952712fc70e1e77->enter($__internal_664a46780aefeb94d3c4a31701a9040cbc73b66926a8ada28952712fc70e1e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_664a46780aefeb94d3c4a31701a9040cbc73b66926a8ada28952712fc70e1e77->leave($__internal_664a46780aefeb94d3c4a31701a9040cbc73b66926a8ada28952712fc70e1e77_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_f42609f95cda80ae79b60c966628712d7127384656cc7e454a62a3c22a859d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42609f95cda80ae79b60c966628712d7127384656cc7e454a62a3c22a859d6b->enter($__internal_f42609f95cda80ae79b60c966628712d7127384656cc7e454a62a3c22a859d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_f42609f95cda80ae79b60c966628712d7127384656cc7e454a62a3c22a859d6b->leave($__internal_f42609f95cda80ae79b60c966628712d7127384656cc7e454a62a3c22a859d6b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  123 => 26,  111 => 23,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 13,  72 => 31,  70 => 30,  66 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  42 => 21,  39 => 20,  37 => 13,  29 => 12,  26 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_standard_edit_field.html.twig");
    }
}
