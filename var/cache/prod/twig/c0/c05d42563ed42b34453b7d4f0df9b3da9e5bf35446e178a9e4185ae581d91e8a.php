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

/* @SonataAdmin/Core/tab_menu_template.html.twig */
class __TwigTemplate_9b9e65c3aabf3ab6c7168bcc0394e7aab6abfbc406713fb6dd1c5289b59dc4c3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 1);
        $this->blocks = [
            'item' => [$this, 'block_item'],
            'dividerElement' => [$this, 'block_dividerElement'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'dropdownElement' => [$this, 'block_dropdownElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = [])
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 4);
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [])) {
            // line 6
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", []);
            // line 7
            $context["is_dropdown"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", []), false)) : (false));
            // line 8
            $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", []), false)) : (false));
            // line 9
            $context["divider_append"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", []), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["dropdown" => null, "divider_prepend" => null, "divider_append" => null]);
            // line 14
            if (($context["divider_prepend"] ?? null)) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method"))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method")]) : ([]));
            // line 21
            if ((isset($context["matcher"]) || array_key_exists("matcher", $context))) {
                echo " ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [])]);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 24
($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [])], "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [])]);
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", [])) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [])]);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 30
($context["item"] ?? null), "currentAncestor", [])) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [])]);
                }
            }
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", [])) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", [])]);
            }
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", [])) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", [])]);
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method"))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method")]) : ([]));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", []))]);
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? null)) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "dropdown"]);
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => "dropdown-menu"]);
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
            }
            // line 56
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", []), ["class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")]);
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->macro_attributes(($context["attributes"] ?? null));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? null)) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 62
($context["item"] ?? null), "uri", [])) && ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", []) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", [])))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? null)) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
    }

    // line 77
    public function block_dividerElement($context, array $blocks = [])
    {
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", []) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
    }

    // line 85
    public function block_linkElement($context, array $blocks = [])
    {
        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", []), "html", null, true);
        echo "\"";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", []));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
    }

    // line 95
    public function block_spanElement($context, array $blocks = [])
    {
        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", []));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
    }

    // line 105
    public function block_dropdownElement($context, array $blocks = [])
    {
        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttribute", [0 => "class"], "method"))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttribute", [0 => "class"], "method")]) : ([]));
        // line 108
        $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "dropdown-toggle"]);
        // line 109
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", []);
        // line 110
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
        // line 111
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-toggle" => "dropdown"]);
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->macro_attributes(($context["attributes"] ?? null));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
    }

    // line 121
    public function block_label($context, array $blocks = [])
    {
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 123
($context["item"] ?? null), "label", []), twig_get_attribute($this->env, $this->source,         // line 124
($context["item"] ?? null), "getExtra", [0 => "translation_params", 1 => []], "method"), twig_get_attribute($this->env, $this->source,         // line 125
($context["item"] ?? null), "getExtra", [0 => "translation_domain", 1 => ((twig_get_attribute($this->env, $this->source,         // line 127
($context["item"] ?? null), "getParent", [], "method")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getParent", [], "method"), "getExtra", [0 => "translation_domain"], "method")) : (null))], "method")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 127,  293 => 125,  292 => 124,  291 => 123,  290 => 122,  287 => 121,  278 => 116,  272 => 114,  270 => 113,  265 => 112,  263 => 111,  261 => 110,  259 => 109,  257 => 108,  255 => 107,  252 => 106,  249 => 105,  241 => 101,  235 => 99,  233 => 98,  228 => 97,  225 => 96,  222 => 95,  214 => 91,  208 => 89,  206 => 88,  199 => 87,  196 => 86,  193 => 85,  187 => 81,  183 => 79,  181 => 78,  178 => 77,  171 => 72,  169 => 71,  164 => 68,  160 => 65,  156 => 63,  154 => 62,  151 => 61,  149 => 60,  145 => 59,  142 => 57,  140 => 56,  137 => 54,  135 => 53,  132 => 51,  129 => 49,  127 => 48,  125 => 47,  122 => 45,  120 => 44,  118 => 43,  115 => 41,  112 => 39,  110 => 38,  107 => 36,  105 => 35,  101 => 31,  99 => 30,  97 => 29,  95 => 28,  93 => 27,  89 => 25,  87 => 24,  85 => 23,  83 => 22,  80 => 21,  78 => 19,  75 => 17,  71 => 15,  69 => 14,  67 => 12,  64 => 10,  62 => 9,  60 => 8,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  49 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Core/tab_menu_template.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/Core/tab_menu_template.html.twig");
    }
}
