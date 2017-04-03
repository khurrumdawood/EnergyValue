<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_eac96ad5449d38d0431fc72ad1324b25899b335e74f867547748d3968264c00b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f5f271cdee4ae0639d551b49ff22095e8d1b8a18059bacf8cd1ed30775cfb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5f271cdee4ae0639d551b49ff22095e8d1b8a18059bacf8cd1ed30775cfb9a->enter($__internal_2f5f271cdee4ae0639d551b49ff22095e8d1b8a18059bacf8cd1ed30775cfb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5f271cdee4ae0639d551b49ff22095e8d1b8a18059bacf8cd1ed30775cfb9a->leave($__internal_2f5f271cdee4ae0639d551b49ff22095e8d1b8a18059bacf8cd1ed30775cfb9a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2b82ab5d093cedd4a1852dad6bbdba42838cf7d4b98d5c44e136401a680036e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b82ab5d093cedd4a1852dad6bbdba42838cf7d4b98d5c44e136401a680036e1->enter($__internal_2b82ab5d093cedd4a1852dad6bbdba42838cf7d4b98d5c44e136401a680036e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_2b82ab5d093cedd4a1852dad6bbdba42838cf7d4b98d5c44e136401a680036e1->leave($__internal_2b82ab5d093cedd4a1852dad6bbdba42838cf7d4b98d5c44e136401a680036e1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
