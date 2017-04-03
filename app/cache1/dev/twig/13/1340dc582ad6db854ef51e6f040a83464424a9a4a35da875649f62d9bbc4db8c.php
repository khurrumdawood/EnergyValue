<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_4a92ed32dfc50b55dcae2c6366328c6db2faaedbf3fc1672a179c02ae98010f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d96fbae9885d81258e270556af84ad184c7b54c11b72f084b91327e4cc32ff4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96fbae9885d81258e270556af84ad184c7b54c11b72f084b91327e4cc32ff4d->enter($__internal_d96fbae9885d81258e270556af84ad184c7b54c11b72f084b91327e4cc32ff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_d96fbae9885d81258e270556af84ad184c7b54c11b72f084b91327e4cc32ff4d->leave($__internal_d96fbae9885d81258e270556af84ad184c7b54c11b72f084b91327e4cc32ff4d_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_066fdcd7b81e3dd1fa4eb389cc663b7a3fa6ac26a7a8828049db292c1b5b48bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066fdcd7b81e3dd1fa4eb389cc663b7a3fa6ac26a7a8828049db292c1b5b48bd->enter($__internal_066fdcd7b81e3dd1fa4eb389cc663b7a3fa6ac26a7a8828049db292c1b5b48bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_066fdcd7b81e3dd1fa4eb389cc663b7a3fa6ac26a7a8828049db292c1b5b48bd->leave($__internal_066fdcd7b81e3dd1fa4eb389cc663b7a3fa6ac26a7a8828049db292c1b5b48bd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "@SonataCore/Form/colorpicker.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\core-bundle\\Resources\\views\\Form\\colorpicker.html.twig");
    }
}
