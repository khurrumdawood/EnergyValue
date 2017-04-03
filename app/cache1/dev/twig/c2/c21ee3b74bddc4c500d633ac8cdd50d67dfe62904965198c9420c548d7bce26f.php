<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_3cd84281698f986fef2771eeabc9b91da108478ca43cd5f54835f4adae1448d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd4ff4d0a4daf3f693811d8e49fc783ab40b0119451b273dd564c0b766665449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4ff4d0a4daf3f693811d8e49fc783ab40b0119451b273dd564c0b766665449->enter($__internal_fd4ff4d0a4daf3f693811d8e49fc783ab40b0119451b273dd564c0b766665449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4ff4d0a4daf3f693811d8e49fc783ab40b0119451b273dd564c0b766665449->leave($__internal_fd4ff4d0a4daf3f693811d8e49fc783ab40b0119451b273dd564c0b766665449_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
