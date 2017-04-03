<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_31b6ee2386a6ce682a6653f799e1a48b9850b97a50434edf9edefb4027197aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_634c5c6b0fac58dacbc93d93af6728a516493b26039e3534f8150702d34829cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634c5c6b0fac58dacbc93d93af6728a516493b26039e3534f8150702d34829cd->enter($__internal_634c5c6b0fac58dacbc93d93af6728a516493b26039e3534f8150702d34829cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_634c5c6b0fac58dacbc93d93af6728a516493b26039e3534f8150702d34829cd->leave($__internal_634c5c6b0fac58dacbc93d93af6728a516493b26039e3534f8150702d34829cd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\Form\\filter_admin_fields.html.twig");
    }
}
