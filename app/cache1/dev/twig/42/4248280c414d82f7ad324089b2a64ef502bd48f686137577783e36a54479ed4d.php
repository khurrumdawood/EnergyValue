<?php

/* @SonataAdmin/Helper/render_form_dismissable_errors.html.twig */
class __TwigTemplate_463a19ed2d008b209c7beb2c2b23d6fa9a366ac03a158ba0f3ef7e02d661b8f6 extends Twig_Template
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
        $__internal_91d13f3d6e14fc9b0e7de106b2765fba20001ed8c09daa1a55e8388fa92007e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d13f3d6e14fc9b0e7de106b2765fba20001ed8c09daa1a55e8388fa92007e7->enter($__internal_91d13f3d6e14fc9b0e7de106b2765fba20001ed8c09daa1a55e8388fa92007e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_91d13f3d6e14fc9b0e7de106b2765fba20001ed8c09daa1a55e8388fa92007e7->leave($__internal_91d13f3d6e14fc9b0e7de106b2765fba20001ed8c09daa1a55e8388fa92007e7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Helper\\render_form_dismissable_errors.html.twig");
    }
}
