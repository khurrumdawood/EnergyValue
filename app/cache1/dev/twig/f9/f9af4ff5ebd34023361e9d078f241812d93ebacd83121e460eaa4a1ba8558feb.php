<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_94411be2da327157b3917ee7f2e0d1f80f4857b623288665d280c2b34713a28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_effffb0f6581cf801c24bdb60d6c8ec5616b4e8455d88df402a5ca33173bb876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effffb0f6581cf801c24bdb60d6c8ec5616b4e8455d88df402a5ca33173bb876->enter($__internal_effffb0f6581cf801c24bdb60d6c8ec5616b4e8455d88df402a5ca33173bb876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_effffb0f6581cf801c24bdb60d6c8ec5616b4e8455d88df402a5ca33173bb876->leave($__internal_effffb0f6581cf801c24bdb60d6c8ec5616b4e8455d88df402a5ca33173bb876_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_b59e892b2edabee99a1ecbd4d0589efaa5db3344b34a5db3479844bf1af7f208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59e892b2edabee99a1ecbd4d0589efaa5db3344b34a5db3479844bf1af7f208->enter($__internal_b59e892b2edabee99a1ecbd4d0589efaa5db3344b34a5db3479844bf1af7f208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_b59e892b2edabee99a1ecbd4d0589efaa5db3344b34a5db3479844bf1af7f208->leave($__internal_b59e892b2edabee99a1ecbd4d0589efaa5db3344b34a5db3479844bf1af7f208_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_f163ae994a858e8a774c31d88088301d7c34f838a1aa8cc40ef0c393dde4b5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f163ae994a858e8a774c31d88088301d7c34f838a1aa8cc40ef0c393dde4b5ae->enter($__internal_f163ae994a858e8a774c31d88088301d7c34f838a1aa8cc40ef0c393dde4b5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_f163ae994a858e8a774c31d88088301d7c34f838a1aa8cc40ef0c393dde4b5ae->leave($__internal_f163ae994a858e8a774c31d88088301d7c34f838a1aa8cc40ef0c393dde4b5ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
