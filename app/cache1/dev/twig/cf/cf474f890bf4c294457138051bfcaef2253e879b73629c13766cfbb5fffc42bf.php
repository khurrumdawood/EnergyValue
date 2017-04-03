<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0ebab4c212d01eac9719ee89c048abfb656390988af4f7e00bbbb1ab3bbd0e9c extends Twig_Template
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
        $__internal_c16028e166e9adcc2c5bddcd50d9fd63cf96c9251f1554fd84527d6774eecf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16028e166e9adcc2c5bddcd50d9fd63cf96c9251f1554fd84527d6774eecf56->enter($__internal_c16028e166e9adcc2c5bddcd50d9fd63cf96c9251f1554fd84527d6774eecf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c16028e166e9adcc2c5bddcd50d9fd63cf96c9251f1554fd84527d6774eecf56->leave($__internal_c16028e166e9adcc2c5bddcd50d9fd63cf96c9251f1554fd84527d6774eecf56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
