<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_70b166a4cbe6c33cf64d7b9cba90339ece0c6b42d8c96c22a87bdbdda0614deb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae3b409d35c774db3940f280dac0de730e704c3459832e4fb7e115c4fdc72f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3b409d35c774db3940f280dac0de730e704c3459832e4fb7e115c4fdc72f2b->enter($__internal_ae3b409d35c774db3940f280dac0de730e704c3459832e4fb7e115c4fdc72f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3b409d35c774db3940f280dac0de730e704c3459832e4fb7e115c4fdc72f2b->leave($__internal_ae3b409d35c774db3940f280dac0de730e704c3459832e4fb7e115c4fdc72f2b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9fd0470014c8bd9920720ef8d119923bf06a10efaca01736fc06b0e2aae74311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd0470014c8bd9920720ef8d119923bf06a10efaca01736fc06b0e2aae74311->enter($__internal_9fd0470014c8bd9920720ef8d119923bf06a10efaca01736fc06b0e2aae74311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_9fd0470014c8bd9920720ef8d119923bf06a10efaca01736fc06b0e2aae74311->leave($__internal_9fd0470014c8bd9920720ef8d119923bf06a10efaca01736fc06b0e2aae74311_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
", "SonataAdminBundle:CRUD:list_percent.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
