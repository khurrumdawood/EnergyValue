<?php

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_563fb0e5494af2cf8b8abdf49c6706f327d30b5adb4acf6b45e8b2a0204250f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e85beacb7884f94658b262ec179393269082c7568d3b315a5804ceccd32d0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e85beacb7884f94658b262ec179393269082c7568d3b315a5804ceccd32d0ac->enter($__internal_4e85beacb7884f94658b262ec179393269082c7568d3b315a5804ceccd32d0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        // line 11
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (        $this->renderBlock("preview", $context, $blocks)) : (null));
        // line 12
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (        $this->renderBlock("form", $context, $blocks)) : (null));
        // line 13
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (        $this->renderBlock("show", $context, $blocks)) : (null));
        // line 14
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (        $this->renderBlock("list_table", $context, $blocks)) : (null));
        // line 15
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (        $this->renderBlock("list_filters", $context, $blocks)) : (null));
        // line 16
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (        $this->renderBlock("tab_menu", $context, $blocks)) : (null));
        // line 17
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (        $this->renderBlock("content", $context, $blocks)) : (null));
        // line 18
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (        $this->renderBlock("title", $context, $blocks)) : (null));
        // line 19
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (        $this->renderBlock("breadcrumb", $context, $blocks)) : (null));
        // line 20
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (        $this->renderBlock("actions", $context, $blocks)) : (null));
        // line 21
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (        $this->renderBlock("navbar_title", $context, $blocks)) : (null));
        // line 22
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (        $this->renderBlock("list_filters_actions", $context, $blocks)) : (null));
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "        </title>
    </head>
    <body ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 216
        echo "
        ";
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 351
        echo "    </div>

    ";
        // line 353
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 354
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 360
            echo "    ";
        }
        // line 361
        echo "
    </body>
