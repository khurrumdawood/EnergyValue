<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_6e8624f525a0fc05df086e04451f51d90bdbdcd172360632750bdeb2fd706439 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c18273d0776821a0703f8bc0884cbf2b10ca83ab8e87abda8f185f18a8c33cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18273d0776821a0703f8bc0884cbf2b10ca83ab8e87abda8f185f18a8c33cc5->enter($__internal_c18273d0776821a0703f8bc0884cbf2b10ca83ab8e87abda8f185f18a8c33cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18273d0776821a0703f8bc0884cbf2b10ca83ab8e87abda8f185f18a8c33cc5->leave($__internal_c18273d0776821a0703f8bc0884cbf2b10ca83ab8e87abda8f185f18a8c33cc5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_02965e8888b67ca04fb9c61f81f4b8b655045086232d353ee9685a6620445c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02965e8888b67ca04fb9c61f81f4b8b655045086232d353ee9685a6620445c27->enter($__internal_02965e8888b67ca04fb9c61f81f4b8b655045086232d353ee9685a6620445c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_02965e8888b67ca04fb9c61f81f4b8b655045086232d353ee9685a6620445c27->leave($__internal_02965e8888b67ca04fb9c61f81f4b8b655045086232d353ee9685a6620445c27_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/list_percent.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_percent.html.twig");
    }
}
