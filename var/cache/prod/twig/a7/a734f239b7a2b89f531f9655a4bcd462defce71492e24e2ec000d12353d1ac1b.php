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

/* @SonataAdmin/CRUD/base_edit_form.html.twig */
class __TwigTemplate_a8bd1e9d2bffcc857aa8225cfdea8b39a6447da2429227b7ff6457e6caf0881f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'sonata_form_action_url' => [$this, 'block_sonata_form_action_url'],
            'sonata_form_attributes' => [$this, 'block_sonata_form_attributes'],
            'sonata_pre_fieldsets' => [$this, 'block_sonata_pre_fieldsets'],
            'sonata_tab_content' => [$this, 'block_sonata_tab_content'],
            'sonata_post_fieldsets' => [$this, 'block_sonata_post_fieldsets'],
            'formactions' => [$this, 'block_formactions'],
            'sonata_form_actions' => [$this, 'block_sonata_form_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = [])
    {
        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.top", ["admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null)]]);
        echo "

    ";
        // line 6
        echo "    ";
        $context["url"] = (( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))))) ? ("edit") : ("create"));
        // line 7
        echo "
    ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => ($context["url"] ?? null)], "method")) {
            // line 9
            echo "        <div>
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_not_available", [], "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <form
              ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "form_type"], "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 15
            echo "              role=\"form\"
              ";
            // line 17
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", []), "multipart", [])) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 19
            echo "              method=\"POST\"
              ";
            // line 20
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", []), "getOption", [0 => "html5_validate"], "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 21
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 22
            echo "              >

            ";
            // line 24
            echo twig_include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 70
            echo "
            ";
            // line 71
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 74
            echo "
            ";
            // line 75
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

            ";
            // line 77
            $this->displayBlock('formactions', $context, $blocks);
            // line 129
            echo "        </form>
    ";
        }
        // line 131
        echo "
    ";
        // line 132
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.bottom", ["admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null)]]);
        echo "

";
    }

    // line 17
    public function block_sonata_form_action_url($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["url"] ?? null), 1 => ["id" => (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))), "uniqid" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", []), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "get", [0 => "subclass"], "method")]], "method"), "html", null, true);
    }

    // line 21
    public function block_sonata_form_attributes($context, array $blocks = [])
    {
    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = [])
    {
        // line 27
        echo "                <div class=\"row\">
            ";
    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = [])
    {
        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [])) == 1) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", []))) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null) != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [])) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if (($context["has_tab"] ?? null)) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", []));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    ";
                $context["_tab_name"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [])) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", []));
                // line 39
                echo "                                    <li";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "has", [0 => "_tab"], "method") && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "_tab"], "method") == ($context["_tab_name"] ?? null)))) {
                    echo " class=\"active\"";
                }
                echo ">
                                        <a href=\"#";
                // line 40
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                            <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "label", []), [], ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [])) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", []));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 48
                echo "                                    ";
                $context["_tab_name"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [])) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", []));
                // line 49
                echo "                                    <div class=\"tab-pane fade";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "has", [0 => "_tab"], "method") && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "get", [0 => "_tab"], "method") == ($context["_tab_name"] ?? null)))) {
                    echo " in active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", []) != false)) {
                    // line 53
                    echo "                                                    <p>
                                                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", []), [], ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [])) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
                    echo "
                                                    </p>
                                                ";
                }
                // line 57
                echo "
                                                ";
                // line 58
                echo $context["form_helper"]->macro_render_groups(($context["admin"] ?? null), ($context["form"] ?? null), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["form_tab"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["groups"] ?? null) : null), ($context["has_tab"] ?? null));
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 66
            echo "                        ";
            echo $context["form_helper"]->macro_render_groups(($context["admin"] ?? null), ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [])) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["default"] ?? null) : null), "groups", []), ($context["has_tab"] ?? null));
            echo "
                    ";
        }
        // line 68
        echo "                </div>
            ";
    }

    // line 71
    public function block_sonata_post_fieldsets($context, array $blocks = [])
    {
        // line 72
        echo "                </div>
            ";
    }

    // line 77
    public function block_formactions($context, array $blocks = [])
    {
        // line 78
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 79
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 127
        echo "                </div>
            ";
    }

    // line 79
    public function block_sonata_form_actions($context, array $blocks = [])
    {
        // line 80
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "isxmlhttprequest", [])) {
            // line 81
            echo "                        ";
            // line 82
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                            ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "delete"], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "delete", 1 => ($context["object"] ?? null)], "method"))) {
                    // line 85
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "delete", 1 => ($context["object"] ?? null)], "method"), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 90
                echo "                        ";
            } else {
                // line 91
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 93
            echo "                    ";
        } else {
            // line 94
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "supportsPreviewMode", [])) {
                // line 95
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_preview", [], "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 100
            echo "                        ";
            // line 101
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))))) {
                // line 102
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "list"], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "list"], "method"))) {
                    // line 105
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 107
                echo "
                            ";
                // line 108
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "delete"], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "delete", 1 => ($context["object"] ?? null)], "method"))) {
                    // line 109
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "delete", 1 => ($context["object"] ?? null)], "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 112
                echo "
                            ";
                // line 113
                if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isAclEnabled", [], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "acl"], "method")) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "acl", 1 => ($context["object"] ?? null)], "method"))) {
                    // line 114
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "acl", 1 => ($context["object"] ?? null)], "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_edit_acl", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 116
                echo "                        ";
            } else {
                // line 117
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasroute", [0 => "edit"], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "edit"], "method"))) {
                    // line 118
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 120
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasroute", [0 => "list"], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "list"], "method"))) {
                    // line 121
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 123
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_create_a_new_one", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 125
            echo "                    ";
        }
        // line 126
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  477 => 126,  474 => 125,  468 => 123,  462 => 121,  459 => 120,  453 => 118,  450 => 117,  447 => 116,  439 => 114,  437 => 113,  434 => 112,  427 => 110,  422 => 109,  420 => 108,  417 => 107,  411 => 105,  409 => 104,  403 => 102,  400 => 101,  398 => 100,  392 => 97,  388 => 95,  385 => 94,  382 => 93,  376 => 91,  373 => 90,  367 => 87,  363 => 86,  358 => 85,  356 => 84,  351 => 83,  348 => 82,  346 => 81,  343 => 80,  340 => 79,  335 => 127,  333 => 79,  330 => 78,  327 => 77,  322 => 72,  319 => 71,  314 => 68,  308 => 66,  303 => 63,  284 => 58,  281 => 57,  275 => 54,  272 => 53,  270 => 52,  259 => 49,  256 => 48,  239 => 47,  235 => 45,  217 => 41,  211 => 40,  204 => 39,  201 => 38,  184 => 37,  180 => 35,  178 => 34,  174 => 32,  171 => 31,  168 => 30,  163 => 27,  160 => 26,  155 => 21,  149 => 17,  142 => 132,  139 => 131,  135 => 129,  133 => 77,  128 => 75,  125 => 74,  123 => 71,  120 => 70,  118 => 30,  115 => 29,  113 => 26,  108 => 24,  104 => 22,  101 => 21,  97 => 20,  94 => 19,  90 => 18,  85 => 17,  82 => 15,  78 => 14,  75 => 13,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  52 => 3,  49 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_edit_form.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
