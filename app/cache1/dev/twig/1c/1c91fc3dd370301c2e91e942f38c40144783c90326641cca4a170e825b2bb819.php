<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_eb5794855576253b88e9776ed7d1dd017063e89a0385b63dbc9f06209611402b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61cee0ae845789fc3d01d2600256afcd0141af351a7bc0a8e034fd0e51fa8634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cee0ae845789fc3d01d2600256afcd0141af351a7bc0a8e034fd0e51fa8634->enter($__internal_61cee0ae845789fc3d01d2600256afcd0141af351a7bc0a8e034fd0e51fa8634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61cee0ae845789fc3d01d2600256afcd0141af351a7bc0a8e034fd0e51fa8634->leave($__internal_61cee0ae845789fc3d01d2600256afcd0141af351a7bc0a8e034fd0e51fa8634_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "@SonataAdmin/CRUD/show.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show.html.twig");
    }
}
