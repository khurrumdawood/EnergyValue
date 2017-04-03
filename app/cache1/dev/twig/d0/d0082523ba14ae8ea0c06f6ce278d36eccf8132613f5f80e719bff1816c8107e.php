<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_90933ee3057fe3c74a1b06953f1abbe697d059c20c3faf56ce2f56e6eac8bf3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52cde95146461b5015a8883b5fed4d960dc6503096ade1e064cc78de0085eb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cde95146461b5015a8883b5fed4d960dc6503096ade1e064cc78de0085eb04->enter($__internal_52cde95146461b5015a8883b5fed4d960dc6503096ade1e064cc78de0085eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52cde95146461b5015a8883b5fed4d960dc6503096ade1e064cc78de0085eb04->leave($__internal_52cde95146461b5015a8883b5fed4d960dc6503096ade1e064cc78de0085eb04_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_08dbe4955805f88800867f57423ad2e75e3dc539c0ba49cf0a7c4a129945b42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dbe4955805f88800867f57423ad2e75e3dc539c0ba49cf0a7c4a129945b42e->enter($__internal_08dbe4955805f88800867f57423ad2e75e3dc539c0ba49cf0a7c4a129945b42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_08dbe4955805f88800867f57423ad2e75e3dc539c0ba49cf0a7c4a129945b42e->leave($__internal_08dbe4955805f88800867f57423ad2e75e3dc539c0ba49cf0a7c4a129945b42e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c45a0f160eba00889b4f7d806a1bb2bdf5db9ceb53e8015db6e6d47c42ec5512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45a0f160eba00889b4f7d806a1bb2bdf5db9ceb53e8015db6e6d47c42ec5512->enter($__internal_c45a0f160eba00889b4f7d806a1bb2bdf5db9ceb53e8015db6e6d47c42ec5512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_c45a0f160eba00889b4f7d806a1bb2bdf5db9ceb53e8015db6e6d47c42ec5512->leave($__internal_c45a0f160eba00889b4f7d806a1bb2bdf5db9ceb53e8015db6e6d47c42ec5512_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_edit_password\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% block fos_user_content %}
                {% include \"SonataUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            {% endblock fos_user_content %}
        </div>
    </div>
{% endblock sonata_profile_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
