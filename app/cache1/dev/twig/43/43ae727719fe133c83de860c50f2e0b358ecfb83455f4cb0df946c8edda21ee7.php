<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_a48c2a003da7226601f4ff9bb3bc9f3c196c9937d7b9f85e744c856aa621bfba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b8d2709064fb340489f6c36d1df78a977fae78bb9cc8f5ab990b6934f226440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8d2709064fb340489f6c36d1df78a977fae78bb9cc8f5ab990b6934f226440->enter($__internal_8b8d2709064fb340489f6c36d1df78a977fae78bb9cc8f5ab990b6934f226440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8d2709064fb340489f6c36d1df78a977fae78bb9cc8f5ab990b6934f226440->leave($__internal_8b8d2709064fb340489f6c36d1df78a977fae78bb9cc8f5ab990b6934f226440_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_beb1e9b7ce3146fb28f89891bcd586645b408dcb909a87ee194b8174f78778aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb1e9b7ce3146fb28f89891bcd586645b408dcb909a87ee194b8174f78778aa->enter($__internal_beb1e9b7ce3146fb28f89891bcd586645b408dcb909a87ee194b8174f78778aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_beb1e9b7ce3146fb28f89891bcd586645b408dcb909a87ee194b8174f78778aa->leave($__internal_beb1e9b7ce3146fb28f89891bcd586645b408dcb909a87ee194b8174f78778aa_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_477d26dba0698747afef42cf4fb0687676afbc58c51aff9864c723c71b1a29e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477d26dba0698747afef42cf4fb0687676afbc58c51aff9864c723c71b1a29e7->enter($__internal_477d26dba0698747afef42cf4fb0687676afbc58c51aff9864c723c71b1a29e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_477d26dba0698747afef42cf4fb0687676afbc58c51aff9864c723c71b1a29e7->leave($__internal_477d26dba0698747afef42cf4fb0687676afbc58c51aff9864c723c71b1a29e7_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_a32faf4c62c8a86c0da972ca70ce7d910ea62ce3a887b73690f0166dc88424d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32faf4c62c8a86c0da972ca70ce7d910ea62ce3a887b73690f0166dc88424d5->enter($__internal_a32faf4c62c8a86c0da972ca70ce7d910ea62ce3a887b73690f0166dc88424d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_a32faf4c62c8a86c0da972ca70ce7d910ea62ce3a887b73690f0166dc88424d5->leave($__internal_a32faf4c62c8a86c0da972ca70ce7d910ea62ce3a887b73690f0166dc88424d5_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_a6451e3047118ef8e1b67b78d8879cf13a9467f36d169dbc3f91138782b39f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6451e3047118ef8e1b67b78d8879cf13a9467f36d169dbc3f91138782b39f31->enter($__internal_a6451e3047118ef8e1b67b78d8879cf13a9467f36d169dbc3f91138782b39f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_a6451e3047118ef8e1b67b78d8879cf13a9467f36d169dbc3f91138782b39f31->leave($__internal_a6451e3047118ef8e1b67b78d8879cf13a9467f36d169dbc3f91138782b39f31_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_f5ce8bd4e59103fcd7ec196c6aa4e09607386b5ff2220773366ebb1a4f042952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ce8bd4e59103fcd7ec196c6aa4e09607386b5ff2220773366ebb1a4f042952->enter($__internal_f5ce8bd4e59103fcd7ec196c6aa4e09607386b5ff2220773366ebb1a4f042952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_f5ce8bd4e59103fcd7ec196c6aa4e09607386b5ff2220773366ebb1a4f042952->leave($__internal_f5ce8bd4e59103fcd7ec196c6aa4e09607386b5ff2220773366ebb1a4f042952_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
