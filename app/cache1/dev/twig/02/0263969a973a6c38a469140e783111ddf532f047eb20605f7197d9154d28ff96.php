<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig */
class __TwigTemplate_fd7a69ad2181b1cabe497cf6921794899149591cb88fc7c2aab8990d9869527b extends Twig_Template
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
        $__internal_23eaf0bca8dea77922173a2bdbb438f64c9d27f407740d7604394c3fdc89997f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23eaf0bca8dea77922173a2bdbb438f64c9d27f407740d7604394c3fdc89997f->enter($__internal_23eaf0bca8dea77922173a2bdbb438f64c9d27f407740d7604394c3fdc89997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_23eaf0bca8dea77922173a2bdbb438f64c9d27f407740d7604394c3fdc89997f->leave($__internal_23eaf0bca8dea77922173a2bdbb438f64c9d27f407740d7604394c3fdc89997f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_modal.html.twig");
    }
}
