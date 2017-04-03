<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_86ef76e4824425d8fac3e8adcf6b9b5fb0519e898d69a317104b197f9ef842eb extends Twig_Template
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
        // line 22
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df105ad9cae76f70fc2eff285acbdc7a1a7ed9b10303732863311074f8fc819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df105ad9cae76f70fc2eff285acbdc7a1a7ed9b10303732863311074f8fc819f->enter($__internal_df105ad9cae76f70fc2eff285acbdc7a1a7ed9b10303732863311074f8fc819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df105ad9cae76f70fc2eff285acbdc7a1a7ed9b10303732863311074f8fc819f->leave($__internal_df105ad9cae76f70fc2eff285acbdc7a1a7ed9b10303732863311074f8fc819f_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_364051689ca42b86f64704062993305b92fefb89e3b430e4695bfac47c04ab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364051689ca42b86f64704062993305b92fefb89e3b430e4695bfac47c04ab31->enter($__internal_364051689ca42b86f64704062993305b92fefb89e3b430e4695bfac47c04ab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        echo "
";
        
        $__internal_364051689ca42b86f64704062993305b92fefb89e3b430e4695bfac47c04ab31->leave($__internal_364051689ca42b86f64704062993305b92fefb89e3b430e4695bfac47c04ab31_prof);

    }

    // line 12
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0933a2e8eb6647c836a3a1c00b1bae78f5b8643e5cbe3b40d0414b545054243e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0933a2e8eb6647c836a3a1c00b1bae78f5b8643e5cbe3b40d0414b545054243e->enter($__internal_0933a2e8eb6647c836a3a1c00b1bae78f5b8643e5cbe3b40d0414b545054243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->getrender_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_0933a2e8eb6647c836a3a1c00b1bae78f5b8643e5cbe3b40d0414b545054243e->leave($__internal_0933a2e8eb6647c836a3a1c00b1bae78f5b8643e5cbe3b40d0414b545054243e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  83 => 17,  75 => 15,  72 => 14,  67 => 13,  52 => 12,  42 => 25,  36 => 24,  29 => 22,  27 => 11,  18 => 22,);
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
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "@SonataAdmin/CRUD/list_array.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_array.html.twig");
    }
}
