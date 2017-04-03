<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_994ebab59754745039084e24fb0a6b7764a7b37eab68e8bd2b4428c79908e18d extends Twig_Template
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
        $__internal_c8a706bff3edc3f2bd57ff15c6e3618e96b074116c4f75547e3306eabd22305d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a706bff3edc3f2bd57ff15c6e3618e96b074116c4f75547e3306eabd22305d->enter($__internal_c8a706bff3edc3f2bd57ff15c6e3618e96b074116c4f75547e3306eabd22305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c8a706bff3edc3f2bd57ff15c6e3618e96b074116c4f75547e3306eabd22305d->leave($__internal_c8a706bff3edc3f2bd57ff15c6e3618e96b074116c4f75547e3306eabd22305d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
