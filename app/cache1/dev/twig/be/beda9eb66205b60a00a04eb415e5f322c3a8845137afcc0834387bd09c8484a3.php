<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_09df68389e5e78975a9a623fd8f2bae5d54c12b6381493d4cdeeb0961c89156b extends Twig_Template
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
        $__internal_cc83915282d1b0c14bad128531c419fd4c9c29a8e89190b2ce269ff508063576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc83915282d1b0c14bad128531c419fd4c9c29a8e89190b2ce269ff508063576->enter($__internal_cc83915282d1b0c14bad128531c419fd4c9c29a8e89190b2ce269ff508063576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cc83915282d1b0c14bad128531c419fd4c9c29a8e89190b2ce269ff508063576->leave($__internal_cc83915282d1b0c14bad128531c419fd4c9c29a8e89190b2ce269ff508063576_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
