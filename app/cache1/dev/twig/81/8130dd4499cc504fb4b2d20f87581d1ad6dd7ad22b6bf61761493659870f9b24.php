<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7f43f2e5c1f7f189aaaabe6082eeb6a272197055b5b348fd40ce6bd4f6e64950 extends Twig_Template
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
        $__internal_9b0cce0c1a4a9100a84c9f595a9cd26c1974134bdb72b11befac8635fb24daf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0cce0c1a4a9100a84c9f595a9cd26c1974134bdb72b11befac8635fb24daf0->enter($__internal_9b0cce0c1a4a9100a84c9f595a9cd26c1974134bdb72b11befac8635fb24daf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9b0cce0c1a4a9100a84c9f595a9cd26c1974134bdb72b11befac8635fb24daf0->leave($__internal_9b0cce0c1a4a9100a84c9f595a9cd26c1974134bdb72b11befac8635fb24daf0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
