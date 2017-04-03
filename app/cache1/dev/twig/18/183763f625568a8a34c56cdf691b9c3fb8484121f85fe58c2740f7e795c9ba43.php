<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_fa7c09cf51f4784fdb62f5550f7cfb1fadd387b9600cb0483a35a0fc97eef092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6644babb17bd317eef8c749ab3c501b5945ad11aa45e313e121878c3bfd0a7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6644babb17bd317eef8c749ab3c501b5945ad11aa45e313e121878c3bfd0a7fd->enter($__internal_6644babb17bd317eef8c749ab3c501b5945ad11aa45e313e121878c3bfd0a7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_6644babb17bd317eef8c749ab3c501b5945ad11aa45e313e121878c3bfd0a7fd->leave($__internal_6644babb17bd317eef8c749ab3c501b5945ad11aa45e313e121878c3bfd0a7fd_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_57df3b473b84e250183552b3106a97b37989de3e231288ad43009fa3b3c6b081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57df3b473b84e250183552b3106a97b37989de3e231288ad43009fa3b3c6b081->enter($__internal_57df3b473b84e250183552b3106a97b37989de3e231288ad43009fa3b3c6b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_57df3b473b84e250183552b3106a97b37989de3e231288ad43009fa3b3c6b081->leave($__internal_57df3b473b84e250183552b3106a97b37989de3e231288ad43009fa3b3c6b081_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_186106a48c6d44490d813d7fd84faaddf44f609375b4ed4f1e6cbb1c2abe03e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186106a48c6d44490d813d7fd84faaddf44f609375b4ed4f1e6cbb1c2abe03e6->enter($__internal_186106a48c6d44490d813d7fd84faaddf44f609375b4ed4f1e6cbb1c2abe03e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_186106a48c6d44490d813d7fd84faaddf44f609375b4ed4f1e6cbb1c2abe03e6->leave($__internal_186106a48c6d44490d813d7fd84faaddf44f609375b4ed4f1e6cbb1c2abe03e6_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_2f8a6b7de248dd8f8adea2e8c74c6200ff638062312e564b75dd783d52655892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8a6b7de248dd8f8adea2e8c74c6200ff638062312e564b75dd783d52655892->enter($__internal_2f8a6b7de248dd8f8adea2e8c74c6200ff638062312e564b75dd783d52655892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_2f8a6b7de248dd8f8adea2e8c74c6200ff638062312e564b75dd783d52655892->leave($__internal_2f8a6b7de248dd8f8adea2e8c74c6200ff638062312e564b75dd783d52655892_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_ceddd982bb31cf9a36bc930aa66a7837629c354ae53b9eacc5571b24792da090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceddd982bb31cf9a36bc930aa66a7837629c354ae53b9eacc5571b24792da090->enter($__internal_ceddd982bb31cf9a36bc930aa66a7837629c354ae53b9eacc5571b24792da090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_ceddd982bb31cf9a36bc930aa66a7837629c354ae53b9eacc5571b24792da090->leave($__internal_ceddd982bb31cf9a36bc930aa66a7837629c354ae53b9eacc5571b24792da090_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
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

{% block sonata_page_breadcrumb %}
    {% if breadcrumb_context is not defined %}
        {% set breadcrumb_context = 'user_index' %}
    {% endif %}
    <div class=\"row-fluid clearfix\">
        {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}
    </div>
{% endblock %}

<h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        {% block sonata_profile_menu %}
            {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}
        {% endblock %}
    </div>

    <div class=\"span10 col-lg-10\">
        {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}

        {% block sonata_profile_content '' %}
    </div>

</div>
", "SonataUserBundle:Profile:action.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Profile/action.html.twig");
    }
}
