<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_4aba1b146f616c42f9dd41a3d871e3d001e010e6e6501cf2330fca7891bee4af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_827a5d48d5c75ba8bcdf0c562dcbd074304a365ae6fe8f46600fd010c5c479b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827a5d48d5c75ba8bcdf0c562dcbd074304a365ae6fe8f46600fd010c5c479b2->enter($__internal_827a5d48d5c75ba8bcdf0c562dcbd074304a365ae6fe8f46600fd010c5c479b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_827a5d48d5c75ba8bcdf0c562dcbd074304a365ae6fe8f46600fd010c5c479b2->leave($__internal_827a5d48d5c75ba8bcdf0c562dcbd074304a365ae6fe8f46600fd010c5c479b2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
