<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6e12afbc5334a33e0c3d0c1ad66f3c5bbfd2068bbb772f9cd52984a08c9d3ff6 extends Twig_Template
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
        $__internal_0437cdfcc5c3e6647a8dd119ea07defb2da457dea119ccc74fe13033a13f88f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0437cdfcc5c3e6647a8dd119ea07defb2da457dea119ccc74fe13033a13f88f9->enter($__internal_0437cdfcc5c3e6647a8dd119ea07defb2da457dea119ccc74fe13033a13f88f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0437cdfcc5c3e6647a8dd119ea07defb2da457dea119ccc74fe13033a13f88f9->leave($__internal_0437cdfcc5c3e6647a8dd119ea07defb2da457dea119ccc74fe13033a13f88f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\xampp\\htdocs\\energyvalue\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
