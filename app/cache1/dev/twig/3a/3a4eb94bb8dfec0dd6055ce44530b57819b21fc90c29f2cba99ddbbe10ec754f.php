<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_3d8d5667245cbb2a393bcf0e19961407019aff9b7b14b4e7807ccc1263acc74d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a795ee07bdfe4c8d423b9c991746e303a2574d67962ab2bc08bf8898102a4f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a795ee07bdfe4c8d423b9c991746e303a2574d67962ab2bc08bf8898102a4f07->enter($__internal_a795ee07bdfe4c8d423b9c991746e303a2574d67962ab2bc08bf8898102a4f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a795ee07bdfe4c8d423b9c991746e303a2574d67962ab2bc08bf8898102a4f07->leave($__internal_a795ee07bdfe4c8d423b9c991746e303a2574d67962ab2bc08bf8898102a4f07_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "@SonataAdmin/CRUD/list_string.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_string.html.twig");
    }
}
