<?php

/* @SonataAdmin/CRUD/dashboard__action.html.twig */
class __TwigTemplate_f830e6730ca21ad4f844ca6f6649e625eba0edd366ff6c1e1c00b1d0a0d6fe96 extends Twig_Template
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
        $__internal_871c0f92508c79a69463ddce280c364f83c0d02c83f62e0b5cb678d05d92798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871c0f92508c79a69463ddce280c364f83c0d02c83f62e0b5cb678d05d92798a->enter($__internal_871c0f92508c79a69463ddce280c364f83c0d02c83f62e0b5cb678d05d92798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_871c0f92508c79a69463ddce280c364f83c0d02c83f62e0b5cb678d05d92798a->leave($__internal_871c0f92508c79a69463ddce280c364f83c0d02c83f62e0b5cb678d05d92798a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
    {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
</a>
", "@SonataAdmin/CRUD/dashboard__action.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\dashboard__action.html.twig");
    }
}
