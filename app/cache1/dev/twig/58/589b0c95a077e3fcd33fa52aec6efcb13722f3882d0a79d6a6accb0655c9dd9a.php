<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_66d9603522b471c3a2d0524870a2a815de941f32d3a435e4c9a4d8a7f3d0cd19 extends Twig_Template
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
        $__internal_f01439708ac0ad33b5ce7a157a4905b065d87cb5c851aa40ec415458b1db91aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01439708ac0ad33b5ce7a157a4905b065d87cb5c851aa40ec415458b1db91aa->enter($__internal_f01439708ac0ad33b5ce7a157a4905b065d87cb5c851aa40ec415458b1db91aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f01439708ac0ad33b5ce7a157a4905b065d87cb5c851aa40ec415458b1db91aa->leave($__internal_f01439708ac0ad33b5ce7a157a4905b065d87cb5c851aa40ec415458b1db91aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
