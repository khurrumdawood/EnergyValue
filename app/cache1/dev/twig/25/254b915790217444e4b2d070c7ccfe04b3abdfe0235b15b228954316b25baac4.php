<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_7dd6efa4151b5759763eb73018cc4bbda65f937afaeb4b49c054d152c7e79ba9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f47ddf7def071226ab1f0b152bd14ddd77f269602224c10c674b18d5caa9db77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47ddf7def071226ab1f0b152bd14ddd77f269602224c10c674b18d5caa9db77->enter($__internal_f47ddf7def071226ab1f0b152bd14ddd77f269602224c10c674b18d5caa9db77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f47ddf7def071226ab1f0b152bd14ddd77f269602224c10c674b18d5caa9db77->leave($__internal_f47ddf7def071226ab1f0b152bd14ddd77f269602224c10c674b18d5caa9db77_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_06f75c6f365f3f8ba112a8815fef8d88cde159fd036fe5f3dd5df944fc6c9120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f75c6f365f3f8ba112a8815fef8d88cde159fd036fe5f3dd5df944fc6c9120->enter($__internal_06f75c6f365f3f8ba112a8815fef8d88cde159fd036fe5f3dd5df944fc6c9120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_06f75c6f365f3f8ba112a8815fef8d88cde159fd036fe5f3dd5df944fc6c9120->leave($__internal_06f75c6f365f3f8ba112a8815fef8d88cde159fd036fe5f3dd5df944fc6c9120_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "@SonataAdmin/CRUD/list__select.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__select.html.twig");
    }
}
