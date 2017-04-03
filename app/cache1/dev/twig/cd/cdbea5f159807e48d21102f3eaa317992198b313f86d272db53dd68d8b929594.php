<?php

/* @SonataAdmin/Core/search.html.twig */
class __TwigTemplate_cd233130881001a17e2e346c3f341fd1bfae9a0bf70219004a2dae889a286eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/Core/search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b699f4bb4b2e1137a307cb55d221a5794215e30d8f7cbf6f661ec62afaa78105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b699f4bb4b2e1137a307cb55d221a5794215e30d8f7cbf6f661ec62afaa78105->enter($__internal_b699f4bb4b2e1137a307cb55d221a5794215e30d8f7cbf6f661ec62afaa78105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b699f4bb4b2e1137a307cb55d221a5794215e30d8f7cbf6f661ec62afaa78105->leave($__internal_b699f4bb4b2e1137a307cb55d221a5794215e30d8f7cbf6f661ec62afaa78105_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc0448a9245b5a0b704332602805e2e8fa537f046b1c9f9b86656630dc3e7b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0448a9245b5a0b704332602805e2e8fa537f046b1c9f9b86656630dc3e7b3a->enter($__internal_dc0448a9245b5a0b704332602805e2e8fa537f046b1c9f9b86656630dc3e7b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_dc0448a9245b5a0b704332602805e2e8fa537f046b1c9f9b86656630dc3e7b3a->leave($__internal_dc0448a9245b5a0b704332602805e2e8fa537f046b1c9f9b86656630dc3e7b3a_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_88cc939b28ba53dc5dbf0f61108f2f14ab6cc86dc716290c2acbe52bb0797999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cc939b28ba53dc5dbf0f61108f2f14ab6cc86dc716290c2acbe52bb0797999->enter($__internal_88cc939b28ba53dc5dbf0f61108f2f14ab6cc86dc716290c2acbe52bb0797999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_88cc939b28ba53dc5dbf0f61108f2f14ab6cc86dc716290c2acbe52bb0797999->leave($__internal_88cc939b28ba53dc5dbf0f61108f2f14ab6cc86dc716290c2acbe52bb0797999_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb83fa2239709fa9de953b01db77ca4b68d6f50c8c430849ab8210f59e620786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb83fa2239709fa9de953b01db77ca4b68d6f50c8c430849ab8210f59e620786->enter($__internal_bb83fa2239709fa9de953b01db77ca4b68d6f50c8c430849ab8210f59e620786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\">

        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 24
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 26
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 27
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
            ";
                // line 29
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 30
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 31
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 32
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")))) {
                            // line 33
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 36
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 37
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 40
$context["group"], "icon", array()))));
                            // line 41
                            echo "
                    ";
                        }
                        // line 43
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
    ";
        }
        // line 48
        echo "
";
        
        $__internal_bb83fa2239709fa9de953b01db77ca4b68d6f50c8c430849ab8210f59e620786->leave($__internal_bb83fa2239709fa9de953b01db77ca4b68d6f50c8c430849ab8210f59e620786_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  143 => 46,  137 => 45,  134 => 44,  128 => 43,  124 => 41,  122 => 40,  121 => 37,  120 => 36,  118 => 33,  115 => 32,  112 => 31,  107 => 30,  105 => 29,  102 => 28,  95 => 27,  92 => 26,  86 => 25,  83 => 24,  79 => 23,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\">

        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.isGranted('CREATE') or admin.hasRoute('list') and admin.isGranted('LIST') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "@SonataAdmin/Core/search.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\search.html.twig");
    }
}