</html>
";
        
        $__internal_4e85beacb7884f94658b262ec179393269082c7568d3b315a5804ceccd32d0ac->leave($__internal_4e85beacb7884f94658b262ec179393269082c7568d3b315a5804ceccd32d0ac_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_55ae1fd1767a07e1512dbc62cf180ec356bee277a7bc8d4510b00f821b6c6f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ae1fd1767a07e1512dbc62cf180ec356bee277a7bc8d4510b00f821b6c6f92->enter($__internal_55ae1fd1767a07e1512dbc62cf180ec356bee277a7bc8d4510b00f821b6c6f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_55ae1fd1767a07e1512dbc62cf180ec356bee277a7bc8d4510b00f821b6c6f92->leave($__internal_55ae1fd1767a07e1512dbc62cf180ec356bee277a7bc8d4510b00f821b6c6f92_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_70c49d8cad81e696b4a63e8c8e79eb915efa8c5c3e6b99aef3aab562eda174e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c49d8cad81e696b4a63e8c8e79eb915efa8c5c3e6b99aef3aab562eda174e0->enter($__internal_70c49d8cad81e696b4a63e8c8e79eb915efa8c5c3e6b99aef3aab562eda174e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_70c49d8cad81e696b4a63e8c8e79eb915efa8c5c3e6b99aef3aab562eda174e0->leave($__internal_70c49d8cad81e696b4a63e8c8e79eb915efa8c5c3e6b99aef3aab562eda174e0_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d570f6b693aae7c4aeca281d2f8c33ed4615b9c8db10ccbf29daf95c8405fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d570f6b693aae7c4aeca281d2f8c33ed4615b9c8db10ccbf29daf95c8405fa1->enter($__internal_2d570f6b693aae7c4aeca281d2f8c33ed4615b9c8db10ccbf29daf95c8405fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_2d570f6b693aae7c4aeca281d2f8c33ed4615b9c8db10ccbf29daf95c8405fa1->leave($__internal_2d570f6b693aae7c4aeca281d2f8c33ed4615b9c8db10ccbf29daf95c8405fa1_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac31d7c6b67d1fddcfa4cbb45a55c61b2404c480f72a631362b107e9167e4fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac31d7c6b67d1fddcfa4cbb45a55c61b2404c480f72a631362b107e9167e4fa6->enter($__internal_ac31d7c6b67d1fddcfa4cbb45a55c61b2404c480f72a631362b107e9167e4fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_ac31d7c6b67d1fddcfa4cbb45a55c61b2404c480f72a631362b107e9167e4fa6->leave($__internal_ac31d7c6b67d1fddcfa4cbb45a55c61b2404c480f72a631362b107e9167e4fa6_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_3992d52cf1fe2021a096f78c1b9e649fd9a5923197de77081b42ad2f1b83e2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3992d52cf1fe2021a096f78c1b9e649fd9a5923197de77081b42ad2f1b83e2fb->enter($__internal_3992d52cf1fe2021a096f78c1b9e649fd9a5923197de77081b42ad2f1b83e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_3992d52cf1fe2021a096f78c1b9e649fd9a5923197de77081b42ad2f1b83e2fb->leave($__internal_3992d52cf1fe2021a096f78c1b9e649fd9a5923197de77081b42ad2f1b83e2fb_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_1a4094e8201cc7d48fd2b4a1c913bb28b0168376253e9538cbb2ec9c5bf7fa6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4094e8201cc7d48fd2b4a1c913bb28b0168376253e9538cbb2ec9c5bf7fa6a->enter($__internal_1a4094e8201cc7d48fd2b4a1c913bb28b0168376253e9538cbb2ec9c5bf7fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 62
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        
        $__internal_1a4094e8201cc7d48fd2b4a1c913bb28b0168376253e9538cbb2ec9c5bf7fa6a->leave($__internal_1a4094e8201cc7d48fd2b4a1c913bb28b0168376253e9538cbb2ec9c5bf7fa6a_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_ce5b1259dce06bbddea1034060edd2976b14ecf8220376eba4ab5409410f42e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5b1259dce06bbddea1034060edd2976b14ecf8220376eba4ab5409410f42e1->enter($__internal_ce5b1259dce06bbddea1034060edd2976b14ecf8220376eba4ab5409410f42e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 107
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
        
        $__internal_ce5b1259dce06bbddea1034060edd2976b14ecf8220376eba4ab5409410f42e1->leave($__internal_ce5b1259dce06bbddea1034060edd2976b14ecf8220376eba4ab5409410f42e1_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_6e33743f0824521b9c93567e2ca313992640cb802014071365c21322e9b845ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e33743f0824521b9c93567e2ca313992640cb802014071365c21322e9b845ca->enter($__internal_6e33743f0824521b9c93567e2ca313992640cb802014071365c21322e9b845ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_6e33743f0824521b9c93567e2ca313992640cb802014071365c21322e9b845ca->leave($__internal_6e33743f0824521b9c93567e2ca313992640cb802014071365c21322e9b845ca_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_991d6771c1a6259ae68324158d4c7762f40433bc81b91cbe5770e086cdf31fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991d6771c1a6259ae68324158d4c7762f40433bc81b91cbe5770e086cdf31fbd->enter($__internal_991d6771c1a6259ae68324158d4c7762f40433bc81b91cbe5770e086cdf31fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 118
        echo "            <header class=\"main-header\">
                ";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "            </header>
        ";
        
        $__internal_991d6771c1a6259ae68324158d4c7762f40433bc81b91cbe5770e086cdf31fbd->leave($__internal_991d6771c1a6259ae68324158d4c7762f40433bc81b91cbe5770e086cdf31fbd_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_43c3b7c8895dc5092c8b44684e51d55a08e49b3b1787e4a8b4345f021f5095b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c3b7c8895dc5092c8b44684e51d55a08e49b3b1787e4a8b4345f021f5095b1->enter($__internal_43c3b7c8895dc5092c8b44684e51d55a08e49b3b1787e4a8b4345f021f5095b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 120
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_43c3b7c8895dc5092c8b44684e51d55a08e49b3b1787e4a8b4345f021f5095b1->leave($__internal_43c3b7c8895dc5092c8b44684e51d55a08e49b3b1787e4a8b4345f021f5095b1_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_258e883e420e838bb85efa5542eba4a1de935a0288ac17ed118c1a52c936fac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258e883e420e838bb85efa5542eba4a1de935a0288ac17ed118c1a52c936fac6->enter($__internal_258e883e420e838bb85efa5542eba4a1de935a0288ac17ed118c1a52c936fac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 127
        echo "                    ";
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 132
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 135
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "                ";
        
        $__internal_258e883e420e838bb85efa5542eba4a1de935a0288ac17ed118c1a52c936fac6->leave($__internal_258e883e420e838bb85efa5542eba4a1de935a0288ac17ed118c1a52c936fac6_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_70dac0b3a10ecffd7f58228b5730a45b53e812b88ee7f6f09e2ab2eda03c25d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dac0b3a10ecffd7f58228b5730a45b53e812b88ee7f6f09e2ab2eda03c25d0->enter($__internal_70dac0b3a10ecffd7f58228b5730a45b53e812b88ee7f6f09e2ab2eda03c25d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 139
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>

                        ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                    </nav>
                ";
        
        $__internal_70dac0b3a10ecffd7f58228b5730a45b53e812b88ee7f6f09e2ab2eda03c25d0->leave($__internal_70dac0b3a10ecffd7f58228b5730a45b53e812b88ee7f6f09e2ab2eda03c25d0_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_8cb082752673c7a4592765f42f14e555591df15bbb8d709a9773e79ed5ca4798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb082752673c7a4592765f42f14e555591df15bbb8d709a9773e79ed5ca4798->enter($__internal_8cb082752673c7a4592765f42f14e555591df15bbb8d709a9773e79ed5ca4798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 146
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 147
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 149
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                            <li>
                                                                ";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 175
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 180
            echo "                                        </ol>
                                    ";
        }
        // line 182
        echo "                                </div>
                            ";
        
        $__internal_8cb082752673c7a4592765f42f14e555591df15bbb8d709a9773e79ed5ca4798->leave($__internal_8cb082752673c7a4592765f42f14e555591df15bbb8d709a9773e79ed5ca4798_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_a315aa38aa35ebe7e9dc7fd2b2b22b52c11bc1c21226cd896b51ff4c8a5194f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a315aa38aa35ebe7e9dc7fd2b2b22b52c11bc1c21226cd896b51ff4c8a5194f5->enter($__internal_a315aa38aa35ebe7e9dc7fd2b2b22b52c11bc1c21226cd896b51ff4c8a5194f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 211
        echo "                        ";
        
        $__internal_a315aa38aa35ebe7e9dc7fd2b2b22b52c11bc1c21226cd896b51ff4c8a5194f5->leave($__internal_a315aa38aa35ebe7e9dc7fd2b2b22b52c11bc1c21226cd896b51ff4c8a5194f5_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_6fcba2c6af61268af73ec9bcd8333e3f8787e0dd5099f2805e34e30616142f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcba2c6af61268af73ec9bcd8333e3f8787e0dd5099f2805e34e30616142f44->enter($__internal_6fcba2c6af61268af73ec9bcd8333e3f8787e0dd5099f2805e34e30616142f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>
                                        ";
        
        $__internal_6fcba2c6af61268af73ec9bcd8333e3f8787e0dd5099f2805e34e30616142f44->leave($__internal_6fcba2c6af61268af73ec9bcd8333e3f8787e0dd5099f2805e34e30616142f44_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_dc09524a3801005b706d60b1569d1d337dbf370de19aa9ad576b1eee5be7fb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc09524a3801005b706d60b1569d1d337dbf370de19aa9ad576b1eee5be7fb4c->enter($__internal_dc09524a3801005b706d60b1569d1d337dbf370de19aa9ad576b1eee5be7fb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_dc09524a3801005b706d60b1569d1d337dbf370de19aa9ad576b1eee5be7fb4c->leave($__internal_dc09524a3801005b706d60b1569d1d337dbf370de19aa9ad576b1eee5be7fb4c_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ca12227bad1c48ef593f5d44c113518e344b5814fc507ad11fc87263b428c9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca12227bad1c48ef593f5d44c113518e344b5814fc507ad11fc87263b428c9a2->enter($__internal_ca12227bad1c48ef593f5d44c113518e344b5814fc507ad11fc87263b428c9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 218
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 349
        echo "            </div>
        ";
        
        $__internal_ca12227bad1c48ef593f5d44c113518e344b5814fc507ad11fc87263b428c9a2->leave($__internal_ca12227bad1c48ef593f5d44c113518e344b5814fc507ad11fc87263b428c9a2_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a8debfd2e9cb810a6fe260669053b8379ae9c33b0a4702605944695c73194675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8debfd2e9cb810a6fe260669053b8379ae9c33b0a4702605944695c73194675->enter($__internal_a8debfd2e9cb810a6fe260669053b8379ae9c33b0a4702605944695c73194675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 219
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                    </section>
                </aside>
            ";
        
        $__internal_a8debfd2e9cb810a6fe260669053b8379ae9c33b0a4702605944695c73194675->leave($__internal_a8debfd2e9cb810a6fe260669053b8379ae9c33b0a4702605944695c73194675_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_31ec0591739fb20726ec1b60c67a6c7cf969dbced0eb5b2fffff634005a91636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ec0591739fb20726ec1b60c67a6c7cf969dbced0eb5b2fffff634005a91636->enter($__internal_31ec0591739fb20726ec1b60c67a6c7cf969dbced0eb5b2fffff634005a91636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 222
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 234
        echo "
                            ";
        // line 235
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 236
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                        ";
        
        $__internal_31ec0591739fb20726ec1b60c67a6c7cf969dbced0eb5b2fffff634005a91636->leave($__internal_31ec0591739fb20726ec1b60c67a6c7cf969dbced0eb5b2fffff634005a91636_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_f0de3d7c81281007c102e687b2f15c3e2ee460403230478b0716fc02542b1705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0de3d7c81281007c102e687b2f15c3e2ee460403230478b0716fc02542b1705->enter($__internal_f0de3d7c81281007c102e687b2f15c3e2ee460403230478b0716fc02542b1705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_f0de3d7c81281007c102e687b2f15c3e2ee460403230478b0716fc02542b1705->leave($__internal_f0de3d7c81281007c102e687b2f15c3e2ee460403230478b0716fc02542b1705_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_424f55b12147591ad47d69d4debd8baa40b2b2e057d48a95d17307d700a189d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424f55b12147591ad47d69d4debd8baa40b2b2e057d48a95d17307d700a189d7->enter($__internal_424f55b12147591ad47d69d4debd8baa40b2b2e057d48a95d17307d700a189d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_424f55b12147591ad47d69d4debd8baa40b2b2e057d48a95d17307d700a189d7->leave($__internal_424f55b12147591ad47d69d4debd8baa40b2b2e057d48a95d17307d700a189d7_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_0705d9bd008cf85e5c079de5973ac5353054d7138e6175d1063c0f32bae6cde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0705d9bd008cf85e5c079de5973ac5353054d7138e6175d1063c0f32bae6cde4->enter($__internal_0705d9bd008cf85e5c079de5973ac5353054d7138e6175d1063c0f32bae6cde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_0705d9bd008cf85e5c079de5973ac5353054d7138e6175d1063c0f32bae6cde4->leave($__internal_0705d9bd008cf85e5c079de5973ac5353054d7138e6175d1063c0f32bae6cde4_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_02efec5b5fd7928842d22c71b2f192863433595e57151dbaa48924a4ab57309e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02efec5b5fd7928842d22c71b2f192863433595e57151dbaa48924a4ab57309e->enter($__internal_02efec5b5fd7928842d22c71b2f192863433595e57151dbaa48924a4ab57309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_02efec5b5fd7928842d22c71b2f192863433595e57151dbaa48924a4ab57309e->leave($__internal_02efec5b5fd7928842d22c71b2f192863433595e57151dbaa48924a4ab57309e_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_5b705dfebc14e78bfff326c718b75f7be4cc3261cdf24d353f9accd9447c093a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b705dfebc14e78bfff326c718b75f7be4cc3261cdf24d353f9accd9447c093a->enter($__internal_5b705dfebc14e78bfff326c718b75f7be4cc3261cdf24d353f9accd9447c093a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_5b705dfebc14e78bfff326c718b75f7be4cc3261cdf24d353f9accd9447c093a->leave($__internal_5b705dfebc14e78bfff326c718b75f7be4cc3261cdf24d353f9accd9447c093a_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_9d5903f6f403f294d2c95b2d27195fef85d7cfd508a89224eed90036cf717b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5903f6f403f294d2c95b2d27195fef85d7cfd508a89224eed90036cf717b16->enter($__internal_9d5903f6f403f294d2c95b2d27195fef85d7cfd508a89224eed90036cf717b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 253
        echo "                    <section class=\"content-header\">

                        ";
        // line 255
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 309
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 312
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 347
        echo "                    </section>
                ";
        
        $__internal_9d5903f6f403f294d2c95b2d27195fef85d7cfd508a89224eed90036cf717b16->leave($__internal_9d5903f6f403f294d2c95b2d27195fef85d7cfd508a89224eed90036cf717b16_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_44f4fdeed9d5591003a37563030fd9c97be7c7becf20b583ec69de665e5b1af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f4fdeed9d5591003a37563030fd9c97be7c7becf20b583ec69de665e5b1af9->enter($__internal_44f4fdeed9d5591003a37563030fd9c97be7c7becf20b583ec69de665e5b1af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_44f4fdeed9d5591003a37563030fd9c97be7c7becf20b583ec69de665e5b1af9->leave($__internal_44f4fdeed9d5591003a37563030fd9c97be7c7becf20b583ec69de665e5b1af9_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_631d3d2438723b19d60985b94e176908dad38c3e152d5aa3a6b8541b075b3de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631d3d2438723b19d60985b94e176908dad38c3e152d5aa3a6b8541b075b3de4->enter($__internal_631d3d2438723b19d60985b94e176908dad38c3e152d5aa3a6b8541b075b3de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 257
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 258
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 270
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "                                                    </div>
                                                ";
            }
            // line 282
            echo "
                                                ";
            // line 283
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 299
            echo "
                                                ";
            // line 300
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 301
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 303
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 307
        echo "                            ";
        
        $__internal_631d3d2438723b19d60985b94e176908dad38c3e152d5aa3a6b8541b075b3de4->leave($__internal_631d3d2438723b19d60985b94e176908dad38c3e152d5aa3a6b8541b075b3de4_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_2f3ae6663590bcda6635799e7f3d8919ac0b1014174b177b22197071789d4498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3ae6663590bcda6635799e7f3d8919ac0b1014174b177b22197071789d4498->enter($__internal_2f3ae6663590bcda6635799e7f3d8919ac0b1014174b177b22197071789d4498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_2f3ae6663590bcda6635799e7f3d8919ac0b1014174b177b22197071789d4498->leave($__internal_2f3ae6663590bcda6635799e7f3d8919ac0b1014174b177b22197071789d4498_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_41a1d697cf946f8920f539628c892a3e0181ef5463f0d0710440bd6fec4dc1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a1d697cf946f8920f539628c892a3e0181ef5463f0d0710440bd6fec4dc1e6->enter($__internal_41a1d697cf946f8920f539628c892a3e0181ef5463f0d0710440bd6fec4dc1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 284
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 290
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 294
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 296
            echo "                                                        </ul>
                                                    ";
        }
        // line 298
        echo "                                                ";
        
        $__internal_41a1d697cf946f8920f539628c892a3e0181ef5463f0d0710440bd6fec4dc1e6->leave($__internal_41a1d697cf946f8920f539628c892a3e0181ef5463f0d0710440bd6fec4dc1e6_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_b25f88f0d56b616d2cc239e43c532f43847c5565d39e83ce4ec15fa921a7a7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25f88f0d56b616d2cc239e43c532f43847c5565d39e83ce4ec15fa921a7a7d3->enter($__internal_b25f88f0d56b616d2cc239e43c532f43847c5565d39e83ce4ec15fa921a7a7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 313
        echo "
                            ";
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 317
        echo "
                            ";
        // line 318
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 321
        echo "
                            ";
        // line 322
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 325
        echo "
                            ";
        // line 326
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 335
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 336
                echo "                                    <div class=\"row\">
                                        ";
                // line 337
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 340
            echo "
                                <div class=\"row\">
                                    ";
            // line 342
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 346
        echo "                        ";
        
        $__internal_b25f88f0d56b616d2cc239e43c532f43847c5565d39e83ce4ec15fa921a7a7d3->leave($__internal_b25f88f0d56b616d2cc239e43c532f43847c5565d39e83ce4ec15fa921a7a7d3_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_39be4fc801b18cf5120045d79066b4e3354cf6db9454a6fbff9a296a51a56419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39be4fc801b18cf5120045d79066b4e3354cf6db9454a6fbff9a296a51a56419->enter($__internal_39be4fc801b18cf5120045d79066b4e3354cf6db9454a6fbff9a296a51a56419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataAdmin/standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_39be4fc801b18cf5120045d79066b4e3354cf6db9454a6fbff9a296a51a56419->leave($__internal_39be4fc801b18cf5120045d79066b4e3354cf6db9454a6fbff9a296a51a56419_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_b7ea2b62d31412abfaa116e236dc554cd70aa23f70f921268db1543882c9d7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ea2b62d31412abfaa116e236dc554cd70aa23f70f921268db1543882c9d7e5->enter($__internal_b7ea2b62d31412abfaa116e236dc554cd70aa23f70f921268db1543882c9d7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_b7ea2b62d31412abfaa116e236dc554cd70aa23f70f921268db1543882c9d7e5->leave($__internal_b7ea2b62d31412abfaa116e236dc554cd70aa23f70f921268db1543882c9d7e5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1257 => 356,  1255 => 355,  1249 => 354,  1242 => 316,  1239 => 315,  1233 => 314,  1226 => 346,  1219 => 342,  1215 => 340,  1209 => 337,  1206 => 336,  1203 => 335,  1201 => 334,  1198 => 333,  1192 => 331,  1190 => 330,  1187 => 329,  1181 => 327,  1179 => 326,  1176 => 325,  1170 => 323,  1168 => 322,  1165 => 321,  1159 => 319,  1157 => 318,  1154 => 317,  1152 => 314,  1149 => 313,  1143 => 312,  1136 => 298,  1132 => 296,  1126 => 294,  1119 => 290,  1114 => 288,  1111 => 287,  1109 => 286,  1106 => 285,  1103 => 284,  1097 => 283,  1090 => 266,  1084 => 263,  1081 => 262,  1078 => 261,  1072 => 260,  1065 => 307,  1059 => 303,  1053 => 301,  1051 => 300,  1048 => 299,  1046 => 283,  1043 => 282,  1039 => 280,  1024 => 278,  1020 => 277,  1017 => 276,  1015 => 275,  1011 => 273,  1005 => 271,  1003 => 270,  998 => 267,  996 => 260,  992 => 258,  989 => 257,  983 => 256,  976 => 308,  973 => 256,  967 => 255,  959 => 347,  957 => 312,  952 => 309,  950 => 255,  946 => 253,  940 => 252,  932 => 242,  926 => 241,  918 => 244,  916 => 241,  913 => 240,  907 => 239,  897 => 237,  891 => 236,  879 => 235,  861 => 225,  855 => 223,  849 => 222,  842 => 246,  839 => 239,  836 => 236,  834 => 235,  831 => 234,  828 => 222,  822 => 221,  813 => 247,  811 => 221,  807 => 219,  801 => 218,  793 => 349,  791 => 252,  787 => 250,  784 => 218,  778 => 217,  769 => 205,  767 => 204,  760 => 199,  754 => 198,  746 => 196,  744 => 195,  738 => 191,  732 => 190,  725 => 211,  720 => 208,  717 => 198,  715 => 190,  711 => 188,  708 => 187,  702 => 186,  694 => 182,  690 => 180,  684 => 178,  681 => 177,  678 => 176,  664 => 175,  658 => 173,  654 => 171,  648 => 169,  644 => 167,  641 => 165,  638 => 163,  636 => 162,  631 => 161,  629 => 160,  626 => 159,  624 => 158,  621 => 155,  619 => 154,  617 => 153,  615 => 152,  597 => 151,  594 => 150,  592 => 149,  589 => 148,  587 => 147,  584 => 146,  578 => 145,  570 => 212,  568 => 186,  564 => 184,  562 => 145,  554 => 139,  548 => 138,  541 => 137,  537 => 135,  531 => 133,  528 => 132,  520 => 130,  518 => 129,  513 => 128,  510 => 127,  504 => 126,  493 => 122,  489 => 120,  483 => 119,  475 => 214,  472 => 138,  469 => 126,  467 => 119,  464 => 118,  458 => 117,  446 => 113,  439 => 110,  436 => 109,  433 => 108,  419 => 107,  414 => 105,  411 => 102,  409 => 101,  407 => 100,  405 => 99,  401 => 96,  398 => 95,  395 => 94,  378 => 93,  375 => 92,  372 => 91,  366 => 89,  364 => 88,  358 => 86,  352 => 85,  345 => 65,  336 => 63,  331 => 62,  325 => 61,  307 => 49,  303 => 47,  297 => 46,  289 => 45,  281 => 44,  273 => 43,  269 => 41,  263 => 40,  256 => 82,  253 => 81,  247 => 79,  244 => 78,  241 => 76,  236 => 75,  233 => 74,  230 => 72,  224 => 70,  221 => 69,  219 => 68,  217 => 67,  214 => 66,  212 => 61,  209 => 60,  206 => 40,  200 => 39,  193 => 37,  184 => 35,  179 => 34,  173 => 33,  163 => 28,  157 => 27,  145 => 25,  135 => 361,  132 => 360,  129 => 354,  127 => 353,  123 => 351,  121 => 217,  118 => 216,  116 => 117,  109 => 113,  105 => 111,  103 => 85,  99 => 83,  97 => 39,  94 => 38,  92 => 33,  89 => 32,  87 => 27,  82 => 25,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,);
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
{% set _preview              = block('preview') is defined ? block('preview') : null %}
{% set _form                 = block('form') is defined ? block('form') : null %}
{% set _show                 = block('show') is defined ? block('show') : null %}
{% set _list_table           = block('list_table') is defined ? block('list_table') : null %}
{% set _list_filters         = block('list_filters') is defined ? block('list_filters') : null %}
{% set _tab_menu             = block('tab_menu') is defined ? block('tab_menu') : null %}
{% set _content              = block('content') is defined ? block('content') : null %}
{% set _title                = block('title') is defined ? block('title') : null %}
{% set _breadcrumb           = block('breadcrumb') is defined ? block('breadcrumb') : null %}
{% set _actions              = block('actions') is defined ? block('actions') : null %}
{% set _navbar_title         = block('navbar_title') is defined ? block('navbar_title') : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions') : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                    <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {%  if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif%}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last  %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    {{ label }}
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    {% if _tab_menu is not empty %}
                                                        {{ _tab_menu|raw }}
                                                    {% endif %}
                                                </div>

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_table is not empty or _list_filters is not empty %}
                                {% if _list_filters|trim %}
                                    <div class=\"row\">
                                        {{ _list_filters|raw }}
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>

                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "@SonataAdmin/standard_layout.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\standard_layout.html.twig");
    }
}
