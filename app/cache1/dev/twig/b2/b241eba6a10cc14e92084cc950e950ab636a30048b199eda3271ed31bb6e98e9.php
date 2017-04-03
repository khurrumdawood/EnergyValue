<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_55c9e11c29066ee1f15e00160ed446efa3aa0f243338cd0d06be7f2f2984c529 extends Twig_Template
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
        $__internal_9cad40da7106c593c8ebb791572f8c8ac0b0e103fd4393a178e3728c4525f9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cad40da7106c593c8ebb791572f8c8ac0b0e103fd4393a178e3728c4525f9f8->enter($__internal_9cad40da7106c593c8ebb791572f8c8ac0b0e103fd4393a178e3728c4525f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9cad40da7106c593c8ebb791572f8c8ac0b0e103fd4393a178e3728c4525f9f8->leave($__internal_9cad40da7106c593c8ebb791572f8c8ac0b0e103fd4393a178e3728c4525f9f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
