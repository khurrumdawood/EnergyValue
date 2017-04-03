<?php

/* @SonataAdmin/Pager/simple_pager_results.html.twig */
class __TwigTemplate_c2aa2a47a8451b57fa500c5f79aaa296cf7219a338a764e4c649dee236a89617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b01700b6d671c68d21d495b9b75b37f4a5026c7cfad041d42c2c4ada7feaf584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01700b6d671c68d21d495b9b75b37f4a5026c7cfad041d42c2c4ada7feaf584->enter($__internal_b01700b6d671c68d21d495b9b75b37f4a5026c7cfad041d42c2c4ada7feaf584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b01700b6d671c68d21d495b9b75b37f4a5026c7cfad041d42c2c4ada7feaf584->leave($__internal_b01700b6d671c68d21d495b9b75b37f4a5026c7cfad041d42c2c4ada7feaf584_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_b4d9000730e200dbc8c1e9ec8de53ded2d283c42cd6f8a85102955f8224acb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d9000730e200dbc8c1e9ec8de53ded2d283c42cd6f8a85102955f8224acb98->enter($__internal_b4d9000730e200dbc8c1e9ec8de53ded2d283c42cd6f8a85102955f8224acb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_b4d9000730e200dbc8c1e9ec8de53ded2d283c42cd6f8a85102955f8224acb98->leave($__internal_b4d9000730e200dbc8c1e9ec8de53ded2d283c42cd6f8a85102955f8224acb98_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_2f953952fbb8f78b043cea0e155a565190c6b7e1ebb9b60748675b7c170e818d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f953952fbb8f78b043cea0e155a565190c6b7e1ebb9b60748675b7c170e818d->enter($__internal_2f953952fbb8f78b043cea0e155a565190c6b7e1ebb9b60748675b7c170e818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_2f953952fbb8f78b043cea0e155a565190c6b7e1ebb9b60748675b7c170e818d->leave($__internal_2f953952fbb8f78b043cea0e155a565190c6b7e1ebb9b60748675b7c170e818d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  75 => 26,  73 => 25,  67 => 23,  61 => 22,  53 => 19,  50 => 18,  44 => 16,  41 => 15,  35 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "@SonataAdmin/Pager/simple_pager_results.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\simple_pager_results.html.twig");
    }
}
