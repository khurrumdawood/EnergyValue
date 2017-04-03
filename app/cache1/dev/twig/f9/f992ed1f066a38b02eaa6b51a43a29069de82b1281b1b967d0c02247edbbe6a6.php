<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_25f4210d00818437aa7703b13fe6e217315d16985b357eb1af865d1b41554794 extends Twig_Template
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
        $__internal_d5117aa2791d9cb7dfc776f3143e8eac73fef58cca24a8e6c5ee5eb6218fd298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5117aa2791d9cb7dfc776f3143e8eac73fef58cca24a8e6c5ee5eb6218fd298->enter($__internal_d5117aa2791d9cb7dfc776f3143e8eac73fef58cca24a8e6c5ee5eb6218fd298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

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
        
        $__internal_d5117aa2791d9cb7dfc776f3143e8eac73fef58cca24a8e6c5ee5eb6218fd298->leave($__internal_d5117aa2791d9cb7dfc776f3143e8eac73fef58cca24a8e6c5ee5eb6218fd298_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_47f681d7d97ab8f764d2a444b6062b0e85829873b904d04b519c1bba4e7ee05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f681d7d97ab8f764d2a444b6062b0e85829873b904d04b519c1bba4e7ee05c->enter($__internal_47f681d7d97ab8f764d2a444b6062b0e85829873b904d04b519c1bba4e7ee05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_47f681d7d97ab8f764d2a444b6062b0e85829873b904d04b519c1bba4e7ee05c->leave($__internal_47f681d7d97ab8f764d2a444b6062b0e85829873b904d04b519c1bba4e7ee05c_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_952700e84a1d451af791865cdd62e2324fc5a195b4c165b1292e26538b1ed8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952700e84a1d451af791865cdd62e2324fc5a195b4c165b1292e26538b1ed8ba->enter($__internal_952700e84a1d451af791865cdd62e2324fc5a195b4c165b1292e26538b1ed8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_952700e84a1d451af791865cdd62e2324fc5a195b4c165b1292e26538b1ed8ba->leave($__internal_952700e84a1d451af791865cdd62e2324fc5a195b4c165b1292e26538b1ed8ba_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
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
", "@SonataAdmin/CRUD/base_filter_field.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_filter_field.html.twig");
    }
}
