<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c341f146b7b260fbfade926601e5da609c0acee06e756ec306d40e5a5e79f45f extends Twig_Template
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
        $__internal_9ebbfd2c24c91ee58f6f6e3925b52b24489d14aceb69272bb0a949bda725639b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebbfd2c24c91ee58f6f6e3925b52b24489d14aceb69272bb0a949bda725639b->enter($__internal_9ebbfd2c24c91ee58f6f6e3925b52b24489d14aceb69272bb0a949bda725639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9ebbfd2c24c91ee58f6f6e3925b52b24489d14aceb69272bb0a949bda725639b->leave($__internal_9ebbfd2c24c91ee58f6f6e3925b52b24489d14aceb69272bb0a949bda725639b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
