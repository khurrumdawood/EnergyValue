<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_62d4c1ceb2eb4b3fc7de67071bac2c8875ae7028b8ff6e138f787419de542f78 extends Twig_Template
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
        $__internal_42fe25e56ccd16fa2b09b472d143dd50959a0ee4826d3df4463e4ff3ae87bccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fe25e56ccd16fa2b09b472d143dd50959a0ee4826d3df4463e4ff3ae87bccd->enter($__internal_42fe25e56ccd16fa2b09b472d143dd50959a0ee4826d3df4463e4ff3ae87bccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_42fe25e56ccd16fa2b09b472d143dd50959a0ee4826d3df4463e4ff3ae87bccd->leave($__internal_42fe25e56ccd16fa2b09b472d143dd50959a0ee4826d3df4463e4ff3ae87bccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
