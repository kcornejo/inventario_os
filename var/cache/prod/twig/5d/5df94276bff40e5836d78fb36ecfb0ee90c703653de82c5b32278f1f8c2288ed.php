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

/* @SonataAdmin/CRUD/base_edit_form_macro.html.twig */
class __TwigTemplate_2365f060810d7963a804ea6f7811a8c7d9d28b09c4d96cc46f9bfe98548b5254 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
    }

    // line 1
    public function macro_render_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formgroups", [], "any", false, true), $context["code"], [], "array", true, true)) {
                    // line 5
                    echo "        ";
                    $context["form_group"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formgroups", [])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["code"]] ?? null) : null);
                    // line 6
                    echo "
        <div class=\"";
                    // line 7
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", []), "col-md-12")) : ("col-md-12")), "html", null, true);
                    echo "\">
            <div class=\"";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "box_class", []), "html", null, true);
                    echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "label", []), [], ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [])) ? (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
                    echo "
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "description", [])) {
                        // line 17
                        echo "                            <p>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "description", []), [], ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [])) ? (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [])) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [])))), "html", null, true);
                        echo "</p>
                        ";
                    }
                    // line 19
                    echo "
                        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "fields", []));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["field_name"], [], "array", true, true)) {
                            // line 21
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["form"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["field_name"]] ?? null) : null), 'row');
                            echo "
                        ";
                            $context['_iterated'] = true;
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 23
                        echo "                            <em>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_form_group_empty", [], "SonataAdminBundle"), "html", null, true);
                        echo "</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                    </div>
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 30,  120 => 25,  111 => 23,  102 => 21,  96 => 20,  93 => 19,  87 => 17,  85 => 16,  77 => 11,  71 => 8,  67 => 7,  64 => 6,  61 => 5,  56 => 4,  52 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form_macro.html.twig");
    }
}
