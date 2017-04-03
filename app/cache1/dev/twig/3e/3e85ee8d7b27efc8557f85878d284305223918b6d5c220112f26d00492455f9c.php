<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5140e15390a860ade2c1d428db81ae74fdba9e196ec58507423d3a31a2251d7d extends Twig_Template
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
        $__internal_e3dc59b3808a947437f8802e6b0ce8803d87b3e1307173ab68cfeb34d8b55424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3dc59b3808a947437f8802e6b0ce8803d87b3e1307173ab68cfeb34d8b55424->enter($__internal_e3dc59b3808a947437f8802e6b0ce8803d87b3e1307173ab68cfeb34d8b55424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e3dc59b3808a947437f8802e6b0ce8803d87b3e1307173ab68cfeb34d8b55424->leave($__internal_e3dc59b3808a947437f8802e6b0ce8803d87b3e1307173ab68cfeb34d8b55424_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
