<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d61e3e5805b55bdc0c980305ab43d4d6252f7501e6c623cf5468c40c44dfd9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:Profile:show.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73fb20729dffc8110d29e1bb918d417484c91841a2b8bcdb3895acd0d326bdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fb20729dffc8110d29e1bb918d417484c91841a2b8bcdb3895acd0d326bdfc->enter($__internal_73fb20729dffc8110d29e1bb918d417484c91841a2b8bcdb3895acd0d326bdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fb20729dffc8110d29e1bb918d417484c91841a2b8bcdb3895acd0d326bdfc->leave($__internal_73fb20729dffc8110d29e1bb918d417484c91841a2b8bcdb3895acd0d326bdfc_prof);

    }

    // line 14
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_ccab9df17bab565aa3c4226fac8e4de0d625a4fab57c5b6e6fa9671b1b288edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccab9df17bab565aa3c4226fac8e4de0d625a4fab57c5b6e6fa9671b1b288edc->enter($__internal_ccab9df17bab565aa3c4226fac8e4de0d625a4fab57c5b6e6fa9671b1b288edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 15
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user profile template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 16
        echo "
    <div class=\"row row-fluid\">
        ";
        // line 18
        $context["has_center"] = false;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                // line 21
                echo "                ";
                $context["has_center"] = true;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"";
        // line 25
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "left")) {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

        ";
        // line 33
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 34
            echo "            <div class=\"span4 col-lg-4\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                    // line 37
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </div>
        ";
        }
        // line 42
        echo "
        <div class=\"";
        // line 43
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "right")) {
                // line 46
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
        
        $__internal_ccab9df17bab565aa3c4226fac8e4de0d625a4fab57c5b6e6fa9671b1b288edc->leave($__internal_ccab9df17bab565aa3c4226fac8e4de0d625a4fab57c5b6e6fa9671b1b288edc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  157 => 48,  151 => 46,  148 => 45,  144 => 44,  136 => 43,  133 => 42,  129 => 40,  123 => 39,  117 => 37,  114 => 36,  110 => 35,  107 => 34,  105 => 33,  101 => 31,  95 => 30,  89 => 28,  86 => 27,  82 => 26,  74 => 25,  71 => 24,  65 => 23,  62 => 22,  59 => 21,  56 => 20,  51 => 19,  49 => 18,  45 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% block sonata_profile_content %}
    {% sonata_template_box 'This is the user profile template. Feel free to override it.' %}

    <div class=\"row row-fluid\">
        {% set has_center = false %}
        {% for block in blocks %}
            {% if block.position == 'center' %}
                {% set has_center = true %}
            {% endif %}
        {% endfor %}

        <div class=\"{% if has_center %}span4 col-lg-4{% else %}span6 col-lg-6{% endif %}\">
            {% for block in blocks %}
                {% if block.position == 'left' %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>

        {% if has_center %}
            <div class=\"span4 col-lg-4\">
                {% for block in blocks %}
                    {% if block.position == 'center' %}
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    {% endif %}
                {% endfor %}
            </div>
        {% endif %}

        <div class=\"{% if has_center %}span4 col-lg-4{% else %}span6 col-lg-6{% endif %}\">
            {% for block in blocks %}
                {% if block.position == 'right' %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}", "FOSUserBundle:Profile:show.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
