<?php

/* @SonataUser/Admin/Security/Resetting/request.html.twig */
class __TwigTemplate_578832d0e9150382b6dae73310843aa465c1f2a60ca3f6256e70f2bca717671b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e8872ab61aa90e18836e1e3fa869ce5c7f7312ccc63c5e9a5e8e7698474dccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8872ab61aa90e18836e1e3fa869ce5c7f7312ccc63c5e9a5e8e7698474dccf->enter($__internal_0e8872ab61aa90e18836e1e3fa869ce5c7f7312ccc63c5e9a5e8e7698474dccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8872ab61aa90e18836e1e3fa869ce5c7f7312ccc63c5e9a5e8e7698474dccf->leave($__internal_0e8872ab61aa90e18836e1e3fa869ce5c7f7312ccc63c5e9a5e8e7698474dccf_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_91d085a3f24e1a3a62d5ed92384ff1e014ac3c0614914fd1ae98ce1fbe468406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d085a3f24e1a3a62d5ed92384ff1e014ac3c0614914fd1ae98ce1fbe468406->enter($__internal_91d085a3f24e1a3a62d5ed92384ff1e014ac3c0614914fd1ae98ce1fbe468406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_91d085a3f24e1a3a62d5ed92384ff1e014ac3c0614914fd1ae98ce1fbe468406->leave($__internal_91d085a3f24e1a3a62d5ed92384ff1e014ac3c0614914fd1ae98ce1fbe468406_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3a66e0e8e54a35df36bb888dc949062d8231d64b47640ee7ad012e33ade9cdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a66e0e8e54a35df36bb888dc949062d8231d64b47640ee7ad012e33ade9cdc4->enter($__internal_3a66e0e8e54a35df36bb888dc949062d8231d64b47640ee7ad012e33ade9cdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_3a66e0e8e54a35df36bb888dc949062d8231d64b47640ee7ad012e33ade9cdc4->leave($__internal_3a66e0e8e54a35df36bb888dc949062d8231d64b47640ee7ad012e33ade9cdc4_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_b530d86a45b5f1655c6bd1c609070e9887913a79e1ea2a22b843ddbec1a61f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b530d86a45b5f1655c6bd1c609070e9887913a79e1ea2a22b843ddbec1a61f7d->enter($__internal_b530d86a45b5f1655c6bd1c609070e9887913a79e1ea2a22b843ddbec1a61f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_b530d86a45b5f1655c6bd1c609070e9887913a79e1ea2a22b843ddbec1a61f7d->leave($__internal_b530d86a45b5f1655c6bd1c609070e9887913a79e1ea2a22b843ddbec1a61f7d_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f1055e4746db2262d251f0d3f7b2ea8f0f002765209a8811a2a81d89e0b1c458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1055e4746db2262d251f0d3f7b2ea8f0f002765209a8811a2a81d89e0b1c458->enter($__internal_f1055e4746db2262d251f0d3f7b2ea8f0f002765209a8811a2a81d89e0b1c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_f1055e4746db2262d251f0d3f7b2ea8f0f002765209a8811a2a81d89e0b1c458->leave($__internal_f1055e4746db2262d251f0d3f7b2ea8f0f002765209a8811a2a81d89e0b1c458_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_756c22a7dc284eb28f69aace8d8f47cfadcc5f4ba82db6ef1ef9157d06215883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756c22a7dc284eb28f69aace8d8f47cfadcc5f4ba82db6ef1ef9157d06215883->enter($__internal_756c22a7dc284eb28f69aace8d8f47cfadcc5f4ba82db6ef1ef9157d06215883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 25
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_756c22a7dc284eb28f69aace8d8f47cfadcc5f4ba82db6ef1ef9157d06215883->leave($__internal_756c22a7dc284eb28f69aace8d8f47cfadcc5f4ba82db6ef1ef9157d06215883_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_235b91066ba7dc404edb9df93e2de9917b47caf7c1bee539731087c63062c65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235b91066ba7dc404edb9df93e2de9917b47caf7c1bee539731087c63062c65f->enter($__internal_235b91066ba7dc404edb9df93e2de9917b47caf7c1bee539731087c63062c65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 26
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 31
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_235b91066ba7dc404edb9df93e2de9917b47caf7c1bee539731087c63062c65f->leave($__internal_235b91066ba7dc404edb9df93e2de9917b47caf7c1bee539731087c63062c65f_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_542d031f3d97576727acf4777df78bf080b3f8600e5d9ab2449506526b469b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542d031f3d97576727acf4777df78bf080b3f8600e5d9ab2449506526b469b1e->enter($__internal_542d031f3d97576727acf4777df78bf080b3f8600e5d9ab2449506526b469b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 27
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 28
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_542d031f3d97576727acf4777df78bf080b3f8600e5d9ab2449506526b469b1e->leave($__internal_542d031f3d97576727acf4777df78bf080b3f8600e5d9ab2449506526b469b1e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 30,  180 => 28,  177 => 27,  171 => 26,  160 => 45,  152 => 40,  143 => 34,  138 => 32,  133 => 31,  130 => 26,  124 => 25,  114 => 47,  112 => 25,  107 => 22,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}
                    <span>{{ admin_pool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            {% block sonata_user_reset_request_form %}
                {% block sonata_user_reset_request_error %}
                    {% if invalid_username is defined %}
                        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_send_email') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/request.html.twig", "D:\\xampp\\htdocs\\energyvalue\\app\\Application\\Sonata\\UserBundle\\Resources\\views\\Admin\\Security\\Resetting\\request.html.twig");
    }
}
