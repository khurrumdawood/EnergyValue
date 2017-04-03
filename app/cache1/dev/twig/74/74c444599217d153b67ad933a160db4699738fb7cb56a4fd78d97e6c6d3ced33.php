<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_d8fc6751b6347a56e416becdadb48185aac34d1a1fa5bdc0cfcddaa13f3d73e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_68735fbdc1d5696f057f3731c43c4d073942b68b2235e08d0558e126af4884d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68735fbdc1d5696f057f3731c43c4d073942b68b2235e08d0558e126af4884d6->enter($__internal_68735fbdc1d5696f057f3731c43c4d073942b68b2235e08d0558e126af4884d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68735fbdc1d5696f057f3731c43c4d073942b68b2235e08d0558e126af4884d6->leave($__internal_68735fbdc1d5696f057f3731c43c4d073942b68b2235e08d0558e126af4884d6_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_84d40eadcc9c041072ed5337bd3256b95978f42dda8fc12fb9439beea74ff095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d40eadcc9c041072ed5337bd3256b95978f42dda8fc12fb9439beea74ff095->enter($__internal_84d40eadcc9c041072ed5337bd3256b95978f42dda8fc12fb9439beea74ff095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_84d40eadcc9c041072ed5337bd3256b95978f42dda8fc12fb9439beea74ff095->leave($__internal_84d40eadcc9c041072ed5337bd3256b95978f42dda8fc12fb9439beea74ff095_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 21,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
