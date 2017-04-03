<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_6ce52d63d781a459c9bebc2636467b7940efcddedfd94dcc10955f96576c9fb3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4d5e47d6585ae83a3b5c31d54b93c91b13bf85e8145f7f30838efece5c91854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d5e47d6585ae83a3b5c31d54b93c91b13bf85e8145f7f30838efece5c91854->enter($__internal_d4d5e47d6585ae83a3b5c31d54b93c91b13bf85e8145f7f30838efece5c91854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d5e47d6585ae83a3b5c31d54b93c91b13bf85e8145f7f30838efece5c91854->leave($__internal_d4d5e47d6585ae83a3b5c31d54b93c91b13bf85e8145f7f30838efece5c91854_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_string.html.twig");
    }
}
