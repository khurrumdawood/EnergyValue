<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_d3f7cbbc189963e5a11f45a02a662cad2f8f13c5a07096ad5b3fcd53b6adcc45 extends Twig_Template
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
        $__internal_3b7c732c52d7eda1712c96a084b09a8f632ca34f5f52a5f93f6ab99852ee2991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7c732c52d7eda1712c96a084b09a8f632ca34f5f52a5f93f6ab99852ee2991->enter($__internal_3b7c732c52d7eda1712c96a084b09a8f632ca34f5f52a5f93f6ab99852ee2991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupname" => (isset($context["groupname"]) ? $context["groupname"] : $this->getContext($context, "groupname")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_3b7c732c52d7eda1712c96a084b09a8f632ca34f5f52a5f93f6ab99852ee2991->leave($__internal_3b7c732c52d7eda1712c96a084b09a8f632ca34f5f52a5f93f6ab99852ee2991_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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
        return new Twig_Source("<form action=\"{{ path('fos_user_group_edit', {'groupname': groupname} ) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_group_edit\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans([], 'FOSUserBundle') }}\" />
    </div>
</form>
", "FOSUserBundle:Group:edit_content.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/edit_content.html.twig");
    }
}
