<?php

/* @SonataAdmin/CRUD/base_show_macro.html.twig */
class __TwigTemplate_42b1d858183aba488b6400dae4e47888c2022076c0f28cf038c39227ef5bec1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e018121558233403016873de11dde052e133ff5ba4a4de764b405d393c0a7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e018121558233403016873de11dde052e133ff5ba4a4de764b405d393c0a7e5->enter($__internal_7e018121558233403016873de11dde052e133ff5ba4a4de764b405d393c0a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_7e018121558233403016873de11dde052e133ff5ba4a4de764b405d393c0a7e5->leave($__internal_7e018121558233403016873de11dde052e133ff5ba4a4de764b405d393c0a7e5_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_ff1ca67ecade3caad29515af33ed50d7ebeb030f90dfbdd2bc7c646173879bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1ca67ecade3caad29515af33ed50d7ebeb030f90dfbdd2bc7c646173879bd4->enter($__internal_ff1ca67ecade3caad29515af33ed50d7ebeb030f90dfbdd2bc7c646173879bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ff1ca67ecade3caad29515af33ed50d7ebeb030f90dfbdd2bc7c646173879bd4->leave($__internal_ff1ca67ecade3caad29515af33ed50d7ebeb030f90dfbdd2bc7c646173879bd4_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_b1db07946f569c786f83c0d1f198bd36a38fb9cbf2557cb831859c80938a98d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1db07946f569c786f83c0d1f198bd36a38fb9cbf2557cb831859c80938a98d2->enter($__internal_b1db07946f569c786f83c0d1f198bd36a38fb9cbf2557cb831859c80938a98d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_b1db07946f569c786f83c0d1f198bd36a38fb9cbf2557cb831859c80938a98d2->leave($__internal_b1db07946f569c786f83c0d1f198bd36a38fb9cbf2557cb831859c80938a98d2_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_ddca3daac0e0b4f132302864128b47229e98cf6f700cf0a2c04a24feeba27ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddca3daac0e0b4f132302864128b47229e98cf6f700cf0a2c04a24feeba27ba6->enter($__internal_ddca3daac0e0b4f132302864128b47229e98cf6f700cf0a2c04a24feeba27ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_ddca3daac0e0b4f132302864128b47229e98cf6f700cf0a2c04a24feeba27ba6->leave($__internal_ddca3daac0e0b4f132302864128b47229e98cf6f700cf0a2c04a24feeba27ba6_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_eb35c7613cc2c1d586f5becd66284dfa6938b5e7d9ebef53fa738711e8837157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_eb35c7613cc2c1d586f5becd66284dfa6938b5e7d9ebef53fa738711e8837157->enter($__internal_eb35c7613cc2c1d586f5becd66284dfa6938b5e7d9ebef53fa738711e8837157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_eb35c7613cc2c1d586f5becd66284dfa6938b5e7d9ebef53fa738711e8837157->leave($__internal_eb35c7613cc2c1d586f5becd66284dfa6938b5e7d9ebef53fa738711e8837157_prof);

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
        return "@SonataAdmin/CRUD/base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 5,  207 => 4,  187 => 3,  179 => 31,  173 => 29,  171 => 28,  168 => 27,  162 => 26,  152 => 18,  146 => 17,  122 => 34,  108 => 33,  105 => 26,  88 => 25,  81 => 20,  79 => 17,  73 => 14,  67 => 13,  64 => 12,  61 => 11,  43 => 10,  31 => 9,  28 => 8,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.name|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "@SonataAdmin/CRUD/base_show_macro.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show_macro.html.twig");
    }
}
