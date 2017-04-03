<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d241418d5e716ab300d07e53401ef8e3118eea6aba75ef666315692e001ded65 extends Twig_Template
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
        $__internal_282e386bf8cc0f916ce2ee409e1df764a42d38e9aace7d7f90b8286dd7061b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282e386bf8cc0f916ce2ee409e1df764a42d38e9aace7d7f90b8286dd7061b74->enter($__internal_282e386bf8cc0f916ce2ee409e1df764a42d38e9aace7d7f90b8286dd7061b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_282e386bf8cc0f916ce2ee409e1df764a42d38e9aace7d7f90b8286dd7061b74->leave($__internal_282e386bf8cc0f916ce2ee409e1df764a42d38e9aace7d7f90b8286dd7061b74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
