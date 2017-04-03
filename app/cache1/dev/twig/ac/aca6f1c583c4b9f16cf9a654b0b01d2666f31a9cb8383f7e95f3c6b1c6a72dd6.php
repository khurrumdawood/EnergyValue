<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4479250f583269dab8ca57d0fcf51414efcf477008891b0a54efddbfe70e2685 extends Twig_Template
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
        $__internal_59536f305169cfde49e752af7f6c5ed7f50bcd38637bc538554181323baeab88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59536f305169cfde49e752af7f6c5ed7f50bcd38637bc538554181323baeab88->enter($__internal_59536f305169cfde49e752af7f6c5ed7f50bcd38637bc538554181323baeab88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_59536f305169cfde49e752af7f6c5ed7f50bcd38637bc538554181323baeab88->leave($__internal_59536f305169cfde49e752af7f6c5ed7f50bcd38637bc538554181323baeab88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
