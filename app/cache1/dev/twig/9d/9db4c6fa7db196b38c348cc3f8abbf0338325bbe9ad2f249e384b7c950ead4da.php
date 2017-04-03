<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0f97a5916e4941634f2e076ff1cef473c31715689ab64878492a10cfd3580834 extends Twig_Template
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
        $__internal_a6fd815ebc34e4d986f025bf1b4a24e6da724ace673c69f1a3c69d9a8af1a031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fd815ebc34e4d986f025bf1b4a24e6da724ace673c69f1a3c69d9a8af1a031->enter($__internal_a6fd815ebc34e4d986f025bf1b4a24e6da724ace673c69f1a3c69d9a8af1a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a6fd815ebc34e4d986f025bf1b4a24e6da724ace673c69f1a3c69d9a8af1a031->leave($__internal_a6fd815ebc34e4d986f025bf1b4a24e6da724ace673c69f1a3c69d9a8af1a031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
