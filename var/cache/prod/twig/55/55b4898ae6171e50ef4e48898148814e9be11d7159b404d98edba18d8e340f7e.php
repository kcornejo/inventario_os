<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_1fa4d15228e8b12bc47911e55d7f4dfaf02b3dffbe170b977958b4ae986a0e70 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_attributes' => [$this, 'block_html_attributes'],
            'meta_tags' => [$this, 'block_meta_tags'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sonata_javascript_config' => [$this, 'block_sonata_javascript_config'],
            'sonata_javascript_pool' => [$this, 'block_sonata_javascript_pool'],
            'sonata_head_title' => [$this, 'block_sonata_head_title'],
            'body_attributes' => [$this, 'block_body_attributes'],
            'sonata_header' => [$this, 'block_sonata_header'],
            'sonata_header_noscript_warning' => [$this, 'block_sonata_header_noscript_warning'],
            'logo' => [$this, 'block_logo'],
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'sonata_breadcrumb' => [$this, 'block_sonata_breadcrumb'],
            'sonata_top_nav_menu' => [$this, 'block_sonata_top_nav_menu'],
            'sonata_top_nav_menu_add_block' => [$this, 'block_sonata_top_nav_menu_add_block'],
            'sonata_top_nav_menu_user_block' => [$this, 'block_sonata_top_nav_menu_user_block'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'sonata_side_nav' => [$this, 'block_sonata_side_nav'],
            'sonata_sidebar_search' => [$this, 'block_sonata_sidebar_search'],
            'side_bar_before_nav' => [$this, 'block_side_bar_before_nav'],
            'side_bar_nav' => [$this, 'block_side_bar_nav'],
            'side_bar_after_nav' => [$this, 'block_side_bar_after_nav'],
            'side_bar_after_nav_content' => [$this, 'block_side_bar_after_nav_content'],
            'sonata_page_content' => [$this, 'block_sonata_page_content'],
            'sonata_page_content_header' => [$this, 'block_sonata_page_content_header'],
            'sonata_page_content_nav' => [$this, 'block_sonata_page_content_nav'],
            'tab_menu_navbar_header' => [$this, 'block_tab_menu_navbar_header'],
            'sonata_admin_content_actions_wrappers' => [$this, 'block_sonata_admin_content_actions_wrappers'],
            'sonata_admin_content' => [$this, 'block_sonata_admin_content'],
            'notice' => [$this, 'block_notice'],
            'bootlint' => [$this, 'block_bootlint'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 25
        echo "<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        <meta data-sonata-admin='";
        // line 34
        echo json_encode(["config" => ["CONFIRM_EXIT" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "confirm_exit"], "method"), "USE_SELECT2" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "use_select2"], "method"), "USE_ICHECK" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "use_icheck"], "method"), "USE_STICKYFORMS" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "use_stickyforms"], "method"), "DEBUG" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "js_debug"], "method")], "translations" => ["CONFIRM_EXIT" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm_exit", [], "SonataAdminBundle")]]);
        // line 45
        echo "'
        >

        ";
        // line 48
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
        <title>
        ";
        // line 84
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 110
        echo "        </title>
    </head>
    <body
            ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        // line 119
        echo ">

    <div class=\"wrapper\">

        ";
        // line 123
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 223
        echo "
        ";
        // line 224
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 362
        echo "    </div>

    ";
        // line 364
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "use_bootlint"], "method")) {
            // line 365
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 371
            echo "    ";
        }
        // line 372
        echo "
    </body>
