<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_265dbf8c9df1b987608ee9e6d283c6a3dc69292176765555aef58b95c46a03f8 extends Twig_Template
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
        $__internal_8bea87f84301121ad340dc01f8587a526efb6b4232fc7e343fa6a758aeaa87e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bea87f84301121ad340dc01f8587a526efb6b4232fc7e343fa6a758aeaa87e3->enter($__internal_8bea87f84301121ad340dc01f8587a526efb6b4232fc7e343fa6a758aeaa87e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8bea87f84301121ad340dc01f8587a526efb6b4232fc7e343fa6a758aeaa87e3->leave($__internal_8bea87f84301121ad340dc01f8587a526efb6b4232fc7e343fa6a758aeaa87e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
