<?php

/* SonataUserBundle:Profile:edit_authentication.html.twig */
class __TwigTemplate_447acec887884b0622fafe0fc79fc0d9b5124dea4aee7ad41d6252f9f247e6d5 extends Twig_Template
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
        $__internal_b00f0c8a05b5dfba99bf7a597a4b82a8d11d2b0fe250ed3830d265b258a462d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00f0c8a05b5dfba99bf7a597a4b82a8d11d2b0fe250ed3830d265b258a462d7->enter($__internal_b00f0c8a05b5dfba99bf7a597a4b82a8d11d2b0fe250ed3830d265b258a462d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_authentication.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user authentication edition template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
<div class=\"row\">
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 21
        $this->loadTemplate("SonataUserBundle:Profile:edit_authentication_content.html.twig", "SonataUserBundle:Profile:edit_authentication.html.twig", 21)->display($context);
        // line 22
        echo "            </div>
        </div>
    </div>
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sonata_change_password_link", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_change_password"), array());
        // line 32
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_b00f0c8a05b5dfba99bf7a597a4b82a8d11d2b0fe250ed3830d265b258a462d7->leave($__internal_b00f0c8a05b5dfba99bf7a597a4b82a8d11d2b0fe250ed3830d265b258a462d7_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 32,  58 => 31,  52 => 28,  44 => 22,  42 => 21,  36 => 18,  29 => 13,  25 => 12,  22 => 11,);
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

{% sonata_template_box 'This is the user authentication edition template. Feel free to override it.' %}

<div class=\"row\">
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">{{ 'title_user_edit_authentication'|trans({}, 'SonataUserBundle') }}</h3>
            </div>
            <div class=\"panel-body\">
                {% include \"SonataUserBundle:Profile:edit_authentication_content.html.twig\" %}
            </div>
        </div>
    </div>
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">{{ 'sonata_change_password_link'|trans({}, 'SonataUserBundle') }}</h3>
            </div>
            <div class=\"panel-body\">
                {% render url(\"sonata_user_change_password\") %}
            </div>
        </div>
    </div>
</div>
", "SonataUserBundle:Profile:edit_authentication.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Profile/edit_authentication.html.twig");
    }
}
