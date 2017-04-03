<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_9fffa351b0649a262f36311d1aa2347240ef30cf49745c53f2a2483992a9940a extends Twig_Template
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
        $__internal_2fbf763032d134d42b244af0b2c4670e94058de1b005bf6f8767c3391f7b910b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbf763032d134d42b244af0b2c4670e94058de1b005bf6f8767c3391f7b910b->enter($__internal_2fbf763032d134d42b244af0b2c4670e94058de1b005bf6f8767c3391f7b910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_2fbf763032d134d42b244af0b2c4670e94058de1b005bf6f8767c3391f7b910b->leave($__internal_2fbf763032d134d42b244af0b2c4670e94058de1b005bf6f8767c3391f7b910b_prof);

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
