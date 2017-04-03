<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_4f1bbaf9ff4a07a4d107cacd75636b6fef67d3e2941cf29564b02613547fb49b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_596e1a877a1d93cd6f1b7b5913197b5577bfba0af6cc134ff58a912d676fd482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596e1a877a1d93cd6f1b7b5913197b5577bfba0af6cc134ff58a912d676fd482->enter($__internal_596e1a877a1d93cd6f1b7b5913197b5577bfba0af6cc134ff58a912d676fd482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_596e1a877a1d93cd6f1b7b5913197b5577bfba0af6cc134ff58a912d676fd482->leave($__internal_596e1a877a1d93cd6f1b7b5913197b5577bfba0af6cc134ff58a912d676fd482_prof);

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
", "SonataAdminBundle:CRUD:list_string.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
