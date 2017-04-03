<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_965df3785a7fc0c81a55b7386d675fc6aa608e1604d9bd4444fbed9f708ce6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90e9b34017cf31ab43755900f1cda422dced59dc91935fb7842b4858274ef1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e9b34017cf31ab43755900f1cda422dced59dc91935fb7842b4858274ef1d4->enter($__internal_90e9b34017cf31ab43755900f1cda422dced59dc91935fb7842b4858274ef1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e9b34017cf31ab43755900f1cda422dced59dc91935fb7842b4858274ef1d4->leave($__internal_90e9b34017cf31ab43755900f1cda422dced59dc91935fb7842b4858274ef1d4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "@SonataAdmin/CRUD/acl.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\acl.html.twig");
    }
}
