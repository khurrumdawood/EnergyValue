<?php

/* @SonataUser/Profile/edit_profile.html.twig */
class __TwigTemplate_e0824f602f98dba1a99745ef77b8aca534d828f98ec1fe6b2d22dde47f75f572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "@SonataUser/Profile/edit_profile.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c5640e1d261ba8dca102c13f314fcb2435ea467b46ea8bd3e5130d7a1de78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c5640e1d261ba8dca102c13f314fcb2435ea467b46ea8bd3e5130d7a1de78c->enter($__internal_62c5640e1d261ba8dca102c13f314fcb2435ea467b46ea8bd3e5130d7a1de78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c5640e1d261ba8dca102c13f314fcb2435ea467b46ea8bd3e5130d7a1de78c->leave($__internal_62c5640e1d261ba8dca102c13f314fcb2435ea467b46ea8bd3e5130d7a1de78c_prof);

    }

    // line 14
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_e6b1a1ffbe6c198bdbf51a1bdc33ac7f0de6ba256274b6ec93a3ec3f4ba70d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b1a1ffbe6c198bdbf51a1bdc33ac7f0de6ba256274b6ec93a3ec3f4ba70d9a->enter($__internal_e6b1a1ffbe6c198bdbf51a1bdc33ac7f0de6ba256274b6ec93a3ec3f4ba70d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "
";
        
        $__internal_e6b1a1ffbe6c198bdbf51a1bdc33ac7f0de6ba256274b6ec93a3ec3f4ba70d9a->leave($__internal_e6b1a1ffbe6c198bdbf51a1bdc33ac7f0de6ba256274b6ec93a3ec3f4ba70d9a_prof);

    }

    // line 18
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_d1005be946a136633f3a07fb706fc358570cf70e7003e0c558e223e2aa501ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1005be946a136633f3a07fb706fc358570cf70e7003e0c558e223e2aa501ac4->enter($__internal_d1005be946a136633f3a07fb706fc358570cf70e7003e0c558e223e2aa501ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 19
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user profile edition template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parentUser", array()), 'label', array("label" => "parentUser"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parentUser", array()), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parentUser", array()), 'widget');
        echo "

    ";
        // line 26
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 27
        echo "
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 33
        $this->loadTemplate("SonataUserBundle:Profile:edit_profile_content.html.twig", "@SonataUser/Profile/edit_profile.html.twig", 33)->display($context);
        // line 34
        echo "        </div>
    </div>

    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_profile_edit_authentication"), array());
        
        $__internal_d1005be946a136633f3a07fb706fc358570cf70e7003e0c558e223e2aa501ac4->leave($__internal_d1005be946a136633f3a07fb706fc358570cf70e7003e0c558e223e2aa501ac4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  99 => 34,  97 => 33,  91 => 30,  86 => 27,  84 => 26,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  64 => 20,  59 => 19,  53 => 18,  41 => 15,  35 => 14,  11 => 12,);
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

{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_title %}
    {{ \"title_user_account\" | trans({}, 'SonataUserBundle')}} - {{ \"title_user_edit_profile\" | trans({}, 'SonataUserBundle')}}
{% endblock %}

{% block sonata_profile_content %}
    {% sonata_template_box 'This is the user profile edition template. Feel free to override it.' %}

    {{ form_errors(form) }}
    {{ form_label(form.parentUser, 'parentUser') }}
    {{ form_errors(form.parentUser) }}
    {{ form_widget(form.parentUser) }}

    {% form_theme form _self %}

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_account\" | trans({}, 'SonataUserBundle')}}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"SonataUserBundle:Profile:edit_profile_content.html.twig\" %}
        </div>
    </div>

    {% render url(\"sonata_user_profile_edit_authentication\") %}
{% endblock %}
", "@SonataUser/Profile/edit_profile.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Profile\\edit_profile.html.twig");
    }
}
