<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c9600fb2ed9033156a111760cb6032e4ea92221b296128595f5955ce3dc7b3e8 extends Twig_Template
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
        $__internal_ded30c7efdbfe90bde7cba32948789ad2daf725e6612abac183e111be6941f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded30c7efdbfe90bde7cba32948789ad2daf725e6612abac183e111be6941f35->enter($__internal_ded30c7efdbfe90bde7cba32948789ad2daf725e6612abac183e111be6941f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ded30c7efdbfe90bde7cba32948789ad2daf725e6612abac183e111be6941f35->leave($__internal_ded30c7efdbfe90bde7cba32948789ad2daf725e6612abac183e111be6941f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
