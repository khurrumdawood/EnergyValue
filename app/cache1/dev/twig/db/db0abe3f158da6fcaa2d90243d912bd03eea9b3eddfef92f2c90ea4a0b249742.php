<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_605001325630db07dc8867aff9adc25acbbfeac5cc2a70981244232bf3f53417 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dc6523d349a75722568897e2aeca07a860cae851121ccc5d3db7e48e504c96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc6523d349a75722568897e2aeca07a860cae851121ccc5d3db7e48e504c96a->enter($__internal_0dc6523d349a75722568897e2aeca07a860cae851121ccc5d3db7e48e504c96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc6523d349a75722568897e2aeca07a860cae851121ccc5d3db7e48e504c96a->leave($__internal_0dc6523d349a75722568897e2aeca07a860cae851121ccc5d3db7e48e504c96a_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b127e52bacb29c20bf64247f3503a060304fbc0cfb51b2e54e72c790e9ce3e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b127e52bacb29c20bf64247f3503a060304fbc0cfb51b2e54e72c790e9ce3e46->enter($__internal_b127e52bacb29c20bf64247f3503a060304fbc0cfb51b2e54e72c790e9ce3e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b127e52bacb29c20bf64247f3503a060304fbc0cfb51b2e54e72c790e9ce3e46->leave($__internal_b127e52bacb29c20bf64247f3503a060304fbc0cfb51b2e54e72c790e9ce3e46_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6ac0349c5e3616d104aa7a2325dfccb40f8167fd6c39c90225f2c53e8a8f2e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac0349c5e3616d104aa7a2325dfccb40f8167fd6c39c90225f2c53e8a8f2e66->enter($__internal_6ac0349c5e3616d104aa7a2325dfccb40f8167fd6c39c90225f2c53e8a8f2e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6ac0349c5e3616d104aa7a2325dfccb40f8167fd6c39c90225f2c53e8a8f2e66->leave($__internal_6ac0349c5e3616d104aa7a2325dfccb40f8167fd6c39c90225f2c53e8a8f2e66_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b03010283020860b55fd8c6825d9131e61511f19016f1dc594a251685f28b333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03010283020860b55fd8c6825d9131e61511f19016f1dc594a251685f28b333->enter($__internal_b03010283020860b55fd8c6825d9131e61511f19016f1dc594a251685f28b333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b03010283020860b55fd8c6825d9131e61511f19016f1dc594a251685f28b333->leave($__internal_b03010283020860b55fd8c6825d9131e61511f19016f1dc594a251685f28b333_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c09a855e870eb0a1078fe67b2fbaf81f9f8b5406f40485f40f8b028cdb21511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09a855e870eb0a1078fe67b2fbaf81f9f8b5406f40485f40f8b028cdb21511b->enter($__internal_c09a855e870eb0a1078fe67b2fbaf81f9f8b5406f40485f40f8b028cdb21511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_c09a855e870eb0a1078fe67b2fbaf81f9f8b5406f40485f40f8b028cdb21511b->leave($__internal_c09a855e870eb0a1078fe67b2fbaf81f9f8b5406f40485f40f8b028cdb21511b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_757c1e1002d35ca15626012eb3c8755ff5e16ee3b2021ee4334e9f920336a528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757c1e1002d35ca15626012eb3c8755ff5e16ee3b2021ee4334e9f920336a528->enter($__internal_757c1e1002d35ca15626012eb3c8755ff5e16ee3b2021ee4334e9f920336a528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_757c1e1002d35ca15626012eb3c8755ff5e16ee3b2021ee4334e9f920336a528->leave($__internal_757c1e1002d35ca15626012eb3c8755ff5e16ee3b2021ee4334e9f920336a528_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_1d9136a602a6346a9afb5f2389b7a632d2ec2404378abde5e75ce6c9585a7a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9136a602a6346a9afb5f2389b7a632d2ec2404378abde5e75ce6c9585a7a43->enter($__internal_1d9136a602a6346a9afb5f2389b7a632d2ec2404378abde5e75ce6c9585a7a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_1d9136a602a6346a9afb5f2389b7a632d2ec2404378abde5e75ce6c9585a7a43->leave($__internal_1d9136a602a6346a9afb5f2389b7a632d2ec2404378abde5e75ce6c9585a7a43_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c6bb0f701fd4c66731c6ba035d17abdd415c8d1aa2c69fb36d4317c73b7769e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bb0f701fd4c66731c6ba035d17abdd415c8d1aa2c69fb36d4317c73b7769e4->enter($__internal_c6bb0f701fd4c66731c6ba035d17abdd415c8d1aa2c69fb36d4317c73b7769e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_c6bb0f701fd4c66731c6ba035d17abdd415c8d1aa2c69fb36d4317c73b7769e4->leave($__internal_c6bb0f701fd4c66731c6ba035d17abdd415c8d1aa2c69fb36d4317c73b7769e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
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
", "SonataAdminBundle::empty_layout.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
