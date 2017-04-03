<?php

/* VaultBundle:Sonata:base_edit.html.twig */
class __TwigTemplate_4de6fc993e4afe744e2e9175d5b336ea31210fda8639b0d8394dc10b4b23a405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "VaultBundle:Sonata:base_edit.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df08274469812f64d111a4b0e1989fa00c8008a22d97e4d14ea2521863523ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df08274469812f64d111a4b0e1989fa00c8008a22d97e4d14ea2521863523ee3->enter($__internal_df08274469812f64d111a4b0e1989fa00c8008a22d97e4d14ea2521863523ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VaultBundle:Sonata:base_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df08274469812f64d111a4b0e1989fa00c8008a22d97e4d14ea2521863523ee3->leave($__internal_df08274469812f64d111a4b0e1989fa00c8008a22d97e4d14ea2521863523ee3_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de2643e8278dc6a5cc25b6fe2e48d00dd21fb91522da4f8004ffc344e00fe16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2643e8278dc6a5cc25b6fe2e48d00dd21fb91522da4f8004ffc344e00fe16f->enter($__internal_de2643e8278dc6a5cc25b6fe2e48d00dd21fb91522da4f8004ffc344e00fe16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('select.select_contract_edit').prop('disabled', true);
        \$(document).ready(function () {
            \$(\".select_commidity\").change(function () {

                var code = \$(this).val();
                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contract_dropdown");
        echo "\",
                    data: {'code': code},
                    cache: false,
                    success: function (html)
                    {
                        \$(\".select_contract span#select2-chosen-2\").val(\"\");
                        \$(\"select.select_contract\").html(html);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_de2643e8278dc6a5cc25b6fe2e48d00dd21fb91522da4f8004ffc344e00fe16f->leave($__internal_de2643e8278dc6a5cc25b6fe2e48d00dd21fb91522da4f8004ffc344e00fe16f_prof);

    }

    public function getTemplateName()
    {
        return "VaultBundle:Sonata:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$('select.select_contract_edit').prop('disabled', true);
        \$(document).ready(function () {
            \$(\".select_commidity\").change(function () {

                var code = \$(this).val();
                \$.ajax({
                    type: \"POST\",
                    url: \"{{ path('contract_dropdown') }}\",
                    data: {'code': code},
                    cache: false,
                    success: function (html)
                    {
                        \$(\".select_contract span#select2-chosen-2\").val(\"\");
                        \$(\"select.select_contract\").html(html);
                    }
                });
            });
        });
    </script>
{% endblock %}", "VaultBundle:Sonata:base_edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle/Resources/views/Sonata/base_edit.html.twig");
    }
}
