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

/* knp_menu.html.twig */
class __TwigTemplate_7dfd7b610def1a6b071e3fc70cac3184ed1669a6e98208a01fce63d5cced3bf8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = [
            'compressed_root' => [$this, 'block_compressed_root'],
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = [])
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        // line 18
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", []);
        // line 19
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = [])
    {
        // line 23
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", []) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", []) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", []))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->macro_attributes(($context["listAttributes"] ?? null));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 31
    public function block_children($context, array $blocks = [])
    {
        // line 33
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 34
        $context["currentItem"] = ($context["item"] ?? null);
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", []))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["depth" => (twig_get_attribute($this->env, $this->source, ($context["currentOptions"] ?? null), "depth", []) - 1)]);
        }
        // line 40
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [])) && (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", []) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["matchingDepth" => (twig_get_attribute($this->env, $this->source, ($context["currentOptions"] ?? null), "matchingDepth", []) - 1)]);
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentItem"] ?? null), "children", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? null);
        // line 48
        $context["options"] = ($context["currentOptions"] ?? null);
    }

    // line 51
    public function block_item($context, array $blocks = [])
    {
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [])) {
            // line 54
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method"))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method")]) : ([]));
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [])]);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 57
($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [])], "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [])]);
            }
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", [])) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", [])]);
            }
            // line 63
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", [])) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", [])]);
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", []) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", []) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [])) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", []))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [])]);
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", []))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", [])]);
            }
            // line 76
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", []);
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->macro_attributes(($context["attributes"] ?? null));
            echo ">";
            // line 83
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [])) && ( !twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method") || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", [])))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method"))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method")]) : ([]));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", []))]);
            // line 91
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", []), ["class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")]);
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 97
    public function block_linkElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", []), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", []));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 99
    public function block_spanElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", []));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 101
    public function block_label($context, array $blocks = [])
    {
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", []) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", [0 => "safe_label", 1 => false], "method"))) {
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", []);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", []), "html", null, true);
        }
    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 6,  285 => 5,  281 => 4,  269 => 3,  259 => 101,  248 => 99,  235 => 97,  226 => 92,  224 => 91,  222 => 90,  220 => 89,  216 => 86,  212 => 84,  210 => 83,  206 => 82,  203 => 81,  200 => 78,  198 => 77,  196 => 76,  193 => 73,  190 => 72,  187 => 71,  185 => 70,  182 => 69,  179 => 68,  176 => 66,  173 => 64,  171 => 63,  168 => 61,  166 => 60,  163 => 58,  161 => 57,  159 => 56,  157 => 55,  155 => 54,  153 => 52,  150 => 51,  146 => 48,  144 => 47,  127 => 44,  110 => 43,  107 => 41,  105 => 40,  102 => 37,  100 => 36,  98 => 34,  96 => 33,  93 => 31,  85 => 26,  80 => 25,  77 => 24,  75 => 23,  72 => 22,  68 => 19,  66 => 18,  63 => 17,  56 => 13,  54 => 12,  51 => 11,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "knp_menu.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
