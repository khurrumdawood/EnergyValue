<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_24cda4abd3e71153cd700159b45eff98e0f9f3ddb7a71af9fd3923fd6af7435e extends Twig_Template
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
        $__internal_7ceac0ded75c519acad4f2c981b5bda8a3d4f5aba3588fbf0f9d5f722273e616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ceac0ded75c519acad4f2c981b5bda8a3d4f5aba3588fbf0f9d5f722273e616->enter($__internal_7ceac0ded75c519acad4f2c981b5bda8a3d4f5aba3588fbf0f9d5f722273e616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_7ceac0ded75c519acad4f2c981b5bda8a3d4f5aba3588fbf0f9d5f722273e616->leave($__internal_7ceac0ded75c519acad4f2c981b5bda8a3d4f5aba3588fbf0f9d5f722273e616_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_profile_edit\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
", "FOSUserBundle:Profile:edit_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
