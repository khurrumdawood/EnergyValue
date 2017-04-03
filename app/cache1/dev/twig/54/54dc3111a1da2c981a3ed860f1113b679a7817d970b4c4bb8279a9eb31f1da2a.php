<?php

/* @Vault/Sonata/base_edit.html.twig */
class __TwigTemplate_0a83b5109202f8f5e7e3f80ceb61fd1cb6ff1786d0bac492823f7f0a03ec4dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@Vault/Sonata/base_edit.html.twig", 1);
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
        $__internal_cdf9ed59543231aad4e392a36d561c27d371b8c2b81a7452fb6cd28675f4c2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf9ed59543231aad4e392a36d561c27d371b8c2b81a7452fb6cd28675f4c2c3->enter($__internal_cdf9ed59543231aad4e392a36d561c27d371b8c2b81a7452fb6cd28675f4c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Vault/Sonata/base_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf9ed59543231aad4e392a36d561c27d371b8c2b81a7452fb6cd28675f4c2c3->leave($__internal_cdf9ed59543231aad4e392a36d561c27d371b8c2b81a7452fb6cd28675f4c2c3_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73ff98037061abb3b54f846fa19afbb6b4107450b04edd2a06334e804b7be41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ff98037061abb3b54f846fa19afbb6b4107450b04edd2a06334e804b7be41b->enter($__internal_73ff98037061abb3b54f846fa19afbb6b4107450b04edd2a06334e804b7be41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_73ff98037061abb3b54f846fa19afbb6b4107450b04edd2a06334e804b7be41b->leave($__internal_73ff98037061abb3b54f846fa19afbb6b4107450b04edd2a06334e804b7be41b_prof);

    }

    public function getTemplateName()
    {
        return "@Vault/Sonata/base_edit.html.twig";
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
{% endblock %}", "@Vault/Sonata/base_edit.html.twig", "D:\\xampp\\htdocs\\energyvalue\\src\\VaultBundle\\Resources\\views\\Sonata\\base_edit.html.twig");
    }
}