</html>
";
    }

    // line 26
    public function block_html_attributes($context, array $blocks = [])
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_meta_tags($context, array $blocks = [])
    {
        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 48
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 49
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "stylesheets", 1 => []], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 50
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        // line 55
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 57
        echo "
            ";
        // line 58
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 63
        echo "
            ";
        // line 65
        echo "            ";
        $context["localeForMoment"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getCanonicalizedLocaleForMoment($context);
        // line 66
        echo "            ";
        if (($context["localeForMoment"] ?? null)) {
            // line 67
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" .             // line 69
($context["localeForMoment"] ?? null)) . ".js")), "html", null, true);
            // line 71
            echo "\"></script>
            ";
        }
        // line 73
        echo "
            ";
        // line 75
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "use_select2"], "method")) {
            // line 76
            echo "                ";
            $context["localeForSelect2"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getCanonicalizedLocaleForSelect2($context);
            // line 77
            echo "                ";
            if (($context["localeForSelect2"] ?? null)) {
                // line 78
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . ($context["localeForSelect2"] ?? null)) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 80
            echo "            ";
        }
        // line 81
        echo "        ";
    }

    // line 55
    public function block_sonata_javascript_config($context, array $blocks = [])
    {
        // line 56
        echo "            ";
    }

    // line 58
    public function block_sonata_javascript_pool($context, array $blocks = [])
    {
        // line 59
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "javascripts", 1 => []], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 60
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            ";
    }

    // line 84
    public function block_sonata_head_title($context, array $blocks = [])
    {
        // line 85
        echo "            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin", [], "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 87
        if ( !twig_test_empty(($context["_title"] ?? null))) {
            // line 88
            echo "                ";
            echo strip_tags(($context["_title"] ?? null));
            echo "
            ";
        } else {
            // line 90
            echo "                ";
            if ((isset($context["action"]) || array_key_exists("action", $context))) {
                // line 91
                echo "                    -
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", [0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)], "method"));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 93
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                        // line 94
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) != 2)) {
                            // line 95
                            echo "                                &gt;
                            ";
                        }
                        // line 98
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_domain", 1 => "messages"], "method");
                        // line 99
                        $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "label", []);
                        // line 100
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 101
                            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_params", 1 => []], "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 104
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                        echo "
                        ";
                    }
                    // line 106
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
                // line 107
                echo "                ";
            }
            // line 108
            echo "            ";
        }
        // line 109
        echo "        ";
    }

    // line 113
    public function block_body_attributes($context, array $blocks = [])
    {
        // line 114
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "cookies", []), "get", [0 => "sonata_sidebar_hide"], "method")) {
            // line 116
            echo "sidebar-collapse";
        }
        // line 117
        echo "\"";
    }

    // line 123
    public function block_sonata_header($context, array $blocks = [])
    {
        // line 124
        echo "            <header class=\"main-header\">
                ";
        // line 125
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 132
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 144
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 221
        echo "            </header>
        ";
    }

    // line 125
    public function block_sonata_header_noscript_warning($context, array $blocks = [])
    {
        // line 126
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("noscript_warning", [], "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 132
    public function block_logo($context, array $blocks = [])
    {
        // line 133
        echo "                    ";
        ob_start();
        // line 134
        echo "                        <a class=\"logo\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 135
        if ((("single_image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "title_mode"], "method")) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "title_mode"], "method")))) {
            // line 136
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "titlelogo", [])), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "title", []), "html", null, true);
            echo "\">
                            ";
        }
        // line 138
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "title_mode"], "method")) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "title_mode"], "method")))) {
            // line 139
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "title", []), "html", null, true);
            echo "</span>
                            ";
        }
        // line 141
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 143
        echo "                ";
    }

    // line 144
    public function block_sonata_nav($context, array $blocks = [])
    {
        // line 145
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" 
                           role=\"button\" title=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 152
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 191
        echo "                        </div>

                        ";
        // line 193
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 219
        echo "                    </nav>
                ";
    }

    // line 152
    public function block_sonata_breadcrumb($context, array $blocks = [])
    {
        // line 153
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 154
        if (( !twig_test_empty(($context["_breadcrumb"] ?? null)) || (isset($context["action"]) || array_key_exists("action", $context)))) {
            // line 155
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 156
            if (twig_test_empty(($context["_breadcrumb"] ?? null))) {
                // line 157
                echo "                                                ";
                if ((isset($context["action"]) || array_key_exists("action", $context))) {
                    // line 158
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", [0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)], "method"));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 159
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_domain", 1 => "messages"], "method");
                        // line 160
                        $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "label", []);
                        // line 161
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 162
                            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_params", 1 => []], "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 165
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                            // line 166
                            echo "                                                            <li>
                                                                ";
                            // line 167
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "uri", []))) {
                                // line 168
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "uri", []), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 169
                                if (twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "safe_label", 1 => true], "method")) {
                                    // line 170
                                    echo ($context["label"] ?? null);
                                } else {
                                    // line 172
                                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                }
                                // line 174
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 176
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 178
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 180
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 182
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
                    // line 183
                    echo "                                                ";
                }
                // line 184
                echo "                                            ";
            } else {
                // line 185
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? null);
                echo "
                                            ";
            }
            // line 187
            echo "                                        </ol>
                                    ";
        }
        // line 189
        echo "                                </div>
                            ";
    }

    // line 193
    public function block_sonata_top_nav_menu($context, array $blocks = [])
    {
        // line 194
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "role_admin"], "method")))) {
            // line 195
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 197
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 205
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 215
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 218
        echo "                        ";
    }

    // line 197
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = [])
    {
        // line 198
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 202
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("add_block"), "@SonataAdmin/standard_layout.html.twig", 202)->display($context);
        // line 203
        echo "                                            </li>
                                        ";
    }

    // line 205
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = [])
    {
        // line 206
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 211
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("user_block"), "@SonataAdmin/standard_layout.html.twig", 211)->display($context);
        // line 212
        echo "                                                </ul>
                                            </li>
                                        ";
    }

    // line 224
    public function block_sonata_wrapper($context, array $blocks = [])
    {
        // line 225
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 258
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 260
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 360
        echo "            </div>
        ";
    }

    // line 225
    public function block_sonata_left_side($context, array $blocks = [])
    {
        // line 226
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 228
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 255
        echo "                    </section>
                </aside>
            ";
    }

    // line 228
    public function block_sonata_side_nav($context, array $blocks = [])
    {
        // line 229
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 243
        echo "
                            ";
        // line 244
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 245
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 248
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 254
        echo "                        ";
    }

    // line 229
    public function block_sonata_sidebar_search($context, array $blocks = [])
    {
        // line 230
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "search"], "method")) {
            // line 231
            echo "                                    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "q"], "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_placeholder", [], "SonataAdminBundle"), "html", null, true);
            echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 242
        echo "                            ";
    }

    // line 244
    public function block_side_bar_before_nav($context, array $blocks = [])
    {
        echo " ";
    }

    // line 245
    public function block_side_bar_nav($context, array $blocks = [])
    {
        // line 246
        echo "                                ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sonata_admin_sidebar", ["template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("knp_menu_template")]);
        echo "
                            ";
    }

    // line 248
    public function block_side_bar_after_nav($context, array $blocks = [])
    {
        // line 249
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 250
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 252
        echo "                                </p>
                            ";
    }

    // line 250
    public function block_side_bar_after_nav_content($context, array $blocks = [])
    {
        // line 251
        echo "                                    ";
    }

    // line 260
    public function block_sonata_page_content($context, array $blocks = [])
    {
        // line 261
        echo "                    <section class=\"content-header\">

                        ";
        // line 263
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 321
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 324
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 358
        echo "                    </section>
                ";
    }

    // line 263
    public function block_sonata_page_content_header($context, array $blocks = [])
    {
        // line 264
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 320
        echo "                        ";
    }

    // line 264
    public function block_sonata_page_content_nav($context, array $blocks = [])
    {
        // line 265
        echo "                                ";
        if (((( !twig_test_empty(($context["_navbar_title"] ?? null)) ||  !twig_test_empty(        // line 266
($context["_tab_menu"] ?? null))) ||  !twig_test_empty(        // line 267
($context["_actions"] ?? null))) ||  !twig_test_empty(        // line 268
($context["_list_filters_actions"] ?? null)))) {
            // line 270
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 272
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 279
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 281
            if ( !twig_test_empty(($context["_tab_menu"] ?? null))) {
                // line 282
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 283
                echo ($context["_tab_menu"] ?? null);
                echo "
                                                    </div>
                                                ";
            }
            // line 286
            echo "
                                                ";
            // line 287
            if (((((isset($context["admin"]) || array_key_exists("admin", $context)) && (isset($context["action"]) || array_key_exists("action", $context))) && (($context["action"] ?? null) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "listModes", [])) > 1))) {
                // line 288
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "listModes", []));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 290
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "all", []), ["_list_mode" => $context["mode"]])], "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", [], "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["settings"], "class", []), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                echo "                                                    </div>
                                                ";
            }
            // line 294
            echo "
                                                ";
            // line 295
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 311
            echo "
                                                ";
            // line 312
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? null))) {
                // line 313
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? null);
                echo "
                                                ";
            }
            // line 315
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 319
        echo "                            ";
    }

    // line 272
    public function block_tab_menu_navbar_header($context, array $blocks = [])
    {
        // line 273
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? null))) {
            // line 274
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 275
            echo ($context["_navbar_title"] ?? null);
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 278
        echo "                                            ";
    }

    // line 295
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = [])
    {
        // line 296
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? null), ["<li>" => "", "</li>" => ""])))) {
            // line 297
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 298
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? null), "</a>")) > 2)) {
                // line 299
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 300
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_actions", [], "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 302
                echo ($context["_actions"] ?? null);
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 306
                echo "                                                            ";
                echo ($context["_actions"] ?? null);
                echo "
                                                        ";
            }
            // line 308
            echo "                                                        </ul>
                                                    ";
        }
        // line 310
        echo "                                                ";
    }

    // line 324
    public function block_sonata_admin_content($context, array $blocks = [])
    {
        // line 325
        echo "
                            ";
        // line 326
        $this->displayBlock('notice', $context, $blocks);
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty(($context["_preview"] ?? null))) {
            // line 331
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? null);
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if ( !twig_test_empty(($context["_content"] ?? null))) {
            // line 335
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? null);
            echo "</div>
                            ";
        }
        // line 337
        echo "
                            ";
        // line 338
        if ( !twig_test_empty(($context["_show"] ?? null))) {
            // line 339
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? null);
            echo "</div>
                            ";
        }
        // line 341
        echo "
                            ";
        // line 342
        if ( !twig_test_empty(($context["_form"] ?? null))) {
            // line 343
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? null);
            echo "</div>
                            ";
        }
        // line 345
        echo "
                            ";
        // line 346
        if ( !twig_test_empty(($context["_list_filters"] ?? null))) {
            // line 347
            echo "                                <div class=\"row\">
                                    ";
            // line 348
            echo ($context["_list_filters"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 351
        echo "
                            ";
        // line 352
        if ( !twig_test_empty(($context["_list_table"] ?? null))) {
            // line 353
            echo "                                <div class=\"row\">
                                    ";
            // line 354
            echo ($context["_list_table"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 357
        echo "                        ";
    }

    // line 326
    public function block_notice($context, array $blocks = [])
    {
        // line 327
        echo "                                ";
        $this->loadTemplate("@SonataCore/FlashMessage/render.html.twig", "@SonataAdmin/standard_layout.html.twig", 327)->display($context);
        // line 328
        echo "                            ";
    }

    // line 365
    public function block_bootlint($context, array $blocks = [])
    {
        // line 366
        echo "            ";
        // line 367
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
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
        return array (  1063 => 367,  1061 => 366,  1058 => 365,  1054 => 328,  1051 => 327,  1048 => 326,  1044 => 357,  1038 => 354,  1035 => 353,  1033 => 352,  1030 => 351,  1024 => 348,  1021 => 347,  1019 => 346,  1016 => 345,  1010 => 343,  1008 => 342,  1005 => 341,  999 => 339,  997 => 338,  994 => 337,  988 => 335,  986 => 334,  983 => 333,  977 => 331,  975 => 330,  972 => 329,  970 => 326,  967 => 325,  964 => 324,  960 => 310,  956 => 308,  950 => 306,  943 => 302,  938 => 300,  935 => 299,  933 => 298,  930 => 297,  927 => 296,  924 => 295,  920 => 278,  914 => 275,  911 => 274,  908 => 273,  905 => 272,  901 => 319,  895 => 315,  889 => 313,  887 => 312,  884 => 311,  882 => 295,  879 => 294,  875 => 292,  860 => 290,  856 => 289,  853 => 288,  851 => 287,  848 => 286,  842 => 283,  839 => 282,  837 => 281,  833 => 279,  831 => 272,  827 => 270,  825 => 268,  824 => 267,  823 => 266,  821 => 265,  818 => 264,  814 => 320,  811 => 264,  808 => 263,  803 => 358,  801 => 324,  796 => 321,  794 => 263,  790 => 261,  787 => 260,  783 => 251,  780 => 250,  775 => 252,  773 => 250,  770 => 249,  767 => 248,  760 => 246,  757 => 245,  751 => 244,  747 => 242,  733 => 233,  727 => 231,  724 => 230,  721 => 229,  717 => 254,  714 => 248,  711 => 245,  709 => 244,  706 => 243,  703 => 229,  700 => 228,  694 => 255,  692 => 228,  688 => 226,  685 => 225,  680 => 360,  678 => 260,  674 => 258,  671 => 225,  668 => 224,  662 => 212,  660 => 211,  653 => 206,  650 => 205,  645 => 203,  643 => 202,  637 => 198,  634 => 197,  630 => 218,  625 => 215,  622 => 205,  620 => 197,  616 => 195,  613 => 194,  610 => 193,  605 => 189,  601 => 187,  595 => 185,  592 => 184,  589 => 183,  575 => 182,  569 => 180,  565 => 178,  559 => 176,  555 => 174,  552 => 172,  549 => 170,  547 => 169,  542 => 168,  540 => 167,  537 => 166,  535 => 165,  532 => 162,  530 => 161,  528 => 160,  526 => 159,  508 => 158,  505 => 157,  503 => 156,  500 => 155,  498 => 154,  495 => 153,  492 => 152,  487 => 219,  485 => 193,  481 => 191,  479 => 152,  472 => 148,  468 => 147,  464 => 145,  461 => 144,  457 => 143,  453 => 141,  447 => 139,  444 => 138,  436 => 136,  434 => 135,  429 => 134,  426 => 133,  423 => 132,  415 => 128,  411 => 126,  408 => 125,  403 => 221,  400 => 144,  397 => 132,  395 => 125,  392 => 124,  389 => 123,  385 => 117,  382 => 116,  380 => 115,  377 => 114,  374 => 113,  370 => 109,  367 => 108,  364 => 107,  350 => 106,  345 => 104,  342 => 101,  340 => 100,  338 => 99,  336 => 98,  332 => 95,  329 => 94,  326 => 93,  309 => 92,  306 => 91,  303 => 90,  297 => 88,  295 => 87,  289 => 85,  286 => 84,  282 => 62,  273 => 60,  268 => 59,  265 => 58,  261 => 56,  258 => 55,  254 => 81,  251 => 80,  245 => 78,  242 => 77,  239 => 76,  236 => 75,  233 => 73,  229 => 71,  227 => 69,  225 => 67,  222 => 66,  219 => 65,  216 => 63,  214 => 58,  211 => 57,  208 => 55,  205 => 54,  201 => 52,  192 => 50,  187 => 49,  184 => 48,  177 => 29,  174 => 28,  168 => 26,  161 => 372,  158 => 371,  155 => 365,  153 => 364,  149 => 362,  147 => 224,  144 => 223,  142 => 123,  136 => 119,  134 => 113,  129 => 110,  127 => 84,  123 => 82,  121 => 54,  118 => 53,  116 => 48,  111 => 45,  109 => 40,  108 => 39,  107 => 38,  106 => 37,  105 => 36,  104 => 34,  101 => 33,  99 => 28,  94 => 26,  91 => 25,  89 => 23,  87 => 22,  85 => 21,  83 => 20,  81 => 19,  79 => 18,  77 => 17,  75 => 16,  73 => 15,  71 => 14,  69 => 13,  67 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/standard_layout.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
