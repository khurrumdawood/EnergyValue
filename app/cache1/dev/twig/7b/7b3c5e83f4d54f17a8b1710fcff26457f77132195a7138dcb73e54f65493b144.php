<?php

/* @SonataAdmin/CRUD/list_trans.html.twig */
class __TwigTemplate_48df2deaf2fb56f88cac4e9de7e98303180c743d0af2cac09537ce692aca8988 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_281f0efa94796015368d06aa98dcc1f778ea65f797c7bf58f859804b596b2016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281f0efa94796015368d06aa98dcc1f778ea65f797c7bf58f859804b596b2016->enter($__internal_281f0efa94796015368d06aa98dcc1f778ea65f797c7bf58f859804b596b2016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281f0efa94796015368d06aa98dcc1f778ea65f797c7bf58f859804b596b2016->leave($__internal_281f0efa94796015368d06aa98dcc1f778ea65f797c7bf58f859804b596b2016_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9eefbf40eab2d674dfed966fd30f121c2a7db92736b984d674251820ed40af61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eefbf40eab2d674dfed966fd30f121c2a7db92736b984d674251820ed40af61->enter($__internal_9eefbf40eab2d674dfed966fd30f121c2a7db92736b984d674251820ed40af61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_9eefbf40eab2d674dfed966fd30f121c2a7db92736b984d674251820ed40af61->leave($__internal_9eefbf40eab2d674dfed966fd30f121c2a7db92736b984d674251820ed40af61_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "@SonataAdmin/CRUD/list_trans.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_trans.html.twig");
    }
}
