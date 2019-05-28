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

/* @SonataAdmin/Button/create_button.html.twig */
class __TwigTemplate_51c973287cfc6e90bd1db5c8af757b12578b8bb341a8f011c34b888fed9c9977 extends \Twig\Template
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
        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "create"], "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "create"], "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "subClasses", []))) {
                // line 14
                echo "        <li>
            <a class=\"sonata-action-element\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "create"], "method"), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                ";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_create", [], "SonataAdminBundle"), "html", null, true);
                echo "
            </a>
        </li>
    ";
            } else {
                // line 21
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "subclasses", [])));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 22
                    echo "            <li>
                <a class=\"sonata-action-element\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "create", 1 => ["subclass" => $context["subclass"]]], "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_create", [], "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationdomain", [])), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  71 => 25,  66 => 23,  63 => 22,  58 => 21,  51 => 17,  46 => 15,  43 => 14,  40 => 13,  38 => 12,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Button/create_button.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/Button/create_button.html.twig");
    }
}
