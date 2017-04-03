<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_408a6a20f4e818c7aad1773dc78de007360c53f0547093c6c285e65c019d9004 extends Twig_Template
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
        $__internal_04d4c03deb901d6d2522e6268ed8f24e4472e92af983afff2e673a79e157698a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d4c03deb901d6d2522e6268ed8f24e4472e92af983afff2e673a79e157698a->enter($__internal_04d4c03deb901d6d2522e6268ed8f24e4472e92af983afff2e673a79e157698a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_04d4c03deb901d6d2522e6268ed8f24e4472e92af983afff2e673a79e157698a->leave($__internal_04d4c03deb901d6d2522e6268ed8f24e4472e92af983afff2e673a79e157698a_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
