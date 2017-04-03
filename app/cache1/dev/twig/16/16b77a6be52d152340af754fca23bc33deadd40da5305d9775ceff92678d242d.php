<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_b4edc1f567e38a8868b20ce6d12919d9e75dfdfebc1fefef7e183cc10c2ade9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e62db93b83a1c30dad2e7de1f11e3d5eae11e1afbfbec379ce374ced7f7a6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e62db93b83a1c30dad2e7de1f11e3d5eae11e1afbfbec379ce374ced7f7a6dc->enter($__internal_9e62db93b83a1c30dad2e7de1f11e3d5eae11e1afbfbec379ce374ced7f7a6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e62db93b83a1c30dad2e7de1f11e3d5eae11e1afbfbec379ce374ced7f7a6dc->leave($__internal_9e62db93b83a1c30dad2e7de1f11e3d5eae11e1afbfbec379ce374ced7f7a6dc_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_99dd96c46d94ba1990b6c3249c979c9e585e5bbd5289c42ea6ab2035b8835243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dd96c46d94ba1990b6c3249c979c9e585e5bbd5289c42ea6ab2035b8835243->enter($__internal_99dd96c46d94ba1990b6c3249c979c9e585e5bbd5289c42ea6ab2035b8835243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_99dd96c46d94ba1990b6c3249c979c9e585e5bbd5289c42ea6ab2035b8835243->leave($__internal_99dd96c46d94ba1990b6c3249c979c9e585e5bbd5289c42ea6ab2035b8835243_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_3af60e6678b76cd462cf3d5dc91c78e8deede07186235b398e59aab4d101b342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af60e6678b76cd462cf3d5dc91c78e8deede07186235b398e59aab4d101b342->enter($__internal_3af60e6678b76cd462cf3d5dc91c78e8deede07186235b398e59aab4d101b342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_3af60e6678b76cd462cf3d5dc91c78e8deede07186235b398e59aab4d101b342->leave($__internal_3af60e6678b76cd462cf3d5dc91c78e8deede07186235b398e59aab4d101b342_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_dad0a429ba720bbe1d77e32579f72067bc590f4f35c8c6018a1c916f49493405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad0a429ba720bbe1d77e32579f72067bc590f4f35c8c6018a1c916f49493405->enter($__internal_dad0a429ba720bbe1d77e32579f72067bc590f4f35c8c6018a1c916f49493405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_dad0a429ba720bbe1d77e32579f72067bc590f4f35c8c6018a1c916f49493405->leave($__internal_dad0a429ba720bbe1d77e32579f72067bc590f4f35c8c6018a1c916f49493405_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a5e710506342777b83773a2b6b8939597eb20cb2a87388c87d885b4ca0582130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e710506342777b83773a2b6b8939597eb20cb2a87388c87d885b4ca0582130->enter($__internal_a5e710506342777b83773a2b6b8939597eb20cb2a87388c87d885b4ca0582130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_a5e710506342777b83773a2b6b8939597eb20cb2a87388c87d885b4ca0582130->leave($__internal_a5e710506342777b83773a2b6b8939597eb20cb2a87388c87d885b4ca0582130_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0e8b52afc8d198da648ce23c45ff3c369817e30cef24495b81a008667dc5a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e8b52afc8d198da648ce23c45ff3c369817e30cef24495b81a008667dc5a69->enter($__internal_e0e8b52afc8d198da648ce23c45ff3c369817e30cef24495b81a008667dc5a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_e0e8b52afc8d198da648ce23c45ff3c369817e30cef24495b81a008667dc5a69->leave($__internal_e0e8b52afc8d198da648ce23c45ff3c369817e30cef24495b81a008667dc5a69_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3ff6ec46fda436ef47d986f2684742bfefddc5505bf72556de60da4a6e4a405d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff6ec46fda436ef47d986f2684742bfefddc5505bf72556de60da4a6e4a405d->enter($__internal_3ff6ec46fda436ef47d986f2684742bfefddc5505bf72556de60da4a6e4a405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_3ff6ec46fda436ef47d986f2684742bfefddc5505bf72556de60da4a6e4a405d->leave($__internal_3ff6ec46fda436ef47d986f2684742bfefddc5505bf72556de60da4a6e4a405d_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_90729b611ed31e82e0fab99fe7bb3d0f2075d3f65ee045e92e6e725ca530310a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90729b611ed31e82e0fab99fe7bb3d0f2075d3f65ee045e92e6e725ca530310a->enter($__internal_90729b611ed31e82e0fab99fe7bb3d0f2075d3f65ee045e92e6e725ca530310a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_90729b611ed31e82e0fab99fe7bb3d0f2075d3f65ee045e92e6e725ca530310a->leave($__internal_90729b611ed31e82e0fab99fe7bb3d0f2075d3f65ee045e92e6e725ca530310a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/empty_layout.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\empty_layout.html.twig");
    }
}
