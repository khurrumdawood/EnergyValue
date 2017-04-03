<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_787505b8d15fdff1b353ed460ef32ce50c428ba1c38c4463fdef429ca4de9fbf extends Twig_Template
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
        $__internal_e72d471f098353ffbbe359a5c80431467ffd06a1fe23bce4784c4143c9f620b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72d471f098353ffbbe359a5c80431467ffd06a1fe23bce4784c4143c9f620b2->enter($__internal_e72d471f098353ffbbe359a5c80431467ffd06a1fe23bce4784c4143c9f620b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e72d471f098353ffbbe359a5c80431467ffd06a1fe23bce4784c4143c9f620b2->leave($__internal_e72d471f098353ffbbe359a5c80431467ffd06a1fe23bce4784c4143c9f620b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
