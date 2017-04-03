<?php

/* VaultBundle:Sonata:list__action_delete.html.twig */
class __TwigTemplate_4203adc373df0410450ea1c9e83b54ea4532c86616e60c048f9adb1321749051 extends Twig_Template
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
        $__internal_d34c2446fc5b9717366a8b4530dad8a2f5ff9c78b1206b1155c8e4ecc82f2ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34c2446fc5b9717366a8b4530dad8a2f5ff9c78b1206b1155c8e4ecc82f2ab0->enter($__internal_d34c2446fc5b9717366a8b4530dad8a2f5ff9c78b1206b1155c8e4ecc82f2ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VaultBundle:Sonata:list__action_delete.html.twig"));

        // line 1
        echo "
<a class=\"btn btn-sm btn-default delete_link\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "softDelete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
    Delete
</a>
";
        
        $__internal_d34c2446fc5b9717366a8b4530dad8a2f5ff9c78b1206b1155c8e4ecc82f2ab0->leave($__internal_d34c2446fc5b9717366a8b4530dad8a2f5ff9c78b1206b1155c8e4ecc82f2ab0_prof);

    }

    public function getTemplateName()
    {
        return "VaultBundle:Sonata:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<a class=\"btn btn-sm btn-default delete_link\" href=\"{{ admin.generateObjectUrl('softDelete', object) }}\">
    <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
    Delete
</a>
", "VaultBundle:Sonata:list__action_delete.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle/Resources/views/Sonata/list__action_delete.html.twig");
    }
}
