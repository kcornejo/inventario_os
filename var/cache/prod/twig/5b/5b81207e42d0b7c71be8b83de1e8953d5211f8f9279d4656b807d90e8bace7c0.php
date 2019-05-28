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

/* @SonataAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_b482c1a1f17ff3a665e136c9817d25e28784054dc8a51a97eb8cc9d771623403 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = [
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'sonata_type_model_autocomplete_widget' => [$this, 'block_sonata_type_model_autocomplete_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control")]);
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control")]);
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control")]);
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : (""))]);
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []) . " ") . ((((isset($context["widget_type"]) || array_key_exists("widget_type", $context)) && (($context["widget_type"] ?? null) != ""))) ? (((((($context["multiple"] ?? null)) ? ("checkbox") : ("radio")) . "-") . ($context["widget_type"] ?? null))) : ("")))]);
        // line 37
        echo "        ";
        if (($context["expanded"] ?? null)) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : (""))]);
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context)) && (($context["widget_type"] ?? null) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo ((($context["multiple"] ?? null)) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", []), "")) : (""))]]);
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", []), "label", []), [], ($context["translation_domain"] ?? null)), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context)) && (($context["widget_type"] ?? null) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        if (        $this->hasBlock("form_message", $context, $blocks)) {
            // line 54
            echo "            ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 56
        echo "        ";
        if (($context["expanded"] ?? null)) {
            // line 57
            echo "            </div>
        ";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        ob_start();
        // line 64
        echo "        ";
        if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
            // line 65
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
            // line 66
            echo "        ";
        }
        // line 67
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []), "vars", []), "block_prefixes", [])))) {
            // line 68
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if ((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []), "vars", []), "block_prefixes", []))) && (isset($context["label_render"]) || array_key_exists("label_render", $context)))) {
            // line 72
            echo "            <label class=\"";
            if (((isset($context["inline"]) || array_key_exists("inline", $context)) && ($context["inline"] ?? null))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 74
        echo "
        <input type=\"checkbox\" ";
        // line 75
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 76
        if (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []), "vars", []), "block_prefixes", [])))) {
            // line 77
            echo "            ";
            if (((isset($context["label_render"]) || array_key_exists("label_render", $context)) && twig_in_filter(($context["widget_checkbox_label"] ?? null), [0 => "both", 1 => "widget"]))) {
                // line 78
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []), "vars", []), "block_prefixes", [])))) {
            // line 83
            echo "            </div>
            ";
            // line 84
            if (            $this->hasBlock("form_message", $context, $blocks)) {
                // line 85
                echo "                ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
            ";
            }
            // line 87
            echo "        ";
        }
        // line 88
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = [])
    {
        // line 92
        echo "    ";
        $this->loadTemplate(($context["template"] ?? null), "@SonataAdmin/Form/filter_admin_fields.html.twig", 92)->display($context);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 92,  271 => 91,  266 => 88,  263 => 87,  257 => 85,  255 => 84,  252 => 83,  249 => 82,  246 => 81,  239 => 78,  236 => 77,  234 => 76,  222 => 75,  219 => 74,  211 => 72,  209 => 71,  206 => 70,  202 => 68,  199 => 67,  196 => 66,  193 => 65,  190 => 64,  187 => 63,  184 => 62,  179 => 59,  175 => 57,  172 => 56,  166 => 54,  163 => 53,  157 => 52,  153 => 50,  151 => 49,  146 => 47,  142 => 46,  126 => 45,  120 => 43,  117 => 42,  112 => 41,  106 => 39,  103 => 38,  100 => 37,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  81 => 30,  78 => 29,  75 => 28,  68 => 25,  65 => 24,  62 => 23,  55 => 20,  52 => 19,  49 => 18,  27 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Form/filter_admin_fields.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
