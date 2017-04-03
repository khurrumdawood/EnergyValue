<?php

/* @SonataAdmin/CRUD/base_history.html.twig */
class __TwigTemplate_254e1e37a58ec7ca130d850f54d5ac42ee83ecad1e9295745dc378dfe7df4255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_history.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b6e1a6e692c05701a9c174a8752d6460ddc8dfd62f680be43cad55e527ce4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b6e1a6e692c05701a9c174a8752d6460ddc8dfd62f680be43cad55e527ce4b->enter($__internal_b9b6e1a6e692c05701a9c174a8752d6460ddc8dfd62f680be43cad55e527ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_history.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b6e1a6e692c05701a9c174a8752d6460ddc8dfd62f680be43cad55e527ce4b->leave($__internal_b9b6e1a6e692c05701a9c174a8752d6460ddc8dfd62f680be43cad55e527ce4b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_defea8560c1d70be39fd2bac3a5ec32bb167ca17c28d59dd28875751939a1ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defea8560c1d70be39fd2bac3a5ec32bb167ca17c28d59dd28875751939a1ef5->enter($__internal_defea8560c1d70be39fd2bac3a5ec32bb167ca17c28d59dd28875751939a1ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_history.html.twig", 15)->display($context);
        
        $__internal_defea8560c1d70be39fd2bac3a5ec32bb167ca17c28d59dd28875751939a1ef5->leave($__internal_defea8560c1d70be39fd2bac3a5ec32bb167ca17c28d59dd28875751939a1ef5_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9896a6a82a5a7d91a7122b8362675d331f4137097a602cef8caa7e1760eec96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9896a6a82a5a7d91a7122b8362675d331f4137097a602cef8caa7e1760eec96->enter($__internal_d9896a6a82a5a7d91a7122b8362675d331f4137097a602cef8caa7e1760eec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 36
            echo "                            <tr class=\"";
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")) != false) && ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array())))) {
                echo "current-revision";
            }
            echo "\">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"), "@SonataAdmin/CRUD/base_history.html.twig", 38)->display($context);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["revision"], "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 42
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")) == false) || ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array())))) {
                // line 43
                echo "                                        /
                                    ";
            } else {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("base_revision" => $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array()), "compare_revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 47
            echo "                                </td>
                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
";
        
        $__internal_d9896a6a82a5a7d91a7122b8362675d331f4137097a602cef8caa7e1760eec96->leave($__internal_d9896a6a82a5a7d91a7122b8362675d331f4137097a602cef8caa7e1760eec96_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 50,  147 => 47,  137 => 45,  133 => 43,  131 => 42,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  103 => 36,  86 => 35,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  63 => 27,  53 => 19,  47 => 18,  40 => 15,  34 => 14,  19 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block content %}

    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>{{ 'td_revision'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_timestamp'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_username'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_action'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_compare'|trans({}, 'SonataAdminBundle') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for revision in revisions %}
                            <tr class=\"{% if (currentRevision != false and revision.rev == currentRevision.rev) %}current-revision{% endif %}\">
                                <td>{{ revision.rev }}</td>
                                <td>{% include admin.getTemplate('history_revision_timestamp') %}</td>
                                <td>{{ revision.username|default('label_unknown_user'|trans({}, 'SonataAdminBundle')) }}</td>
                                <td><a href=\"{{ admin.generateObjectUrl('history_view_revision', object, {'revision': revision.rev }) }}\" class=\"revision-link\" rel=\"{{ revision.rev }}\">{{ \"label_view_revision\"|trans({}, 'SonataAdminBundle') }}</a></td>
                                <td>
                                    {% if (currentRevision == false or revision.rev == currentRevision.rev) %}
                                        /
                                    {% else %}
                                        <a href=\"{{ admin.generateObjectUrl('history_compare_revisions', object, {'base_revision': currentRevision.rev, 'compare_revision': revision.rev }) }}\" class=\"revision-compare-link\" rel=\"{{ revision.rev }}\">{{ 'label_compare_revision'|trans({}, 'SonataAdminBundle') }}</a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
{% endblock %}
", "@SonataAdmin/CRUD/base_history.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_history.html.twig");
    }
}
