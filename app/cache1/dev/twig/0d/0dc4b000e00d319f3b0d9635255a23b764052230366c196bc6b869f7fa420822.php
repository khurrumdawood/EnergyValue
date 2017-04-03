<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_f9614eeebabf5920a128ab757a1caf6182d2bb8cbdb8076a5f977f853b2e6ab3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6867aef0b5f48703d7cf76a2afb923bb47b5184103dd16c8c753419c3eca616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6867aef0b5f48703d7cf76a2afb923bb47b5184103dd16c8c753419c3eca616->enter($__internal_e6867aef0b5f48703d7cf76a2afb923bb47b5184103dd16c8c753419c3eca616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6867aef0b5f48703d7cf76a2afb923bb47b5184103dd16c8c753419c3eca616->leave($__internal_e6867aef0b5f48703d7cf76a2afb923bb47b5184103dd16c8c753419c3eca616_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_57f90a7464afaacc3d5aee54eff27ffad08a6fe8360514854216ed6737e4e58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f90a7464afaacc3d5aee54eff27ffad08a6fe8360514854216ed6737e4e58a->enter($__internal_57f90a7464afaacc3d5aee54eff27ffad08a6fe8360514854216ed6737e4e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_57f90a7464afaacc3d5aee54eff27ffad08a6fe8360514854216ed6737e4e58a->leave($__internal_57f90a7464afaacc3d5aee54eff27ffad08a6fe8360514854216ed6737e4e58a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/list_email.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_email.html.twig");
    }
}
