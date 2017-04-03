<?php

/* @SonataAdmin/CRUD/base_show.html.twig */
class __TwigTemplate_846288c30e6bff662242580fced7cf77b7ccfa12255868ccf7e17fec857f7505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddd8fb8505ce2e9dd94edfb6683dd0d0f61ae24d6c8509eea6726116ddad00af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd8fb8505ce2e9dd94edfb6683dd0d0f61ae24d6c8509eea6726116ddad00af->enter($__internal_ddd8fb8505ce2e9dd94edfb6683dd0d0f61ae24d6c8509eea6726116ddad00af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd8fb8505ce2e9dd94edfb6683dd0d0f61ae24d6c8509eea6726116ddad00af->leave($__internal_ddd8fb8505ce2e9dd94edfb6683dd0d0f61ae24d6c8509eea6726116ddad00af_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bd2e5f39c583f2129592e887a93ca916acfe41e091bb8176faa1fc777585b0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2e5f39c583f2129592e887a93ca916acfe41e091bb8176faa1fc777585b0ab->enter($__internal_bd2e5f39c583f2129592e887a93ca916acfe41e091bb8176faa1fc777585b0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_show.html.twig", 15)->display($context);
        
        $__internal_bd2e5f39c583f2129592e887a93ca916acfe41e091bb8176faa1fc777585b0ab->leave($__internal_bd2e5f39c583f2129592e887a93ca916acfe41e091bb8176faa1fc777585b0ab_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_25f961152ad1d435db6220676b9300457a97437011bf4ee2b8df7570645e3549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f961152ad1d435db6220676b9300457a97437011bf4ee2b8df7570645e3549->enter($__internal_25f961152ad1d435db6220676b9300457a97437011bf4ee2b8df7570645e3549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 22
        echo "
";
        
        $__internal_25f961152ad1d435db6220676b9300457a97437011bf4ee2b8df7570645e3549->leave($__internal_25f961152ad1d435db6220676b9300457a97437011bf4ee2b8df7570645e3549_prof);

    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        $__internal_949193ec9b8cd43d1a29c8c3f98177e4c8b687f5b93eda2f74e5bf565c5bca2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949193ec9b8cd43d1a29c8c3f98177e4c8b687f5b93eda2f74e5bf565c5bca2f->enter($__internal_949193ec9b8cd43d1a29c8c3f98177e4c8b687f5b93eda2f74e5bf565c5bca2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 26
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 30
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 31
        echo "
        ";
        // line 32
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 33
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 36
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 47
                echo "                        <div
                                class=\"tab-pane fade";
                // line 48
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 53
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 54
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 56
                echo "
                                    ";
                // line 57
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 58
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 65
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 66
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 67
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 69
        echo "
    </div>

    ";
        // line 72
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_949193ec9b8cd43d1a29c8c3f98177e4c8b687f5b93eda2f74e5bf565c5bca2f->leave($__internal_949193ec9b8cd43d1a29c8c3f98177e4c8b687f5b93eda2f74e5bf565c5bca2f_prof);

    }

    // line 75
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_0193e06c93c9aa1b270f484a81e9ec99e04813f368620b389aac50f388094b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0193e06c93c9aa1b270f484a81e9ec99e04813f368620b389aac50f388094b94->enter($__internal_0193e06c93c9aa1b270f484a81e9ec99e04813f368620b389aac50f388094b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 76
        echo "    <div class=\"row\">
        ";
        // line 77
        $this->displayBlock('field_row', $context, $blocks);
        // line 109
        echo "
    </div>
";
        
        $__internal_0193e06c93c9aa1b270f484a81e9ec99e04813f368620b389aac50f388094b94->leave($__internal_0193e06c93c9aa1b270f484a81e9ec99e04813f368620b389aac50f388094b94_prof);

    }

    // line 77
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_6e2cd03ed56151bc6e5dc24182115fe2473054690725b87ae5ac32819c67e4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2cd03ed56151bc6e5dc24182115fe2473054690725b87ae5ac32819c67e4bc->enter($__internal_6e2cd03ed56151bc6e5dc24182115fe2473054690725b87ae5ac32819c67e4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 79
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 80
            echo "
                <div class=\"";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 85
            $this->displayBlock('show_title', $context, $blocks);
            // line 88
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 94
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 101
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        
        $__internal_6e2cd03ed56151bc6e5dc24182115fe2473054690725b87ae5ac32819c67e4bc->leave($__internal_6e2cd03ed56151bc6e5dc24182115fe2473054690725b87ae5ac32819c67e4bc_prof);

    }

    // line 85
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_e6d628f04b4979ed73adef0d3a95c149c1645ca97f6504103588227252909e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d628f04b4979ed73adef0d3a95c149c1645ca97f6504103588227252909e10->enter($__internal_e6d628f04b4979ed73adef0d3a95c149c1645ca97f6504103588227252909e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 86
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_e6d628f04b4979ed73adef0d3a95c149c1645ca97f6504103588227252909e10->leave($__internal_e6d628f04b4979ed73adef0d3a95c149c1645ca97f6504103588227252909e10_prof);

    }

    // line 94
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_c0e87306b55f9c3150bd382a6c7ad0db3cdb71fd2f2aadad96c72b18ec0f304e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e87306b55f9c3150bd382a6c7ad0db3cdb71fd2f2aadad96c72b18ec0f304e->enter($__internal_c0e87306b55f9c3150bd382a6c7ad0db3cdb71fd2f2aadad96c72b18ec0f304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 95
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 96
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 97
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 99
        echo "                                        </tr>
                                    ";
        
        $__internal_c0e87306b55f9c3150bd382a6c7ad0db3cdb71fd2f2aadad96c72b18ec0f304e->leave($__internal_c0e87306b55f9c3150bd382a6c7ad0db3cdb71fd2f2aadad96c72b18ec0f304e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 99,  405 => 97,  403 => 96,  400 => 95,  394 => 94,  384 => 86,  378 => 85,  371 => 108,  352 => 102,  338 => 101,  335 => 94,  318 => 93,  311 => 88,  309 => 85,  303 => 82,  297 => 81,  294 => 80,  291 => 79,  273 => 78,  267 => 77,  258 => 109,  256 => 77,  253 => 76,  247 => 75,  238 => 72,  233 => 69,  227 => 67,  224 => 66,  222 => 65,  218 => 63,  198 => 58,  196 => 57,  193 => 56,  187 => 54,  185 => 53,  176 => 49,  170 => 48,  167 => 47,  150 => 46,  145 => 43,  127 => 39,  120 => 37,  113 => 36,  96 => 35,  92 => 33,  90 => 32,  87 => 31,  85 => 30,  80 => 28,  76 => 26,  70 => 25,  62 => 22,  60 => 21,  58 => 19,  52 => 18,  45 => 15,  39 => 14,  24 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ name|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.name|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "@SonataAdmin/CRUD/base_show.html.twig", "D:\\xampp\\htdocs\\energyvalue\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show.html.twig");
    }
}
