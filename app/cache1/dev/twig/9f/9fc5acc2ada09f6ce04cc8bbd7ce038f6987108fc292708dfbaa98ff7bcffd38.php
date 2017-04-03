<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_685ffd82c5c5a22487b39a8404dd0025d5111744762d6823ebe44b11de15ede3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_060f0fdafaad8e6fa4045fc78d45a0344c536d5a325fdee1cd21b2dbaa71b3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060f0fdafaad8e6fa4045fc78d45a0344c536d5a325fdee1cd21b2dbaa71b3f3->enter($__internal_060f0fdafaad8e6fa4045fc78d45a0344c536d5a325fdee1cd21b2dbaa71b3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060f0fdafaad8e6fa4045fc78d45a0344c536d5a325fdee1cd21b2dbaa71b3f3->leave($__internal_060f0fdafaad8e6fa4045fc78d45a0344c536d5a325fdee1cd21b2dbaa71b3f3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
