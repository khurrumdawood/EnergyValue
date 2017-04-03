<?php

/* @Vault/Default/index.html.twig */
class __TwigTemplate_197a2f12eb9d24fe82594354baf030206edfa6360d1282d1e2dc3c41e572a145 extends Twig_Template
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
        $__internal_2d75dfe904a4b5e4018dbf194816ceb49dfcfb8d250e75d0153c30077d0ec4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d75dfe904a4b5e4018dbf194816ceb49dfcfb8d250e75d0153c30077d0ec4f0->enter($__internal_2d75dfe904a4b5e4018dbf194816ceb49dfcfb8d250e75d0153c30077d0ec4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Vault/Default/index.html.twig"));

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
        
        $__internal_2d75dfe904a4b5e4018dbf194816ceb49dfcfb8d250e75d0153c30077d0ec4f0->leave($__internal_2d75dfe904a4b5e4018dbf194816ceb49dfcfb8d250e75d0153c30077d0ec4f0_prof);

    }

    public function getTemplateName()
    {
        return "@Vault/Default/index.html.twig";
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
{% endif %}", "@Vault/Default/index.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
