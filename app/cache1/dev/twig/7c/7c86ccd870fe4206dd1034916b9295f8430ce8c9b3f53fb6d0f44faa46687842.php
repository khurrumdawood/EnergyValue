<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6cf6d506ac942b1515666ab5aed5596f264cca46527a1c368df5e2fecb4b8ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d7854c9f65aff1334b7e932349ba7cef796132ec720a7ae27d4f2dc2d85619f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7854c9f65aff1334b7e932349ba7cef796132ec720a7ae27d4f2dc2d85619f->enter($__internal_7d7854c9f65aff1334b7e932349ba7cef796132ec720a7ae27d4f2dc2d85619f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d7854c9f65aff1334b7e932349ba7cef796132ec720a7ae27d4f2dc2d85619f->leave($__internal_7d7854c9f65aff1334b7e932349ba7cef796132ec720a7ae27d4f2dc2d85619f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_418e3017db5a32e081bfd16d54f2ecc241b09a9942538b757b82b92d0df53bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418e3017db5a32e081bfd16d54f2ecc241b09a9942538b757b82b92d0df53bc6->enter($__internal_418e3017db5a32e081bfd16d54f2ecc241b09a9942538b757b82b92d0df53bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_418e3017db5a32e081bfd16d54f2ecc241b09a9942538b757b82b92d0df53bc6->leave($__internal_418e3017db5a32e081bfd16d54f2ecc241b09a9942538b757b82b92d0df53bc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
