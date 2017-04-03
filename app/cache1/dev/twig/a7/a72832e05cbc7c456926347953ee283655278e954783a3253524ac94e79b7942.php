<?php

/* @SonataBlock/Block/block_exception_debug.html.twig */
class __TwigTemplate_0339392344d134ffeec8487dbac1e4fb86fa9968456653e83c5624a1948c6538 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2a0662646c539c71a2fa139987812069318dbf35100e86aa9b247cb3829aa7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a0662646c539c71a2fa139987812069318dbf35100e86aa9b247cb3829aa7e->enter($__internal_d2a0662646c539c71a2fa139987812069318dbf35100e86aa9b247cb3829aa7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a0662646c539c71a2fa139987812069318dbf35100e86aa9b247cb3829aa7e->leave($__internal_d2a0662646c539c71a2fa139987812069318dbf35100e86aa9b247cb3829aa7e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_81d4c0e8f08678657c501ad1791988aa7dcbe07bc0971c5cf376b5d6a2770d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d4c0e8f08678657c501ad1791988aa7dcbe07bc0971c5cf376b5d6a2770d79->enter($__internal_81d4c0e8f08678657c501ad1791988aa7dcbe07bc0971c5cf376b5d6a2770d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "@SonataBlock/Block/block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_81d4c0e8f08678657c501ad1791988aa7dcbe07bc0971c5cf376b5d6a2770d79->leave($__internal_81d4c0e8f08678657c501ad1791988aa7dcbe07bc0971c5cf376b5d6a2770d79_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  55 => 20,  50 => 19,  47 => 18,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "@SonataBlock/Block/block_exception_debug.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception_debug.html.twig");
    }
}
