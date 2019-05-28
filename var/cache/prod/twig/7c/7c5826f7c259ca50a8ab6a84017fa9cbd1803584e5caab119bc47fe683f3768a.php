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

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_6c63cfc5ac8d76c64de8ebff877c4188b087afeb57662d219f0c95a3ef96624e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $_trait_0 = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 38);
        // line 38
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@SonataAdmin/CRUD/base_edit_form.html.twig".'" cannot be used as a trait.', 38, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new RuntimeError('Block "form" is not defined in trait "@SonataAdmin/CRUD/base_edit_form.html.twig".', 38, $this->source);
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'navbar_title' => [$this, 'block_navbar_title'],
                'actions' => [$this, 'block_actions'],
                'tab_menu' => [$this, 'block_tab_menu'],
                'form' => [$this, 'block_form'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", [0 => ($context["object"] ?? null)], "method"), 15)], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_create", [], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 23
    public function block_navbar_title($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_actions($context, array $blocks = [])
    {
        // line 28
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 28)->display($context);
    }

    // line 31
    public function block_tab_menu($context, array $blocks = [])
    {
        // line 32
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", [0 => ($context["action"] ?? null)], "method"), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 40
    public function block_form($context, array $blocks = [])
    {
        // line 41
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  111 => 40,  107 => 32,  104 => 31,  100 => 28,  97 => 27,  90 => 24,  87 => 23,  79 => 19,  73 => 17,  70 => 16,  68 => 15,  65 => 14,  56 => 12,  28 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_edit.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit.html.twig");
    }
}
