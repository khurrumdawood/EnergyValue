<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_81cf762a447d32e86b708bae2bac8de36ac5a1a476e83d3c094b2bc06c07fb76 extends Twig_Template
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
        $__internal_b1617f1b58252df5afe873162e0a62720b26fc3b9bc23c695eaf7197fee65131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1617f1b58252df5afe873162e0a62720b26fc3b9bc23c695eaf7197fee65131->enter($__internal_b1617f1b58252df5afe873162e0a62720b26fc3b9bc23c695eaf7197fee65131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b1617f1b58252df5afe873162e0a62720b26fc3b9bc23c695eaf7197fee65131->leave($__internal_b1617f1b58252df5afe873162e0a62720b26fc3b9bc23c695eaf7197fee65131_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
