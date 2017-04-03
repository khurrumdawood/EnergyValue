<?php

/* @Vault/Sonata/list__action_delete.html.twig */
class __TwigTemplate_8d8ffaac6ba4f1b8bae9725d0123dba4616df7b900f9adca1a08637058b8e92c extends Twig_Template
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
        $__internal_4a735c8afd5332cbb0b24e595d8b491d0b612926a9e61a8ba62279d0b6de51d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a735c8afd5332cbb0b24e595d8b491d0b612926a9e61a8ba62279d0b6de51d1->enter($__internal_4a735c8afd5332cbb0b24e595d8b491d0b612926a9e61a8ba62279d0b6de51d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Vault/Sonata/list__action_delete.html.twig"));

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
        
        $__internal_4a735c8afd5332cbb0b24e595d8b491d0b612926a9e61a8ba62279d0b6de51d1->leave($__internal_4a735c8afd5332cbb0b24e595d8b491d0b612926a9e61a8ba62279d0b6de51d1_prof);

    }

    public function getTemplateName()
    {
        return "@Vault/Sonata/list__action_delete.html.twig";
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
", "@Vault/Sonata/list__action_delete.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle\\Resources\\views\\Sonata\\list__action_delete.html.twig");
    }
}
