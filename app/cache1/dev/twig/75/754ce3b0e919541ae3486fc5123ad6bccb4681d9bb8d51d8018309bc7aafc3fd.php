<?php

/* VaultBundle:Default:index.html.twig */
class __TwigTemplate_9311e56cb22a1fe7222de8df47ec94f5d48c5d27cb7932b938061fe1fd11aca8 extends Twig_Template
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
        $__internal_1584c4317ca78951a8d772557ca1e38357b5bc9405ff6235cbab810e442794de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1584c4317ca78951a8d772557ca1e38357b5bc9405ff6235cbab810e442794de->enter($__internal_1584c4317ca78951a8d772557ca1e38357b5bc9405ff6235cbab810e442794de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VaultBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!



 ";
        // line 5
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 6
            echo "   <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
 ";
        } else {
            // line 8
            echo "    # user is not logged in
 ";
        }
        // line 10
        echo "

";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF")) {
            // line 13
            echo "    ROLE_STAFF
";
        }
        // line 15
        echo "
";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "    ROLE_ADMIN
";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 19
            echo "    ROLE_USER
";
        } else {
            // line 21
            echo "    Anonymous
";
        }
        
        $__internal_1584c4317ca78951a8d772557ca1e38357b5bc9405ff6235cbab810e442794de->leave($__internal_1584c4317ca78951a8d772557ca1e38357b5bc9405ff6235cbab810e442794de_prof);

    }

    public function getTemplateName()
    {
        return "VaultBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  59 => 19,  55 => 17,  53 => 16,  50 => 15,  46 => 13,  44 => 12,  40 => 10,  36 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!



 {% if app.user %}
   <a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
 {% else %}
    # user is not logged in
 {% endif %}


{% if is_granted('ROLE_STAFF') %}
    ROLE_STAFF
{% endif %}

{% if is_granted('ROLE_ADMIN') %}
    ROLE_ADMIN
{% elseif is_granted('ROLE_USER') %}
    ROLE_USER
{% else %}
    Anonymous
{% endif %}", "VaultBundle:Default:index.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle/Resources/views/Default/index.html.twig");
    }
}
