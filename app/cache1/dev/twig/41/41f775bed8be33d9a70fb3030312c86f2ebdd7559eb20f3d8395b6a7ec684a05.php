<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_ae2d3f309c26bf130a50c8847088ae3a1121116dca216fe4c25023a2756166cc extends Twig_Template
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
        $__internal_fc465643194ab26dc2e1de63ab0b2f998a268cc57236ba2887c993826b8f7fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc465643194ab26dc2e1de63ab0b2f998a268cc57236ba2887c993826b8f7fc1->enter($__internal_fc465643194ab26dc2e1de63ab0b2f998a268cc57236ba2887c993826b8f7fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_fc465643194ab26dc2e1de63ab0b2f998a268cc57236ba2887c993826b8f7fc1->leave($__internal_fc465643194ab26dc2e1de63ab0b2f998a268cc57236ba2887c993826b8f7fc1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
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

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
