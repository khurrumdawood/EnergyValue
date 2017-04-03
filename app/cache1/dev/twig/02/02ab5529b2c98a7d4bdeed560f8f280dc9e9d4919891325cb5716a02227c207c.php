<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_341cb2af7990a29b22bdc8a19fb0855a7a020479d21d46fe9ea1e76b220a5b5e extends Twig_Template
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
        $__internal_231ce6403c20a03766d25740ea6c2b534f5686592b45622b08d531641f706e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231ce6403c20a03766d25740ea6c2b534f5686592b45622b08d531641f706e43->enter($__internal_231ce6403c20a03766d25740ea6c2b534f5686592b45622b08d531641f706e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_231ce6403c20a03766d25740ea6c2b534f5686592b45622b08d531641f706e43->leave($__internal_231ce6403c20a03766d25740ea6c2b534f5686592b45622b08d531641f706e43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
