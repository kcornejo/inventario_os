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

/* @SonataAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_47de76a81b2f2f7ed9b5c6ec0bb8f01dfdfa976ee937cda453444b85b0d798e9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 12);
        $this->blocks = [
            'form_errors' => [$this, 'block_form_errors'],
            'sonata_help' => [$this, 'block_sonata_help'],
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'form_row' => [$this, 'block_form_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'sonata_type_native_collection_widget_row' => [$this, 'block_sonata_type_native_collection_widget_row'],
            'sonata_type_native_collection_widget' => [$this, 'block_sonata_type_native_collection_widget'],
            'sonata_type_immutable_array_widget' => [$this, 'block_sonata_type_immutable_array_widget'],
            'sonata_type_immutable_array_widget_row' => [$this, 'block_sonata_type_immutable_array_widget_row'],
            'sonata_type_model_autocomplete_widget' => [$this, 'block_sonata_type_model_autocomplete_widget'],
            'sonata_type_choice_field_mask_widget' => [$this, 'block_sonata_type_choice_field_mask_widget'],
            'sonata_type_choice_multiple_sortable' => [$this, 'block_sonata_type_choice_multiple_sortable'],
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

    // line 14
    public function block_form_errors($context, array $blocks = [])
    {
        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 16
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [])) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", []), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [])) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
    }

    // line 26
    public function block_sonata_help($context, array $blocks = [])
    {
        // line 27
        ob_start();
        // line 28
        if (((isset($context["sonata_help"]) || array_key_exists("sonata_help", $context)) && ($context["sonata_help"] ?? null))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? null);
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_form_widget($context, array $blocks = [])
    {
        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 40
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 41
        echo "    ";
        if ((($context["type"] ?? null) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control")]);
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control")]);
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 50
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_number_widget($context, array $blocks = [])
    {
        // line 54
        $this->displayParentBlock("number_widget", $context, $blocks);
        echo "
    ";
        // line 55
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 58
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 59
        $this->displayParentBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 60
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 64
    public function block_money_widget($context, array $blocks = [])
    {
        // line 65
        if ((($context["money_pattern"] ?? null) == "{{ widget }}")) {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 68
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]));
            // line 69
            echo "        ";
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? null))) {
                // line 70
                echo "            <div class=\"input-group\">";
                // line 71
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 72
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 74
($context["money_pattern"] ?? null))) {
                // line 75
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 76
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>";
                // line 77
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 78
                echo "</div>
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 84
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 85
        echo "    ";
        ob_start();
        // line 86
        echo "        ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 87
        echo "        <div class=\"input-group\">
            ";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
        ";
        // line 91
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 95
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 96
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 97
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 100
            echo "<div class=\"checkbox\">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 102
            echo "</div>";
        }
    }

    // line 106
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 107
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 108
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 111
            echo "<div class=\"radio\">";
            // line 112
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 113
            echo "</div>";
        }
    }

    // line 118
    public function block_form_label($context, array $blocks = [])
    {
        // line 119
        ob_start();
        // line 120
        echo "    ";
        if (( !(($context["label"] ?? null) === false) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", [])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["form_type"] ?? null) : null) == "horizontal"))) {
            // line 121
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 122
            echo "    ";
        }
        // line 123
        echo "
    ";
        // line 124
        $context["label_class"] = ((((isset($context["label_class"]) || array_key_exists("label_class", $context))) ? (_twig_default_filter(($context["label_class"] ?? null), "")) : ("")) . " control-label");
        // line 125
        echo "
    ";
        // line 126
        if ( !(($context["label"] ?? null) === false)) {
            // line 127
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => ((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["label_class"] ?? null))]);
            // line 128
            echo "
        ";
            // line 129
            if ( !($context["compound"] ?? null)) {
                // line 130
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
                // line 131
                echo "        ";
            }
            // line 132
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 133
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 134
                echo "        ";
            }
            // line 135
            echo "
        ";
            // line 136
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 137
                if (((isset($context["label_format"]) || array_key_exists("label_format", $context)) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                    // line 138
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 139
($context["name"] ?? null), "%id%" =>                     // line 140
($context["id"] ?? null)]);
                } else {
                    // line 143
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 146
            echo "
        <label";
            // line 147
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
            // line 148
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 149
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } elseif ( !twig_get_attribute($this->env, $this->source,             // line 150
($context["sonata_admin"] ?? null), "admin", [])) {
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 153
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "translationDomain", [])) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "translationDomain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
                echo "
            ";
            }
            // line 155
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 160
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 161
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 164
    public function block_radio_label($context, array $blocks = [])
    {
        // line 165
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 168
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 169
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [])) {
            // line 170
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "translationDomain", []);
            // line 171
            echo "    ";
        }
        // line 172
        echo "    ";
        // line 173
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 174
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 175
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 176
                echo "        ";
            }
            // line 177
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 178
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 179
                echo "        ";
            }
            // line 180
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 181
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        <label";
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
            echo ">";
            // line 184
            echo ($context["widget"] ?? null);
            // line 185
            if ( !(($context["label"] ?? null) === false)) {
                // line 186
                echo "<span class=\"control-label__text\">
                    ";
                // line 187
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 188
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 190
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                }
                // line 192
                echo "</span>";
            }
            // line 194
            echo "</label>
    ";
        }
    }

    // line 198
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 199
        ob_start();
        // line 200
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " list-unstyled")]);
        // line 201
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 203
            echo "        <li>
            ";
            // line 204
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>             // line 207
($context["choice_translation_domain"] ?? null)]);
            // line 208
            echo " ";
            // line 209
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 215
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 216
        ob_start();
        // line 217
        echo "    ";
        if (((($context["required"] ?? null) && (isset($context["placeholder"]) || array_key_exists("placeholder", $context))) && (null === ($context["placeholder"] ?? null)))) {
            // line 218
            echo "        ";
            $context["required"] = false;
            // line 219
            echo "    ";
        } elseif ((((((($context["required"] ?? null) && (isset($context["empty_value"]) || array_key_exists("empty_value", $context))) && (isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context))) && (null === ($context["empty_value"] ?? null))) &&  !($context["empty_value_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 220
            echo "        ";
            $context["required"] = false;
            // line 221
            echo "    ";
        }
        // line 222
        echo "
    ";
        // line 223
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control")]);
        // line 224
        echo "    ";
        if ((((isset($context["sortable"]) || array_key_exists("sortable", $context)) && ($context["sortable"] ?? null)) && ($context["multiple"] ?? null))) {
            // line 225
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 227
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? null)) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 228
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 229
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 230
                if ((($context["empty_value"] ?? null) != "")) {
                    // line 231
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [])) {
                        // line 232
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["empty_value"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 234
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["empty_value"] ?? null), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "translationDomain", [])), "html", null, true);
                    }
                    // line 236
                    echo "                    ";
                }
                // line 237
                echo "                </option>
            ";
            } elseif ((            // line 238
(isset($context["placeholder"]) || array_key_exists("placeholder", $context)) &&  !(null === ($context["placeholder"] ?? null)))) {
                // line 239
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 240
                if ((($context["placeholder"] ?? null) != "")) {
                    // line 241
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [])) {
                        // line 242
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 244
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "translationDomain", [])), "html", null, true);
                    }
                    // line 246
                    echo "                    ";
                }
                // line 247
                echo "                </option>
            ";
            }
            // line 249
            echo "            ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
                // line 250
                echo "                ";
                $context["options"] = ($context["preferred_choices"] ?? null);
                // line 251
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 252
                if ((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0)) {
                    // line 253
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                    echo "</option>
                ";
                }
                // line 255
                echo "            ";
            }
            // line 256
            echo "            ";
            $context["options"] = ($context["choices"] ?? null);
            // line 257
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 263
    public function block_date_widget($context, array $blocks = [])
    {
        // line 264
        ob_start();
        // line 265
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 266
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 268
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (($context["row"] ?? null) == true))) {
                // line 269
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " row")]);
                // line 270
                echo "        ";
            }
            // line 271
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-4")) : ("col-sm-4"));
            // line 272
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 273
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" => (((("<div class=\"" .             // line 274
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", []), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 275
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", []), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 276
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", []), 'widget')) . "</div>")]);
            // line 277
            echo "
        </div>
    ";
        }
        // line 280
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 281
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 286
    public function block_time_widget($context, array $blocks = [])
    {
        // line 287
        ob_start();
        // line 288
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 289
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 291
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (($context["row"] ?? null) == true))) {
                // line 292
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " row")]);
                // line 293
                echo "        ";
            }
            // line 294
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-6")) : ("col-sm-6"));
            // line 295
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 296
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 297
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", []), 'widget');
            echo "
            </div>
            ";
            // line 299
            if (($context["with_minutes"] ?? null)) {
                // line 300
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 301
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", []), 'widget');
                echo "
                </div>
            ";
            }
            // line 304
            echo "            ";
            if (($context["with_seconds"] ?? null)) {
                // line 305
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 306
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", []), 'widget');
                echo "
                </div>
            ";
            }
            // line 309
            echo "        </div>
    ";
        }
        // line 311
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 315
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 316
        ob_start();
        // line 317
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 318
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 320
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " row")]);
            // line 321
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 322
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", []), 'errors');
            echo "
            ";
            // line 323
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", []), 'errors');
            echo "

            ";
            // line 325
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", []), "vars", []), "widget", []) == "single_text")) {
                // line 326
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 327
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", []), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 330
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", []), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 332
            echo "
            ";
            // line 333
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", []), "vars", []), "widget", []) == "single_text")) {
                // line 334
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 335
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", []), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 338
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", []), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 340
            echo "        </div>
    ";
        }
        // line 342
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 343
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 348
    public function block_form_row($context, array $blocks = [])
    {
        // line 349
        echo "    ";
        $context["show_label"] = (($context["show_label"]) ?? (true));
        // line 350
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 351
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true), "options", [], "any", true, true)) {
            // line 352
            echo "            ";
            $context["label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true), "options", [], "any", false, true), "name", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true), "options", [], "any", false, true), "name", []), ($context["label"] ?? null))) : (($context["label"] ?? null)));
            // line 353
            echo "        ";
        }
        // line 354
        echo "
        ";
        // line 355
        $context["div_class"] = "sonata-ba-field";
        // line 356
        echo "
        ";
        // line 357
        if ((($context["label"] ?? null) === false)) {
            // line 358
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-collection-row-without-label");
            // line 359
            echo "        ";
        }
        // line 360
        echo "
        ";
        // line 361
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", [])) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["form_type"] ?? null) : null) == "horizontal"))) {
            // line 362
            echo "            ";
            // line 363
            echo "            ";
            if (((($context["label"] ?? null) === false) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "checked", [], "any", true, true))) {
                // line 364
                echo "                ";
                if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", []), "vars", []), "block_prefixes", []))) {
                    // line 365
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-12");
                    // line 366
                    echo "                ";
                } else {
                    // line 367
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9 col-sm-offset-3");
                    // line 368
                    echo "                ";
                }
                // line 369
                echo "            ";
            } else {
                // line 370
                echo "                ";
                $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9");
                // line 371
                echo "            ";
            }
            // line 372
            echo "        ";
        }
        // line 373
        echo "
        ";
        // line 374
        if (($context["show_label"] ?? null)) {
            // line 375
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 377
        echo "
        ";
        // line 378
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ($context["sonata_admin_enabled"] ?? null))) {
            // line 379
            echo "            ";
            $context["div_class"] = ((((($context["div_class"] ?? null) . " sonata-ba-field-") . twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [])) . "-") . twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", []));
            // line 380
            echo "        ";
        }
        // line 381
        echo "
        ";
        // line 382
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 383
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-ba-field-error");
            // line 384
            echo "        ";
        }
        // line 385
        echo "
        <div class=\"";
        // line 386
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 387
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 388
        echo "
            ";
        // line 389
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 390
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 391
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 394
        echo "
            ";
        // line 395
        if ((((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ($context["sonata_admin_enabled"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true), "help", []), false)) : (false)))) {
            // line 396
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "help", []), [], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "translationDomain", [])) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", []), "translationDomain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", []))));
            echo "</span>
            ";
        }
        // line 398
        echo "        </div>
    </div>
";
    }

    // line 402
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 403
        $context["show_label"] = false;
        // line 404
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 407
    public function block_radio_row($context, array $blocks = [])
    {
        // line 408
        $context["show_label"] = false;
        // line 409
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 412
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = [])
    {
        // line 413
        ob_start();
        // line 414
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 415
        if (($context["allow_delete"] ?? null)) {
            // line 416
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 424
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'row', ["label" => false]);
        echo "
        ";
        // line 425
        if (($context["allow_delete"] ?? null)) {
            // line 426
            echo "                </div>
            </div>
        ";
        }
        // line 429
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 433
    public function block_sonata_type_native_collection_widget($context, array $blocks = [])
    {
        // line 434
        ob_start();
        // line 435
        echo "    ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 436
            echo "        ";
            $context["child"] = ($context["prototype"] ?? null);
            // line 437
            echo "        ";
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? null);
            // line 438
            echo "        ";
            $context["allow_delete"] = true;
            // line 439
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", []), "name", []), "class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : (""))]);
            // line 440
            echo "        ";
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? null);
            // line 441
            echo "    ";
        }
        // line 442
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 443
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 445
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        ";
        // line 448
        if (($context["allow_add"] ?? null)) {
            // line 449
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 451
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 455
    public function block_sonata_type_immutable_array_widget($context, array $blocks = [])
    {
        // line 456
        echo "    ";
        ob_start();
        // line 457
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 458
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

            ";
        // line 460
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

            ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 463
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "
            ";
        // line 466
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 471
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = [])
    {
        // line 472
        echo "    ";
        ob_start();
        // line 473
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", []), "errors", [])) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 475
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'label');
        echo "

            ";
        // line 477
        $context["div_class"] = "";
        // line 478
        echo "            ";
        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", [])) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["form_type"] ?? null) : null) == "horizontal")) {
            // line 479
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 480
            echo "            ";
        }
        // line 481
        echo "
            <div class=\"";
        // line 482
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", []), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", []), "errors", [])) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 483
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 484
        echo "                ";
        $context["sonata_help"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", []), "sonata_help", []);
        // line 485
        echo "                ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
            </div>

            ";
        // line 488
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", []), "errors", [])) > 0)) {
            // line 489
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 490
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 493
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 497
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = [])
    {
        // line 498
        echo "    ";
        $this->loadTemplate(($context["template"] ?? null), "@SonataAdmin/Form/form_admin_fields.html.twig", 498)->display($context);
    }

    // line 501
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = [])
    {
        // line 502
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 504
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? null), 0, ((twig_length_filter($this->env, ($context["id"] ?? null)) - twig_length_filter($this->env, ($context["name"] ?? null))) - 1));
        // line 505
        echo "    ";
        if (($context["expanded"] ?? null)) {
            // line 506
            echo "        ";
            $context["js_selector"] = (((("#" . ($context["main_form_name"] ?? null)) . "_") . ($context["name"] ?? null)) . " input");
            // line 507
            echo "        ";
            $context["js_event"] = "ifChecked";
            // line 508
            echo "    ";
        } else {
            // line 509
            echo "        ";
            $context["js_selector"] = ((("#" . ($context["main_form_name"] ?? null)) . "_") . ($context["name"] ?? null));
            // line 510
            echo "        ";
            $context["js_event"] = "change";
            // line 511
            echo "    ";
        }
        // line 512
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 514
        echo json_encode(($context["all_fields"] ?? null));
        echo ",
                map = ";
        // line 515
        echo json_encode(($context["map"] ?? null));
        echo ",
                showMaskChoiceEl = jQuery(\"";
        // line 516
        echo twig_escape_filter($this->env, ($context["js_selector"] ?? null), "html", null, true);
        echo "\");

            showMaskChoiceEl.on(\"";
        // line 518
        echo twig_escape_filter($this->env, ($context["js_event"] ?? null), "html", null, true);
        echo "\", function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 525
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 529
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        jQuery(controlGroupIdFunc(field)).show();
                    });
                }
            }

            ";
        // line 546
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 547
            echo "                choice_field_mask_show(showMaskChoiceEl.val());
            ";
        } else {
            // line 549
            echo "                choice_field_mask_show('";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "');
            ";
        }
        // line 551
        echo "        });

    </script>
";
    }

    // line 556
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = [])
    {
        // line 557
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 561
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "'), ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "choices", []));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1459 => 561,  1447 => 557,  1444 => 556,  1437 => 551,  1431 => 549,  1427 => 547,  1425 => 546,  1405 => 529,  1398 => 525,  1388 => 518,  1383 => 516,  1379 => 515,  1375 => 514,  1371 => 512,  1368 => 511,  1365 => 510,  1362 => 509,  1359 => 508,  1356 => 507,  1353 => 506,  1350 => 505,  1347 => 504,  1342 => 502,  1339 => 501,  1334 => 498,  1331 => 497,  1325 => 493,  1319 => 490,  1316 => 489,  1314 => 488,  1307 => 485,  1304 => 484,  1301 => 483,  1289 => 482,  1286 => 481,  1283 => 480,  1280 => 479,  1277 => 478,  1275 => 477,  1270 => 475,  1258 => 473,  1255 => 472,  1252 => 471,  1244 => 466,  1241 => 465,  1224 => 463,  1207 => 462,  1202 => 460,  1197 => 458,  1192 => 457,  1189 => 456,  1186 => 455,  1180 => 451,  1176 => 449,  1174 => 448,  1169 => 447,  1152 => 445,  1135 => 444,  1131 => 443,  1126 => 442,  1123 => 441,  1120 => 440,  1117 => 439,  1114 => 438,  1111 => 437,  1108 => 436,  1105 => 435,  1103 => 434,  1100 => 433,  1094 => 429,  1089 => 426,  1087 => 425,  1082 => 424,  1072 => 416,  1070 => 415,  1067 => 414,  1065 => 413,  1062 => 412,  1057 => 409,  1055 => 408,  1052 => 407,  1047 => 404,  1045 => 403,  1042 => 402,  1036 => 398,  1030 => 396,  1028 => 395,  1025 => 394,  1019 => 391,  1016 => 390,  1014 => 389,  1011 => 388,  1008 => 387,  1004 => 386,  1001 => 385,  998 => 384,  995 => 383,  993 => 382,  990 => 381,  987 => 380,  984 => 379,  982 => 378,  979 => 377,  973 => 375,  971 => 374,  968 => 373,  965 => 372,  962 => 371,  959 => 370,  956 => 369,  953 => 368,  950 => 367,  947 => 366,  944 => 365,  941 => 364,  938 => 363,  936 => 362,  934 => 361,  931 => 360,  928 => 359,  925 => 358,  923 => 357,  920 => 356,  918 => 355,  915 => 354,  912 => 353,  909 => 352,  907 => 351,  898 => 350,  895 => 349,  892 => 348,  883 => 343,  880 => 342,  876 => 340,  870 => 338,  864 => 335,  861 => 334,  859 => 333,  856 => 332,  850 => 330,  844 => 327,  841 => 326,  839 => 325,  834 => 323,  830 => 322,  825 => 321,  822 => 320,  816 => 318,  813 => 317,  811 => 316,  808 => 315,  800 => 311,  796 => 309,  790 => 306,  785 => 305,  782 => 304,  776 => 301,  771 => 300,  769 => 299,  764 => 297,  760 => 296,  755 => 295,  752 => 294,  749 => 293,  746 => 292,  743 => 291,  737 => 289,  734 => 288,  732 => 287,  729 => 286,  720 => 281,  717 => 280,  712 => 277,  710 => 276,  709 => 275,  708 => 274,  707 => 273,  702 => 272,  699 => 271,  696 => 270,  693 => 269,  690 => 268,  684 => 266,  681 => 265,  679 => 264,  676 => 263,  666 => 257,  663 => 256,  660 => 255,  654 => 253,  652 => 252,  647 => 251,  644 => 250,  641 => 249,  637 => 247,  634 => 246,  631 => 244,  628 => 242,  625 => 241,  623 => 240,  616 => 239,  614 => 238,  611 => 237,  608 => 236,  605 => 234,  602 => 232,  599 => 231,  597 => 230,  590 => 229,  588 => 228,  580 => 227,  574 => 225,  571 => 224,  569 => 223,  566 => 222,  563 => 221,  560 => 220,  557 => 219,  554 => 218,  551 => 217,  549 => 216,  546 => 215,  540 => 211,  533 => 209,  531 => 208,  529 => 207,  528 => 204,  525 => 203,  521 => 202,  516 => 201,  513 => 200,  511 => 199,  508 => 198,  502 => 194,  499 => 192,  496 => 190,  493 => 188,  491 => 187,  488 => 186,  486 => 185,  484 => 184,  469 => 183,  466 => 182,  463 => 181,  460 => 180,  457 => 179,  454 => 178,  451 => 177,  448 => 176,  445 => 175,  442 => 174,  439 => 173,  437 => 172,  434 => 171,  431 => 170,  428 => 169,  425 => 168,  421 => 165,  418 => 164,  414 => 161,  411 => 160,  404 => 155,  398 => 153,  395 => 151,  393 => 150,  391 => 149,  389 => 148,  374 => 147,  371 => 146,  367 => 143,  364 => 140,  363 => 139,  362 => 138,  360 => 137,  358 => 136,  355 => 135,  352 => 134,  349 => 133,  346 => 132,  343 => 131,  340 => 130,  338 => 129,  335 => 128,  332 => 127,  330 => 126,  327 => 125,  325 => 124,  322 => 123,  319 => 122,  316 => 121,  313 => 120,  311 => 119,  308 => 118,  303 => 113,  301 => 112,  299 => 111,  296 => 109,  294 => 108,  292 => 107,  289 => 106,  284 => 102,  282 => 101,  280 => 100,  277 => 98,  275 => 97,  273 => 96,  270 => 95,  263 => 91,  257 => 88,  254 => 87,  251 => 86,  248 => 85,  245 => 84,  240 => 81,  237 => 80,  233 => 78,  231 => 77,  228 => 76,  225 => 75,  223 => 74,  217 => 72,  215 => 71,  213 => 70,  210 => 69,  207 => 68,  204 => 66,  202 => 65,  199 => 64,  195 => 60,  191 => 59,  188 => 58,  184 => 55,  180 => 54,  177 => 53,  171 => 50,  166 => 49,  163 => 48,  160 => 47,  153 => 44,  150 => 43,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  134 => 36,  130 => 35,  127 => 34,  118 => 29,  116 => 28,  114 => 27,  111 => 26,  106 => 23,  102 => 22,  99 => 21,  90 => 19,  86 => 18,  83 => 17,  78 => 16,  76 => 15,  73 => 14,  27 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Form/form_admin_fields.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
