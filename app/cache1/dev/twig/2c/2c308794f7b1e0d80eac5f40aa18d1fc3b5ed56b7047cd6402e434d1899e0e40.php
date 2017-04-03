<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_13f2141e32e477a9eed9eb6729e88f0535e0bc0a4717a41fd479d99b7bb0bec4 extends Twig_Template
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
        $__internal_67adaf79f0101784861c3f2c39021c53e08d8769ef6a71a101b149fefae2b787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67adaf79f0101784861c3f2c39021c53e08d8769ef6a71a101b149fefae2b787->enter($__internal_67adaf79f0101784861c3f2c39021c53e08d8769ef6a71a101b149fefae2b787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

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
        
        $__internal_67adaf79f0101784861c3f2c39021c53e08d8769ef6a71a101b149fefae2b787->leave($__internal_67adaf79f0101784861c3f2c39021c53e08d8769ef6a71a101b149fefae2b787_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
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
", "SonataAdminBundle:Helper:short-object-description.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
