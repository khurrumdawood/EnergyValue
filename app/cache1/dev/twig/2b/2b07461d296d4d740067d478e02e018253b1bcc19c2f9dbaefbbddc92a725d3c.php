<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1071bb76038bf1ca056f1e6eb3ccfacc252ef661bd951db44dfa27b60038953a extends Twig_Template
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
        $__internal_5960ea9eb935028fcd5a2ee1c26269837b54215de621a3d7a2491f64cb8e796f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5960ea9eb935028fcd5a2ee1c26269837b54215de621a3d7a2491f64cb8e796f->enter($__internal_5960ea9eb935028fcd5a2ee1c26269837b54215de621a3d7a2491f64cb8e796f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5960ea9eb935028fcd5a2ee1c26269837b54215de621a3d7a2491f64cb8e796f->leave($__internal_5960ea9eb935028fcd5a2ee1c26269837b54215de621a3d7a2491f64cb8e796f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
