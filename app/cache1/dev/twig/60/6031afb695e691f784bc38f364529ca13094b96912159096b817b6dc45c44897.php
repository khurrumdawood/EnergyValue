<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5d50afa0117902f130bfe20382b6013cd861a5b29f00af78d7b186d250825c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d923920fc2a229eda8d5fe4e472c70eb8e3eb1814180f196d84242b4f7373e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d923920fc2a229eda8d5fe4e472c70eb8e3eb1814180f196d84242b4f7373e35->enter($__internal_d923920fc2a229eda8d5fe4e472c70eb8e3eb1814180f196d84242b4f7373e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_d923920fc2a229eda8d5fe4e472c70eb8e3eb1814180f196d84242b4f7373e35->leave($__internal_d923920fc2a229eda8d5fe4e472c70eb8e3eb1814180f196d84242b4f7373e35_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1aae4af692a6b41c88f23cd83294a2711a8c3955c949d12d7406e9fa4bf239da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aae4af692a6b41c88f23cd83294a2711a8c3955c949d12d7406e9fa4bf239da->enter($__internal_1aae4af692a6b41c88f23cd83294a2711a8c3955c949d12d7406e9fa4bf239da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_1aae4af692a6b41c88f23cd83294a2711a8c3955c949d12d7406e9fa4bf239da->leave($__internal_1aae4af692a6b41c88f23cd83294a2711a8c3955c949d12d7406e9fa4bf239da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>", "FOSUserBundle::layout.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle/Resources/views/layout.html.twig");
    }
}
