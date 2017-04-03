<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_29dccf990698a634bc92e5f6a0f84b369a7001204c063c049c85ce2f0be69ea3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b400cee8dd0d0087790d19ef90ce64eaf687443c721c05a3f39eb00d82b513c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b400cee8dd0d0087790d19ef90ce64eaf687443c721c05a3f39eb00d82b513c->enter($__internal_3b400cee8dd0d0087790d19ef90ce64eaf687443c721c05a3f39eb00d82b513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b400cee8dd0d0087790d19ef90ce64eaf687443c721c05a3f39eb00d82b513c->leave($__internal_3b400cee8dd0d0087790d19ef90ce64eaf687443c721c05a3f39eb00d82b513c_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_c700e83c234933cfbbc18322fa2566f66f9119e12ecd84e84a9428fd62974b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c700e83c234933cfbbc18322fa2566f66f9119e12ecd84e84a9428fd62974b3a->enter($__internal_c700e83c234933cfbbc18322fa2566f66f9119e12ecd84e84a9428fd62974b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        echo "
";
        
        $__internal_c700e83c234933cfbbc18322fa2566f66f9119e12ecd84e84a9428fd62974b3a->leave($__internal_c700e83c234933cfbbc18322fa2566f66f9119e12ecd84e84a9428fd62974b3a_prof);

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
            $__internal_2b3b126a83cca69604d61fc6c739d7dae49f1402ac250419a68e432258516f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2b3b126a83cca69604d61fc6c739d7dae49f1402ac250419a68e432258516f13->enter($__internal_2b3b126a83cca69604d61fc6c739d7dae49f1402ac250419a68e432258516f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

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
            
            $__internal_2b3b126a83cca69604d61fc6c739d7dae49f1402ac250419a68e432258516f13->leave($__internal_2b3b126a83cca69604d61fc6c739d7dae49f1402ac250419a68e432258516f13_prof);

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
        return "SonataAdminBundle:CRUD:list_array.html.twig";
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
", "SonataAdminBundle:CRUD:list_array.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
