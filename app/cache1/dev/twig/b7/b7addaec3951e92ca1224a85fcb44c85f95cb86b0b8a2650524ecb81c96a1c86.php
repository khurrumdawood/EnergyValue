<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6794bd417f66d3c89d903ed50daae295cee4a91b0f9b49842077a9108fdebd12 extends Twig_Template
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
        $__internal_1a5c1d79a56f6b1ff3dcb00e45b45be0dd74cb4fbaa3f0368d80378611b5d5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5c1d79a56f6b1ff3dcb00e45b45be0dd74cb4fbaa3f0368d80378611b5d5e2->enter($__internal_1a5c1d79a56f6b1ff3dcb00e45b45be0dd74cb4fbaa3f0368d80378611b5d5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1a5c1d79a56f6b1ff3dcb00e45b45be0dd74cb4fbaa3f0368d80378611b5d5e2->leave($__internal_1a5c1d79a56f6b1ff3dcb00e45b45be0dd74cb4fbaa3f0368d80378611b5d5e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
