<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_e47d245756c5d78caae109a118d4efd4e17d01f2733a66f82d3875dfdad6fa21 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fef08c71b362f14eec21f79373918e45a25a412979b202b449292ea4ba70f261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef08c71b362f14eec21f79373918e45a25a412979b202b449292ea4ba70f261->enter($__internal_fef08c71b362f14eec21f79373918e45a25a412979b202b449292ea4ba70f261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fef08c71b362f14eec21f79373918e45a25a412979b202b449292ea4ba70f261->leave($__internal_fef08c71b362f14eec21f79373918e45a25a412979b202b449292ea4ba70f261_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d27bae71084f53d93a95b62eb0d4b1d17b5663703a1bc6f242c5e8515a71fd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27bae71084f53d93a95b62eb0d4b1d17b5663703a1bc6f242c5e8515a71fd4a->enter($__internal_d27bae71084f53d93a95b62eb0d4b1d17b5663703a1bc6f242c5e8515a71fd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_d27bae71084f53d93a95b62eb0d4b1d17b5663703a1bc6f242c5e8515a71fd4a->leave($__internal_d27bae71084f53d93a95b62eb0d4b1d17b5663703a1bc6f242c5e8515a71fd4a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
