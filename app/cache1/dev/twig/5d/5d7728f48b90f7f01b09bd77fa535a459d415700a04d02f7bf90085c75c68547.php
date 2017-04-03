<?php

/* SonataUserBundle:Block:account.html.twig */
class __TwigTemplate_ae2bca09bf17dc15c1c3bebc10a889bff63131deb37cbdf7e962946a50bd46ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataUserBundle:Block:account.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72499bfb446c636a0ab4e3dccbc30d20aaf5d66eef33d24cf2aec2ea2a6b12fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72499bfb446c636a0ab4e3dccbc30d20aaf5d66eef33d24cf2aec2ea2a6b12fe->enter($__internal_72499bfb446c636a0ab4e3dccbc30d20aaf5d66eef33d24cf2aec2ea2a6b12fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Block:account.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72499bfb446c636a0ab4e3dccbc30d20aaf5d66eef33d24cf2aec2ea2a6b12fe->leave($__internal_72499bfb446c636a0ab4e3dccbc30d20aaf5d66eef33d24cf2aec2ea2a6b12fe_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b5be09fa958e31e499ddd677d704d7ad49edd1eef2178bc0dfc5b0919006ba6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5be09fa958e31e499ddd677d704d7ad49edd1eef2178bc0dfc5b0919006ba6e->enter($__internal_b5be09fa958e31e499ddd677d704d7ad49edd1eef2178bc0dfc5b0919006ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div style=\"display:inline;\">
        ";
        // line 16
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_b5be09fa958e31e499ddd677d704d7ad49edd1eef2178bc0dfc5b0919006ba6e->leave($__internal_b5be09fa958e31e499ddd677d704d7ad49edd1eef2178bc0dfc5b0919006ba6e_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Block:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  58 => 20,  51 => 18,  44 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div style=\"display:inline;\">
        {% if user %}
            <a href=\"{{ path('sonata_user_profile_show') }}\">{{ user.username }}</a> |
            <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'link_logout' | trans({}, \"SonataUserBundle\") }}</a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'link_login'|trans({}, 'SonataUserBundle') }} / {{ 'link_register'|trans({}, 'SonataUserBundle') }}</a>
        {% endif %}
    </div>
{% endblock %}
", "SonataUserBundle:Block:account.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Block/account.html.twig");
    }
}
