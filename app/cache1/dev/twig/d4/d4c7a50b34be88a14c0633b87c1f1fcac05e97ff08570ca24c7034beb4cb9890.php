<?php

/* @SonataAdmin/Helper/short-object-description.html.twig */
class __TwigTemplate_b9bf8f9094d8837286ea869917d5bd2bb4328216fbe69d6ecbc856fba4823ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7b45733a4e1500568adc697c9133ba84bbd43bb3bc3d5a7c587a52907e9bb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b45733a4e1500568adc697c9133ba84bbd43bb3bc3d5a7c587a52907e9bb08->enter($__internal_b7b45733a4e1500568adc697c9133ba84bbd43bb3bc3d5a7c587a52907e9bb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => (isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_b7b45733a4e1500568adc697c9133ba84bbd43bb3bc3d5a7c587a52907e9bb08->leave($__internal_b7b45733a4e1500568adc697c9133ba84bbd43bb3bc3d5a7c587a52907e9bb08_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Helper/short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"inner-field-short-description\">
    {% if object and admin.hasRoute('edit') and admin.isGranted('EDIT') %}
        <a href=\"{{ admin.generateObjectUrl('edit', object, link_parameters) }}\" target=\"new\">{{ description }}</a>
    {% else %}
        {{ description }}
    {% endif %}
</span>
", "@SonataAdmin/Helper/short-object-description.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Helper\\short-object-description.html.twig");
    }
}
