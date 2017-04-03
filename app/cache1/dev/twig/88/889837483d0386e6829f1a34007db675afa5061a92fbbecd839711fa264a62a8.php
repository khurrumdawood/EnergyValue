<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c820b0b685e45970fe0dbe12fc33fc06e253651a007881c4e04980b3be09f6e7 extends Twig_Template
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
        $__internal_155ff0c9489c6aae92116edcd2b6efb94e49f2809e20d437cc59d6fc647d006f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155ff0c9489c6aae92116edcd2b6efb94e49f2809e20d437cc59d6fc647d006f->enter($__internal_155ff0c9489c6aae92116edcd2b6efb94e49f2809e20d437cc59d6fc647d006f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_155ff0c9489c6aae92116edcd2b6efb94e49f2809e20d437cc59d6fc647d006f->leave($__internal_155ff0c9489c6aae92116edcd2b6efb94e49f2809e20d437cc59d6fc647d006f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
