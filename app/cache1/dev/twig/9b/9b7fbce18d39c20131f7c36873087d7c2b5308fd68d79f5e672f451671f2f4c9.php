<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_71776114c01268da706b25211b61e9c11cbe9e7f2c87cdda1202a4562b61e786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d927603543a73056624832809a2cdf7efc0d9dc703a88480a10b742badd1919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d927603543a73056624832809a2cdf7efc0d9dc703a88480a10b742badd1919->enter($__internal_0d927603543a73056624832809a2cdf7efc0d9dc703a88480a10b742badd1919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_0d927603543a73056624832809a2cdf7efc0d9dc703a88480a10b742badd1919->leave($__internal_0d927603543a73056624832809a2cdf7efc0d9dc703a88480a10b742badd1919_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f6fb19ec3be22dbc40855d99d2b5d1d729338e71a7b59577e643ff187cc2ed2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fb19ec3be22dbc40855d99d2b5d1d729338e71a7b59577e643ff187cc2ed2b->enter($__internal_f6fb19ec3be22dbc40855d99d2b5d1d729338e71a7b59577e643ff187cc2ed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_f6fb19ec3be22dbc40855d99d2b5d1d729338e71a7b59577e643ff187cc2ed2b->leave($__internal_f6fb19ec3be22dbc40855d99d2b5d1d729338e71a7b59577e643ff187cc2ed2b_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_88350beed8ed750b29441dcd289a765e0a28143bd78ef9d127fb81f88b6f9527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88350beed8ed750b29441dcd289a765e0a28143bd78ef9d127fb81f88b6f9527->enter($__internal_88350beed8ed750b29441dcd289a765e0a28143bd78ef9d127fb81f88b6f9527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_88350beed8ed750b29441dcd289a765e0a28143bd78ef9d127fb81f88b6f9527->leave($__internal_88350beed8ed750b29441dcd289a765e0a28143bd78ef9d127fb81f88b6f9527_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_a26ef2a1af5ee9d398c0235e020037cd366978b525680d67dec0fd85f62e1db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26ef2a1af5ee9d398c0235e020037cd366978b525680d67dec0fd85f62e1db5->enter($__internal_a26ef2a1af5ee9d398c0235e020037cd366978b525680d67dec0fd85f62e1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_a26ef2a1af5ee9d398c0235e020037cd366978b525680d67dec0fd85f62e1db5->leave($__internal_a26ef2a1af5ee9d398c0235e020037cd366978b525680d67dec0fd85f62e1db5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/edit_boolean.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_boolean.html.twig");
    }
}
