<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_9cd21ac2e0c0dcb9f9b34ab2d4a49787fc947a2b7de8f496318d5cfa64f84343 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a42fc2e782c8532684d50cc7689a41604c4d019c74bb3d31979a238012310397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42fc2e782c8532684d50cc7689a41604c4d019c74bb3d31979a238012310397->enter($__internal_a42fc2e782c8532684d50cc7689a41604c4d019c74bb3d31979a238012310397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a42fc2e782c8532684d50cc7689a41604c4d019c74bb3d31979a238012310397->leave($__internal_a42fc2e782c8532684d50cc7689a41604c4d019c74bb3d31979a238012310397_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f333dab6e0d5107f0b6e26b65bcc16698910f7479acc4a5b16d37334a7226e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f333dab6e0d5107f0b6e26b65bcc16698910f7479acc4a5b16d37334a7226e74->enter($__internal_f333dab6e0d5107f0b6e26b65bcc16698910f7479acc4a5b16d37334a7226e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f333dab6e0d5107f0b6e26b65bcc16698910f7479acc4a5b16d37334a7226e74->leave($__internal_f333dab6e0d5107f0b6e26b65bcc16698910f7479acc4a5b16d37334a7226e74_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
