<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_361feb8097607a8b7767e703c1f5ffaa0242c48c117bcbb473f4646b89974594 extends Twig_Template
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
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5571c0380c7e1e08ba124c22e5b451124dca0a9f10b9553c93082afaf4cdb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5571c0380c7e1e08ba124c22e5b451124dca0a9f10b9553c93082afaf4cdb99->enter($__internal_d5571c0380c7e1e08ba124c22e5b451124dca0a9f10b9553c93082afaf4cdb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5571c0380c7e1e08ba124c22e5b451124dca0a9f10b9553c93082afaf4cdb99->leave($__internal_d5571c0380c7e1e08ba124c22e5b451124dca0a9f10b9553c93082afaf4cdb99_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_323f7c307b07647453873234def05d0e823e22bbf1a363619d1e12889e6ec50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323f7c307b07647453873234def05d0e823e22bbf1a363619d1e12889e6ec50c->enter($__internal_323f7c307b07647453873234def05d0e823e22bbf1a363619d1e12889e6ec50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_323f7c307b07647453873234def05d0e823e22bbf1a363619d1e12889e6ec50c->leave($__internal_323f7c307b07647453873234def05d0e823e22bbf1a363619d1e12889e6ec50c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  70 => 23,  62 => 20,  54 => 19,  51 => 18,  46 => 17,  39 => 14,  33 => 13,  18 => 11,);
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
    <h3 class=\"sonata-feed-title\">{{ settings.title }}</h3>

    <div class=\"sonata-feeds-container\">
        {% for feed in feeds %}
            <div>
                <strong><a href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a></strong>
                <div>{{ feed.description|raw }}</div>
            </div>
        {% else %}
                No feeds available.
        {% endfor %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_core_rss.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
