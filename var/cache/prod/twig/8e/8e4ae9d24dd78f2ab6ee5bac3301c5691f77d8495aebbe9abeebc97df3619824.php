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

/* @SonataAdmin/CRUD/base_list_field.html.twig */
class __TwigTemplate_71bc83f9cf94527381ca16ce892e5788acf5344d94bb606f87c7234582f37f53 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'field_span_attributes' => [$this, 'block_field_span_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", []), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "row_align", [], "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", []), "row_align", []), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", false, true), "name", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "route", [], "any", false, true), "name", []), null)) : (null));
        // line 14
        echo "
    ";
        // line 15
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["field_description"] ?? null), "options", [], "any", false, true), "identifier", [], "any", true, true) &&         // line 17
($context["route"] ?? null)) && twig_get_attribute($this->env, $this->source,         // line 18
($context["admin"] ?? null), "hasRoute", [0 => ($context["route"] ?? null)], "method")) && twig_get_attribute($this->env, $this->source,         // line 19
($context["admin"] ?? null), "hasAccess", [0 => ($context["route"] ?? null), 1 => ((twig_in_filter(($context["route"] ?? null), [0 => "show", 1 => "edit"])) ? (($context["object"] ?? null)) : (null))], "method"))) {
            // line 21
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => ($context["route"] ?? null), 1 => ($context["object"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", []), "route", []), "parameters", [])], "method"), "html", null, true);
            echo "\">";
            // line 22
            $this->displayBlock('field', $context, $blocks);
            // line 35
            echo "</a>
    ";
        } else {
            // line 37
            echo "        ";
            $context["isEditable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "editable", [], "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", []), "editable", [])) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "edit", 1 => ($context["object"] ?? null)], "method"));
            // line 38
            echo "        ";
            $context["xEditableType"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getXEditableType(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", []));
            // line 39
            echo "
        ";
            // line 40
            if ((($context["isEditable"] ?? null) && ($context["xEditableType"] ?? null))) {
                // line 41
                echo "            ";
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_set_object_field_value", twig_array_merge(((twig_get_attribute($this->env, $this->source,                 // line 43
($context["admin"] ?? null), "getPersistentParameters", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getPersistentParameters", []), [])) : ([])), ["context" => "list", "field" => twig_get_attribute($this->env, $this->source,                 // line 45
($context["field_description"] ?? null), "name", []), "objectId" => twig_get_attribute($this->env, $this->source,                 // line 46
($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"), "code" => twig_get_attribute($this->env, $this->source,                 // line 47
($context["admin"] ?? null), "code", [0 => ($context["object"] ?? null)], "method")]));
                // line 50
                echo "
            ";
                // line 51
                if (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", []) == "date") &&  !twig_test_empty(($context["value"] ?? null)))) {
                    // line 52
                    echo "                ";
                    $context["data_value"] = twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "format", [0 => "Y-m-d"], "method");
                    // line 53
                    echo "            ";
                } elseif (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", []) == "boolean") && twig_test_empty(($context["value"] ?? null)))) {
                    // line 54
                    echo "                ";
                    $context["data_value"] = 0;
                    // line 55
                    echo "            ";
                } else {
                    // line 56
                    echo "                ";
                    $context["data_value"] = ($context["value"] ?? null);
                    // line 57
                    echo "            ";
                }
                // line 58
                echo "
            <span ";
                // line 59
                $this->displayBlock('field_span_attributes', $context, $blocks);
                // line 64
                echo ">
                ";
                // line 65
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 68
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 70
            echo "    ";
        }
        // line 71
        echo "</td>
";
    }

    // line 22
    public function block_field($context, array $blocks = [])
    {
        // line 23
        echo "                ";
        ob_start();
        // line 24
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true), "collapse", [], "any", true, true)) {
            // line 25
            echo "                    ";
            $context["collapse"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", []), "collapse", []);
            // line 26
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", []), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", []), "read_more")) : ("read_more")), [], "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", []), "read_less")) : ("read_less")), [], "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 33
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 34
        echo "            ";
    }

    // line 59
    public function block_field_span_attributes($context, array $blocks = [])
    {
        echo "class=\"x-editable\"
                  data-type=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["xEditableType"] ?? null), "html", null, true);
        echo "\"
                  data-value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["data_value"] ?? null), "html", null, true);
        echo "\"
                  data-title=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "label", []), [], twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "translationDomain", [])), "html", null, true);
        echo "\"
                  data-pk=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"), "html", null, true);
        echo "\"
                  data-url=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 64,  202 => 63,  198 => 62,  194 => 61,  190 => 60,  185 => 59,  181 => 34,  178 => 33,  172 => 31,  165 => 29,  161 => 28,  157 => 27,  154 => 26,  151 => 25,  148 => 24,  145 => 23,  142 => 22,  137 => 71,  134 => 70,  128 => 68,  122 => 65,  119 => 64,  117 => 59,  114 => 58,  111 => 57,  108 => 56,  105 => 55,  102 => 54,  99 => 53,  96 => 52,  94 => 51,  91 => 50,  89 => 47,  88 => 46,  87 => 45,  86 => 43,  84 => 41,  82 => 40,  79 => 39,  76 => 38,  73 => 37,  69 => 35,  67 => 22,  63 => 21,  61 => 19,  60 => 18,  59 => 17,  58 => 16,  57 => 15,  54 => 14,  52 => 13,  40 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_list_field.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_field.html.twig");
    }
}
