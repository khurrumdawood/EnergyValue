<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig */
class __TwigTemplate_ac753b758ea9666f86cda5d435d95820baf52dea56b48b131638be7d1ece4e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3bcca88b30323863ef17fd816a993c696bc0deb3995e96dffbd58de5394b730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bcca88b30323863ef17fd816a993c696bc0deb3995e96dffbd58de5394b730->enter($__internal_e3bcca88b30323863ef17fd816a993c696bc0deb3995e96dffbd58de5394b730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3bcca88b30323863ef17fd816a993c696bc0deb3995e96dffbd58de5394b730->leave($__internal_e3bcca88b30323863ef17fd816a993c696bc0deb3995e96dffbd58de5394b730_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_883e1ce060b176cf52206156745e3cf36d837be5616162a3f04d0c10b9124557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883e1ce060b176cf52206156745e3cf36d837be5616162a3f04d0c10b9124557->enter($__internal_883e1ce060b176cf52206156745e3cf36d837be5616162a3f04d0c10b9124557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_883e1ce060b176cf52206156745e3cf36d837be5616162a3f04d0c10b9124557->leave($__internal_883e1ce060b176cf52206156745e3cf36d837be5616162a3f04d0c10b9124557_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_7c3d6dfbd43c71e2861b610768ab81de1dc392815929d9178b40315c4ee9f3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3d6dfbd43c71e2861b610768ab81de1dc392815929d9178b40315c4ee9f3d1->enter($__internal_7c3d6dfbd43c71e2861b610768ab81de1dc392815929d9178b40315c4ee9f3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_7c3d6dfbd43c71e2861b610768ab81de1dc392815929d9178b40315c4ee9f3d1->leave($__internal_7c3d6dfbd43c71e2861b610768ab81de1dc392815929d9178b40315c4ee9f3d1_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_dd04e777e8b2dec31ecc0b9dda327527d8c637827a8686338b78e09908f2f472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd04e777e8b2dec31ecc0b9dda327527d8c637827a8686338b78e09908f2f472->enter($__internal_dd04e777e8b2dec31ecc0b9dda327527d8c637827a8686338b78e09908f2f472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_dd04e777e8b2dec31ecc0b9dda327527d8c637827a8686338b78e09908f2f472->leave($__internal_dd04e777e8b2dec31ecc0b9dda327527d8c637827a8686338b78e09908f2f472_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 39,  160 => 38,  151 => 34,  146 => 33,  140 => 32,  132 => 29,  118 => 28,  112 => 27,  94 => 26,  91 => 25,  77 => 24,  73 => 23,  70 => 21,  67 => 19,  65 => 18,  47 => 17,  44 => 16,  41 => 15,  35 => 14,  20 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, value) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value%}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{ element|render_relation_element(field_description) }}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{ element|render_relation_element(field_description) }}
{%- endblock -%}
", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_one_to_many.html.twig");
    }
}
