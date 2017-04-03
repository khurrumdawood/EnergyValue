<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_35833cfd31973531f6970a7d3c979a8556635041fbeac81344b1539ef94d9200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b722d3d31cb650650f843d41e59dee1b6763cc92e584e87cfb42c73be84cfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b722d3d31cb650650f843d41e59dee1b6763cc92e584e87cfb42c73be84cfb5->enter($__internal_1b722d3d31cb650650f843d41e59dee1b6763cc92e584e87cfb42c73be84cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_1b722d3d31cb650650f843d41e59dee1b6763cc92e584e87cfb42c73be84cfb5->leave($__internal_1b722d3d31cb650650f843d41e59dee1b6763cc92e584e87cfb42c73be84cfb5_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_2af845b926cdac171202f4facd0de6dbe535e55b258ff3eb87809f3e6949556b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af845b926cdac171202f4facd0de6dbe535e55b258ff3eb87809f3e6949556b->enter($__internal_2af845b926cdac171202f4facd0de6dbe535e55b258ff3eb87809f3e6949556b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_2af845b926cdac171202f4facd0de6dbe535e55b258ff3eb87809f3e6949556b->leave($__internal_2af845b926cdac171202f4facd0de6dbe535e55b258ff3eb87809f3e6949556b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fa47a87e66ef0a6b56242868e569816f6a1d041f16d98b24b70255558839d6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa47a87e66ef0a6b56242868e569816f6a1d041f16d98b24b70255558839d6fa->enter($__internal_fa47a87e66ef0a6b56242868e569816f6a1d041f16d98b24b70255558839d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fa47a87e66ef0a6b56242868e569816f6a1d041f16d98b24b70255558839d6fa->leave($__internal_fa47a87e66ef0a6b56242868e569816f6a1d041f16d98b24b70255558839d6fa_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_84f9bda214eabdb5a261d46ec027d7238ce88b10e40e58dd00659257d0bf448a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f9bda214eabdb5a261d46ec027d7238ce88b10e40e58dd00659257d0bf448a->enter($__internal_84f9bda214eabdb5a261d46ec027d7238ce88b10e40e58dd00659257d0bf448a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_84f9bda214eabdb5a261d46ec027d7238ce88b10e40e58dd00659257d0bf448a->leave($__internal_84f9bda214eabdb5a261d46ec027d7238ce88b10e40e58dd00659257d0bf448a_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_1391c9c8aee841182aaeebaf32d38c8db2cb54a36ed69612247be9444a59a7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1391c9c8aee841182aaeebaf32d38c8db2cb54a36ed69612247be9444a59a7bd->enter($__internal_1391c9c8aee841182aaeebaf32d38c8db2cb54a36ed69612247be9444a59a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_1391c9c8aee841182aaeebaf32d38c8db2cb54a36ed69612247be9444a59a7bd->leave($__internal_1391c9c8aee841182aaeebaf32d38c8db2cb54a36ed69612247be9444a59a7bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 37,  143 => 36,  140 => 35,  137 => 34,  131 => 33,  124 => 24,  117 => 23,  111 => 22,  103 => 29,  97 => 27,  93 => 25,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  68 => 15,  62 => 14,  50 => 12,  43 => 33,  39 => 31,  37 => 14,  29 => 12,  26 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
