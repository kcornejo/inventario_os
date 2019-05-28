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

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_4bef2bbf097e5bff51fbfc85d82cec75b549b570f66052b2a000b3874e41dc04 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'list_table' => [$this, 'block_list_table'],
            'list_header' => [$this, 'block_list_header'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
            'list_footer' => [$this, 'block_list_footer'],
            'batch' => [$this, 'block_batch'],
            'batch_javascript' => [$this, 'block_batch_javascript'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'pager_results' => [$this, 'block_pager_results'],
            'pager_links' => [$this, 'block_pager_links'],
            'list_filters_actions' => [$this, 'block_list_filters_actions'],
            'list_filters' => [$this, 'block_list_filters'],
            'sonata_list_filter_group_class' => [$this, 'block_sonata_list_filter_group_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = [])
    {
        // line 19
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", [0 => ($context["action"] ?? null)], "method"), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        // line 30
        echo "
    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", []) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", []), "subject", []))) {
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", []), "toString", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", []), "subject", [])], "method"), 15)], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 36
    public function block_navbar_title($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_list_table($context, array $blocks = [])
    {
        // line 41
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 42
        $context["batchactions"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "batchactions", []);
        // line 43
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method") && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 44
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "batch", 1 => ["filter" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "filterParameters", [])]], "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\">
        ";
        }
        // line 47
        echo "
        ";
        // line 49
        echo "        <div class=\"box box-primary\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "pager", []), "lastPage", []) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 50
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "results", [])) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 51
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.list.table.top", ["admin" => ($context["admin"] ?? null)]]);
        echo "

                ";
        // line 53
        $this->displayBlock('list_header', $context, $blocks);
        // line 54
        echo "
                ";
        // line 55
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "results", [])) > 0)) {
            // line 56
            echo "                    <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        ";
            // line 57
            $this->displayBlock('table_header', $context, $blocks);
            // line 96
            echo "
                        ";
            // line 97
            $this->displayBlock('table_body', $context, $blocks);
            // line 102
            echo "
                        ";
            // line 103
            $this->displayBlock('table_footer', $context, $blocks);
            // line 105
            echo "                    </table>
                ";
        } else {
            // line 107
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 125
            echo "                ";
        }
        // line 126
        echo "
                ";
        // line 127
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.list.table.bottom", ["admin" => ($context["admin"] ?? null)]]);
        echo "
            </div>
            ";
        // line 129
        $this->displayBlock('list_footer', $context, $blocks);
        // line 230
        echo "        </div>
        ";
        // line 231
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method") && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 232
            echo "            </form>
        ";
        }
        // line 234
        echo "    </div>
