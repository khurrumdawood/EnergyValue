<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_45762d30cdb3afcaaad040a0fe650cf4159d473547cc51415036c723004cf069 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed194a9af36db3ac4338abcff5cf6f5fc0ad39eed0c2277aa39651bc1cc66755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed194a9af36db3ac4338abcff5cf6f5fc0ad39eed0c2277aa39651bc1cc66755->enter($__internal_ed194a9af36db3ac4338abcff5cf6f5fc0ad39eed0c2277aa39651bc1cc66755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed194a9af36db3ac4338abcff5cf6f5fc0ad39eed0c2277aa39651bc1cc66755->leave($__internal_ed194a9af36db3ac4338abcff5cf6f5fc0ad39eed0c2277aa39651bc1cc66755_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d5834527a554c7cc5f74836319a41d0a085bf3e33b718ffc8ace0952f18eadc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5834527a554c7cc5f74836319a41d0a085bf3e33b718ffc8ace0952f18eadc3->enter($__internal_d5834527a554c7cc5f74836319a41d0a085bf3e33b718ffc8ace0952f18eadc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d5834527a554c7cc5f74836319a41d0a085bf3e33b718ffc8ace0952f18eadc3->leave($__internal_d5834527a554c7cc5f74836319a41d0a085bf3e33b718ffc8ace0952f18eadc3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
", "@SonataAdmin/CRUD/edit_integer.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_integer.html.twig");
    }
}
