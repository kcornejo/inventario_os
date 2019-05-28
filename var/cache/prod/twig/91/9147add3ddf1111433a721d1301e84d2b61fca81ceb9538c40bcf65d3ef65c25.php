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

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_ce936da91dab9686ecd4025c9dba9cfd1592ae2eda31b7e2ad25c6814d1c1ed8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Menu/sonata_menu.html.twig", 1);
        $this->blocks = [
            'root' => [$this, 'block_root'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
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
    public function block_root($context, array $blocks = [])
    {
        // line 4
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", []), ["class" => "sidebar-menu", "data-widget" => "tree"]);
        // line 5
        $context["request"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "request"], "method")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "request"], "method")) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [])));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 9
    public function block_item($context, array $blocks = [])
    {
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [])) {
            // line 12
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "roles"], "method")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "role_super_admin"], "method")));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "roles"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? null)) {
                    // line 14
                    $context["display"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", []) && (((isset($context["display"]) || array_key_exists("display", $context))) ? (_twig_default_filter(($context["display"] ?? null))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["branch_class" => "treeview", "currentClass" => "active", "ancestorClass" => "active"]);
            // line 20
            twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method") . " active"))], "method");
            // line 21
            twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method") . " treeview-menu"))], "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
    }

    // line 26
    public function block_linkElement($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "label_catalogue", 1 => "messages"], "method");
        // line 29
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "on_top"], "method", true, true) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "on_top"], "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method"), (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", []) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", []) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_spanElement($context, array $blocks = [])
    {
        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "label_catalogue"], "method");
        // line 43
        echo "            ";
        $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? null);
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "keep_open"], "method", true, true) ||  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "keep_open"], "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_label($context, array $blocks = [])
    {
        if (((isset($context["is_link"]) || array_key_exists("is_link", $context)) && ($context["is_link"] ?? null))) {
            echo (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null))) : (""));
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", []) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "safe_label", 1 => false], "method"))) {
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", []);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", []), [], (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context))) ? (_twig_default_filter(($context["translation_domain"] ?? null), "messages")) : ("messages"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Menu/sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 53,  158 => 49,  155 => 47,  153 => 46,  151 => 45,  146 => 44,  143 => 43,  141 => 42,  138 => 41,  135 => 40,  132 => 39,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  112 => 31,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  89 => 22,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  72 => 14,  67 => 13,  65 => 12,  63 => 10,  60 => 9,  55 => 6,  53 => 5,  51 => 4,  48 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Menu/sonata_menu.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/Menu/sonata_menu.html.twig");
    }
}
