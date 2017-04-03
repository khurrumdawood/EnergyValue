<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig */
class __TwigTemplate_26b481fb867f36289d25c84dae9bb9097c8a44d2bca62c9cc54945d090ca832e extends Twig_Template
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
        $__internal_65bb06c8e6f16cb23db4a142e07a359fa00593ce3161641016ce00f49c333a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bb06c8e6f16cb23db4a142e07a359fa00593ce3161641016ce00f49c333a0e->enter($__internal_65bb06c8e6f16cb23db4a142e07a359fa00593ce3161641016ce00f49c333a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig"));

        // line 11
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())), "children", array()));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 15
            echo "                ";
            if (($context["field_name"] == "_delete")) {
                // line 16
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 18
                echo "                    <th
                        ";
                // line 19
                if ($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "required", array(), "array")) {
                    // line 20
                    echo "                            class=\"required\"
                        ";
                }
                // line 22
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "attr", array(), "array"), "hidden", array(), "array"))) {
                    // line 23
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 25
                echo "                    >
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "label", array()), array(), $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "translation_domain", array())), "html", null, true);
                echo "
                    </th>
                ";
            }
            // line 29
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 34
            echo "            <tr>
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", array()));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 36
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        control-group
                        ";
                // line 39
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                    echo " error";
                }
                // line 40
                echo "                        \"
                        ";
                // line 41
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "attr", array(), "array"), "hidden", array(), "array"))) {
                    // line 42
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 44
                echo "                    >
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 48
                    $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", array());
                    // line 49
                    echo "                        ";
                } else {
                    // line 50
                    echo "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 51
                        echo "                                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'widget', array("label_render" => false));
                        echo "
                            ";
                    } else {
                        // line 53
                        echo "                                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 55
                    echo "                        ";
                }
                // line 56
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                    // line 57
                    echo "                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 58
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 61
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tbody>
</table>
";
        
        $__internal_65bb06c8e6f16cb23db4a142e07a359fa00593ce3161641016ce00f49c333a0e->leave($__internal_65bb06c8e6f16cb23db4a142e07a359fa00593ce3161641016ce00f49c333a0e_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  163 => 63,  156 => 61,  150 => 58,  147 => 57,  144 => 56,  141 => 55,  135 => 53,  129 => 51,  126 => 50,  123 => 49,  121 => 48,  115 => 46,  113 => 45,  110 => 44,  106 => 42,  104 => 41,  101 => 40,  97 => 39,  90 => 37,  87 => 36,  83 => 35,  80 => 34,  76 => 33,  71 => 30,  65 => 29,  59 => 26,  56 => 25,  52 => 23,  49 => 22,  45 => 20,  43 => 19,  40 => 18,  34 => 16,  31 => 15,  27 => 14,  22 => 11,);
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
<table class=\"table table-bordered\">
    <thead>
        <tr>
            {% for field_name, nested_field in form.children|first.children %}
                {% if field_name == '_delete' %}
                    <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                {% else %}
                    <th
                        {% if nested_field.vars['required'] %}
                            class=\"required\"
                        {% endif %}
                        {% if (nested_field.vars['attr']['hidden'] is defined) and (nested_field.vars['attr']['hidden']) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {{ nested_field.vars.label|trans({}, nested_field.vars.translation_domain) }}
                    </th>
                {% endif %}
            {% endfor %}
        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        {% for nested_group_field_name, nested_group_field in form.children %}
            <tr>
                {% for field_name, nested_field in nested_group_field.children %}
                    <td class=\"
                        sonata-ba-td-{{ id }}-{{ field_name  }}
                        control-group
                        {% if nested_field.vars.errors|length > 0 %} error{% endif %}
                        \"
                        {% if (nested_field.vars['attr']['hidden'] is defined) and (nested_field.vars['attr']['hidden']) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if sonata_admin.field_description.associationadmin.formfielddescriptions[field_name] is defined %}
                            {{ form_widget(nested_field) }}

                            {% set dummy = nested_group_field.setrendered %}
                        {% else %}
                            {% if field_name == '_delete' %}
                                {{ form_widget(nested_field, {'label_render': false}) }}
                            {% else %}
                                {{ form_widget(nested_field) }}
                            {% endif %}
                        {% endif %}
                        {% if nested_field.vars.errors|length > 0 %}
                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                {{ form_errors(nested_field) }}
                            </div>
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>
        {% endfor %}
    </tbody>
</table>
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_many_inline_table.html.twig");
    }
}
