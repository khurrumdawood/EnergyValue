<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_e4bda5eb77498d4782366f3c194ec1b72dbef0e841f4f3b306318e4bf9fe119b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25124c5265e1af18927a098fb393b0a789238e81cabb8b1a8b7c5af428b05e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25124c5265e1af18927a098fb393b0a789238e81cabb8b1a8b7c5af428b05e57->enter($__internal_25124c5265e1af18927a098fb393b0a789238e81cabb8b1a8b7c5af428b05e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_25124c5265e1af18927a098fb393b0a789238e81cabb8b1a8b7c5af428b05e57->leave($__internal_25124c5265e1af18927a098fb393b0a789238e81cabb8b1a8b7c5af428b05e57_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_c0c7a12196e6ecb3f7d75cc5d0beb47c68afb290b4223602570c6639f3b001f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c7a12196e6ecb3f7d75cc5d0beb47c68afb290b4223602570c6639f3b001f7->enter($__internal_c0c7a12196e6ecb3f7d75cc5d0beb47c68afb290b4223602570c6639f3b001f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c0c7a12196e6ecb3f7d75cc5d0beb47c68afb290b4223602570c6639f3b001f7->leave($__internal_c0c7a12196e6ecb3f7d75cc5d0beb47c68afb290b4223602570c6639f3b001f7_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sonata_security_roles_widget %}
{% spaceless %}
    <div class=\"editable\">
        <h4>{{ 'field.label_roles_editable'|trans({}, \"SonataUserBundle\") }}</h4>
        {{ block('choice_widget') }}
    </div>
    {% if read_only_choices|length > 0 %}
    <div class=\"readonly\">
        <h4>{{ 'field.label_roles_readonly'|trans({}, \"SonataUserBundle\") }}</h4>
        <ul>
        {% for choice in read_only_choices %}
            <li>{{ choice }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock sonata_security_roles_widget %}
", "SonataUserBundle:Form:form_admin_fields.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
