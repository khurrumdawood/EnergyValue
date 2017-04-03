<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0fadd893243fed2b114a3ea3f11eef023d609ddb6f8480a29971ff39b87e927a extends Twig_Template
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
        $__internal_cccb2717be4439060d0872a5432eec6a68eed095776aa801c40341cf1fb8908b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccb2717be4439060d0872a5432eec6a68eed095776aa801c40341cf1fb8908b->enter($__internal_cccb2717be4439060d0872a5432eec6a68eed095776aa801c40341cf1fb8908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_cccb2717be4439060d0872a5432eec6a68eed095776aa801c40341cf1fb8908b->leave($__internal_cccb2717be4439060d0872a5432eec6a68eed095776aa801c40341cf1fb8908b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
