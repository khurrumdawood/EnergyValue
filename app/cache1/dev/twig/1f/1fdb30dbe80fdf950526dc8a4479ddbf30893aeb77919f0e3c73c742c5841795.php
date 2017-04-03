<?php

/* @SonataUser/Form/form_admin_fields.html.twig */
class __TwigTemplate_d128eb143e5d63bf87907f711916c457c5f70f855eaf8812255517552c64f332 extends Twig_Template
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
        $__internal_06dedde5653fcfffcafb6849a1720e427d66d89ea169c929e3934b450bf5d048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dedde5653fcfffcafb6849a1720e427d66d89ea169c929e3934b450bf5d048->enter($__internal_06dedde5653fcfffcafb6849a1720e427d66d89ea169c929e3934b450bf5d048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Form/form_admin_fields.html.twig"));

        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_06dedde5653fcfffcafb6849a1720e427d66d89ea169c929e3934b450bf5d048->leave($__internal_06dedde5653fcfffcafb6849a1720e427d66d89ea169c929e3934b450bf5d048_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_f39b54102e445bc8b3c9e30c4429a905363938f62de654df977103212ce6bca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39b54102e445bc8b3c9e30c4429a905363938f62de654df977103212ce6bca1->enter($__internal_f39b54102e445bc8b3c9e30c4429a905363938f62de654df977103212ce6bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

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
        
        $__internal_f39b54102e445bc8b3c9e30c4429a905363938f62de654df977103212ce6bca1->leave($__internal_f39b54102e445bc8b3c9e30c4429a905363938f62de654df977103212ce6bca1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Form/form_admin_fields.html.twig";
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
", "@SonataUser/Form/form_admin_fields.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
