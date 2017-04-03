<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_ef75eee687c47e3b874717f6e564a529bf5fab4ba7efeece8180a73aa1a10c83 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9472e24ef194cabb7128844aae9e68a3910e54309305ccf303a505d178299848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9472e24ef194cabb7128844aae9e68a3910e54309305ccf303a505d178299848->enter($__internal_9472e24ef194cabb7128844aae9e68a3910e54309305ccf303a505d178299848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9472e24ef194cabb7128844aae9e68a3910e54309305ccf303a505d178299848->leave($__internal_9472e24ef194cabb7128844aae9e68a3910e54309305ccf303a505d178299848_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5cb3f34e4cca2c12574e6fed68a3fa00167b1e32ccba377aaf745bd02d98be38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb3f34e4cca2c12574e6fed68a3fa00167b1e32ccba377aaf745bd02d98be38->enter($__internal_5cb3f34e4cca2c12574e6fed68a3fa00167b1e32ccba377aaf745bd02d98be38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5cb3f34e4cca2c12574e6fed68a3fa00167b1e32ccba377aaf745bd02d98be38->leave($__internal_5cb3f34e4cca2c12574e6fed68a3fa00167b1e32ccba377aaf745bd02d98be38_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "@SonataAdmin/CRUD/edit_file.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_file.html.twig");
    }
}