";
    }

    // line 53
    public function block_list_header($context, array $blocks = [])
    {
    }

    // line 57
    public function block_table_header($context, array $blocks = [])
    {
        // line 58
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", []), "elements", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 61
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method") && (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "code"], "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                // line 62
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 65
$context["field_description"], "getOption", [0 => "code"], "method") == "_select")) {
                // line 66
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 67
$context["field_description"], "name", []) == "_action") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "isXmlHttpRequest", []))) {
                // line 68
                echo "                                            ";
                // line 69
                echo "                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "ajax_hidden"], "method") == true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "isXmlHttpRequest", []))) {
                // line 70
                echo "                                            ";
                // line 71
                echo "                                        ";
            } else {
                // line 72
                echo "                                            ";
                $context["sortable"] = false;
                // line 73
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, true), "sortable", [], "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", []), "sortable", []))) {
                    // line 74
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 75
                    echo "                                                ";
                    $context["sort_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", []), "sortparameters", [0 => $context["field_description"], 1 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [])], "method");
                    // line 76
                    echo "                                                ";
                    $context["current"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "values", []), "_sort_by", []) == $context["field_description"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "values", []), "_sort_by", []), "name", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sort_parameters"] ?? null), "filter", []), "_sort_by", [])));
                    // line 77
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 78
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "values", []), "_sort_order", [])) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", []), "_sort_order", [])));
                    // line 79
                    echo "                                            ";
                }
                // line 80
                echo "
                                            ";
                // line 81
                ob_start();
                // line 82
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", []), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? null), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, true), "header_class", [], "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", []), "header_class", []), "html", null, true);
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, true), "header_style", [], "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", []), "header_style", []), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 83
                if (($context["sortable"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list", 1 => twig_array_merge(($context["sort_parameters"] ?? null), ["_list_mode" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", [], "method")])], "method"), "html", null, true);
                    echo "\">";
                }
                // line 84
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method")) {
                    // line 85
                    echo "                                                        <i class=\"sonata-ba-list-field-header-label-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method"), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                                    ";
                }
                // line 87
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", []), [], twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [])), "html", null, true);
                echo "
                                                    ";
                // line 88
                if (($context["sortable"] ?? null)) {
                    echo "</a>";
                }
                // line 89
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 91
                echo "                                        ";
            }
            // line 92
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 97
    public function block_table_body($context, array $blocks = [])
    {
        // line 98
        echo "                            <tbody>
                                ";
        // line 99
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate(("outer_list_rows_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", [], "method")), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 99)->display($context);
        // line 100
        echo "                            </tbody>
                        ";
    }

    // line 103
    public function block_table_footer($context, array $blocks = [])
    {
        // line 104
        echo "                        ";
    }

    // line 107
    public function block_no_result_content($context, array $blocks = [])
    {
        // line 108
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 116
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "xmlHttpRequest", [])) {
            // line 117
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 118
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("button_create", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 118)->display($context);
            // line 119
            echo "                                    </ul>
                                    ";
        }
        // line 121
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
    }

    // line 129
    public function block_list_footer($context, array $blocks = [])
    {
        // line 130
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "results", [])) > 0)) {
            // line 131
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 133
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "isXmlHttpRequest", [])) {
                // line 134
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 135
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                    // line 136
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 184
                    echo "                                    ";
                }
                // line 185
                echo "                                </div>


                                ";
                // line 189
                echo "                                ";
                $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter(($context["export_formats"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "exportFormats", []))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "exportFormats", [])));
                // line 190
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 192
                if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "export"], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "export"], "method")) && twig_length_filter($this->env, ($context["export_formats"] ?? null)))) {
                    // line 193
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 196
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_export_download", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["export_formats"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 201
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 202
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "export", 1 => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", []), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), 1 => 0], "method") + ["format" => $context["format"]])], "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 204
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("export_format_" . $context["format"]), [], "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 213
                echo "
                                    ";
                // line 214
                $this->displayBlock('pager_results', $context, $blocks);
                // line 217
                echo "                                </div>
                            ";
            }
            // line 219
            echo "                        </div>

                        ";
            // line 221
            $this->displayBlock('pager_links', $context, $blocks);
            // line 227
            echo "                    </div>
                ";
        }
        // line 229
        echo "            ";
    }

    // line 136
    public function block_batch($context, array $blocks = [])
    {
        // line 137
        echo "                                            <script>
                                                ";
        // line 138
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 166
        echo "                                            </script>

                                        ";
        // line 168
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 181
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_batch", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 138
    public function block_batch_javascript($context, array $blocks = [])
    {
        // line 139
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
    }

    // line 168
    public function block_batch_actions($context, array $blocks = [])
    {
        // line 169
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", []), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", []), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all_elements", [], "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "pager", []), "nbresults", []), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 177
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["options"], "label", []), [], ((twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", []), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", []))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                            </select>
                                        ";
    }

    // line 214
    public function block_pager_results($context, array $blocks = [])
    {
        // line 215
        echo "                                        ";
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_results", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 215)->display($context);
        // line 216
        echo "                                    ";
    }

    // line 221
    public function block_pager_links($context, array $blocks = [])
    {
        // line 222
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "pager", []), "haveToPaginate", [], "method")) {
            // line 223
            echo "                                <hr/>
                                ";
            // line 224
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_links", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 224)->display($context);
            // line 225
            echo "                            ";
        }
        // line 226
        echo "                        ";
    }

    // line 237
    public function block_list_filters_actions($context, array $blocks = [])
    {
        // line 238
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "filters", []))) {
            // line 239
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_filters", [], "SonataAdminBundle"), "html", null, true);
            echo "
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "filters", []));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["show_filter"] ?? null) : null) === true) || (null === (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["show_filter"] ?? null) : null)))) {
                    // line 251
                    echo "                        ";
                    $context["filterActive"] = ((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method") || (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["show_filter"] ?? null) : null)) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isDefaultFilter", [0 => twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [])], "method"));
                    // line 252
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 253
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", []), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", []), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 254
                    echo (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method") || (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["show_filter"] ?? null) : null))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", []), [], ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [])) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 264
    public function block_list_filters($context, array $blocks = [])
    {
        // line 265
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "filters", [])) {
            // line 266
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), [0 => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("filter", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", []))]);
            // line 267
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 268
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "hasDisplayableFilters", [])) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 271
            echo (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", []) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "filters", []))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list"], "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 272
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 276
            $context["withAdvancedFilter"] = false;
            // line 277
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", []), "filters", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 278
                echo "                                    ";
                $context["filterActive"] = (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method") && (null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["show_filter"] ?? null) : null))) || ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["show_filter"] ?? null) : null) === true)) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isDefaultFilter", [0 => twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [])], "method"));
                // line 279
                echo "                                    ";
                $context["filterVisible"] = (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["show_filter"] ?? null) : null) === true) || (null === (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["show_filter"] ?? null) : null)));
                // line 280
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", []), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? null)) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? null)) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 281
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", []) === false)) {
                    // line 282
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["form"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [])] ?? null) : null), "children", [])) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["value"] ?? null) : null), "vars", []), "id", []), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", []), [], ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [])) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 284
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", []), [], "array", false, true), "children", [], "any", false, true), "type", [], "array", false, true), "vars", [], "any", false, true), "attr", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", []), [], "array", false, true), "children", [], "any", false, true), "type", [], "array", false, true), "vars", [], "any", false, true), "attr", []), [])) : ([]));
                // line 285
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 287
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["form"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [])] ?? null) : null), "children", [])) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["type"] ?? null) : null), 'widget', ["attr" => ($context["attr"] ?? null)]);
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 291
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["form"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [])] ?? null) : null), "children", [])) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["value"] ?? null) : null), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 296
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", []), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 303
                if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [])) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["advanced_filter"] ?? null) : null)) {
                    // line 304
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 305
                    echo "                                    ";
                }
                // line 306
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 311
            $context["foo"] = twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["form"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["_page"] ?? null) : null), "setRendered", [], "method");
            // line 312
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list", 1 => ["filters" => "reset"]], "method"), "html", null, true);
            echo "\">
                                        ";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_reset_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 324
            if (($context["withAdvancedFilter"] ?? null)) {
                // line 325
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 328
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_advanced_filters", [], "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 332
            echo "                            </div>
                        </div>

                        ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "persistentParameters", []));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 336
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 280
    public function block_sonata_list_filter_group_class($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  899 => 280,  890 => 338,  879 => 336,  875 => 335,  870 => 332,  863 => 328,  858 => 325,  856 => 324,  849 => 320,  845 => 319,  839 => 316,  831 => 312,  829 => 311,  823 => 307,  809 => 306,  806 => 305,  803 => 304,  801 => 303,  787 => 296,  779 => 291,  772 => 287,  768 => 285,  765 => 284,  757 => 282,  755 => 281,  738 => 280,  735 => 279,  732 => 278,  714 => 277,  712 => 276,  705 => 272,  699 => 271,  691 => 268,  688 => 267,  685 => 266,  682 => 265,  679 => 264,  671 => 258,  658 => 254,  650 => 253,  647 => 252,  644 => 251,  639 => 250,  630 => 244,  623 => 239,  621 => 238,  618 => 237,  614 => 226,  611 => 225,  609 => 224,  606 => 223,  603 => 222,  600 => 221,  596 => 216,  593 => 215,  590 => 214,  585 => 179,  574 => 177,  570 => 176,  563 => 172,  559 => 171,  555 => 170,  550 => 169,  547 => 168,  517 => 139,  514 => 138,  508 => 182,  505 => 181,  503 => 168,  499 => 166,  497 => 138,  494 => 137,  491 => 136,  487 => 229,  483 => 227,  481 => 221,  477 => 219,  473 => 217,  471 => 214,  468 => 213,  461 => 208,  451 => 204,  446 => 202,  443 => 201,  439 => 200,  432 => 196,  427 => 193,  425 => 192,  421 => 190,  418 => 189,  413 => 185,  410 => 184,  407 => 136,  405 => 135,  402 => 134,  400 => 133,  396 => 131,  393 => 130,  390 => 129,  383 => 121,  379 => 119,  377 => 118,  374 => 117,  372 => 116,  364 => 111,  359 => 108,  356 => 107,  352 => 104,  349 => 103,  344 => 100,  342 => 99,  339 => 98,  336 => 97,  330 => 93,  324 => 92,  321 => 91,  317 => 89,  313 => 88,  308 => 87,  302 => 85,  299 => 84,  293 => 83,  271 => 82,  269 => 81,  266 => 80,  263 => 79,  260 => 78,  257 => 77,  254 => 76,  251 => 75,  248 => 74,  245 => 73,  242 => 72,  239 => 71,  237 => 70,  234 => 69,  232 => 68,  230 => 67,  227 => 66,  225 => 65,  220 => 62,  217 => 61,  213 => 60,  209 => 58,  206 => 57,  201 => 53,  196 => 234,  192 => 232,  190 => 231,  187 => 230,  185 => 129,  180 => 127,  177 => 126,  174 => 125,  171 => 107,  167 => 105,  165 => 103,  162 => 102,  160 => 97,  157 => 96,  155 => 57,  152 => 56,  150 => 55,  147 => 54,  145 => 53,  140 => 51,  134 => 50,  127 => 49,  124 => 47,  119 => 45,  114 => 44,  111 => 43,  109 => 42,  106 => 41,  103 => 40,  96 => 37,  93 => 36,  85 => 32,  83 => 31,  80 => 30,  78 => 26,  75 => 25,  71 => 19,  68 => 18,  64 => 15,  61 => 14,  52 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_list.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list.html.twig");
    }
}
