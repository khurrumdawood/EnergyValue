<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_540774eda2ac056357f4c667df0fd56129d484493e6eb32ee5d3bd206d7e38ff extends Twig_Template
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
        $__internal_1f45d72ffd9712b865d0f16f4f967f31a40bfd54b22329400ea2dd3c92801209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f45d72ffd9712b865d0f16f4f967f31a40bfd54b22329400ea2dd3c92801209->enter($__internal_1f45d72ffd9712b865d0f16f4f967f31a40bfd54b22329400ea2dd3c92801209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_1f45d72ffd9712b865d0f16f4f967f31a40bfd54b22329400ea2dd3c92801209->leave($__internal_1f45d72ffd9712b865d0f16f4f967f31a40bfd54b22329400ea2dd3c92801209_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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
        return new Twig_Source("<form action=\"{{ path('fos_user_group_new') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_group_new\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}\" />
    </div>
</form>
", "FOSUserBundle:Group:new_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/new_content.html.twig");
    }
}
