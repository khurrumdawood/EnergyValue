<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_0238101b67212f520b1e2fbf73c304dfde1f2efcecc4fffd7eca6dac59e75875 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e20a1771585353921a93780e98d1af1e1dce50c3b5e3769b295c4e748d29d773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20a1771585353921a93780e98d1af1e1dce50c3b5e3769b295c4e748d29d773->enter($__internal_e20a1771585353921a93780e98d1af1e1dce50c3b5e3769b295c4e748d29d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20a1771585353921a93780e98d1af1e1dce50c3b5e3769b295c4e748d29d773->leave($__internal_e20a1771585353921a93780e98d1af1e1dce50c3b5e3769b295c4e748d29d773_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cbdd83154a8228c4e6ffc14c191f61c556a787d4801d62161eaccd3ba3a4d302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdd83154a8228c4e6ffc14c191f61c556a787d4801d62161eaccd3ba3a4d302->enter($__internal_cbdd83154a8228c4e6ffc14c191f61c556a787d4801d62161eaccd3ba3a4d302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_cbdd83154a8228c4e6ffc14c191f61c556a787d4801d62161eaccd3ba3a4d302->leave($__internal_cbdd83154a8228c4e6ffc14c191f61c556a787d4801d62161eaccd3ba3a4d302_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "@SonataAdmin/CRUD/list__batch.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
