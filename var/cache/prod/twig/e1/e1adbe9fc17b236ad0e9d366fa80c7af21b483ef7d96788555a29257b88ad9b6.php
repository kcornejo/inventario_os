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

/* @SonataAdmin/Core/dashboard.html.twig */
class __TwigTemplate_02640c81e63adcd0055e1c6ff2534cb39c2648fd0ade1157326dd2571e02c87b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/Core/dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_dashboard", [], "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = [])
    {
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "left", []));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                // line 21
                echo "            ";
                $context["has_left"] = true;
                // line 22
                echo "        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "center", []));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                // line 28
                echo "            ";
                $context["has_center"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "right", []));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                // line 35
                echo "            ";
                $context["has_right"] = true;
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "top", []));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                // line 42
                echo "            ";
                $context["has_top"] = true;
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "bottom", []));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                // line 49
                echo "            ";
                $context["has_bottom"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.dashboard.top", ["admin_pool" => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [])]]);
        echo "

    ";
        // line 55
        if (($context["has_top"] ?? null)) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "top", []));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "class", []), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", []), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [])]]);
                    echo "
                    </div>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    <div class=\"row\">
        ";
        // line 68
        $context["width_left"] = 4;
        // line 69
        echo "        ";
        $context["width_right"] = 4;
        // line 70
        echo "        ";
        $context["width_center"] = 4;
        // line 71
        echo "
        ";
        // line 73
        echo "        ";
        if ( !($context["has_center"] ?? null)) {
            // line 74
            echo "            ";
            $context["width_left"] = 6;
            // line 75
            echo "            ";
            $context["width_right"] = 6;
            // line 76
            echo "        ";
        }
        // line 77
        echo "
        ";
        // line 79
        echo "        ";
        if (( !($context["has_left"] ?? null) &&  !($context["has_right"] ?? null))) {
            // line 80
            echo "            ";
            $context["width_center"] = 12;
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        if ((($context["has_left"] ?? null) || ($context["has_right"] ?? null))) {
            // line 85
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_left"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "left", []));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                    // line 88
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", []), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [])]]);
                    echo "
                ";
                }
                // line 90
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if (($context["has_center"] ?? null)) {
            // line 95
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_center"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "center", []));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                echo "                    ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                    // line 98
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", []), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [])]]);
                    echo "
                    ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 105
        echo "        ";
        if ((($context["has_left"] ?? null) || ($context["has_right"] ?? null))) {
            // line 106
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_right"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "right", []));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                    // line 109
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", []), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [])]]);
                    echo "
                ";
                }
                // line 111
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "    </div>

    ";
        // line 116
        if (($context["has_bottom"] ?? null)) {
            // line 117
            echo "        <div class=\"row\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "bottom", []));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [])))) {
                    // line 120
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "class", []), "html", null, true);
                    echo "\">
                        ";
                    // line 121
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", []), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [])]]);
                    echo "
                    </div>
                ";
                }
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.dashboard.bottom", ["admin_pool" => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [])]]);
        echo "

";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 128,  402 => 127,  398 => 125,  392 => 124,  386 => 121,  381 => 120,  378 => 119,  374 => 118,  371 => 117,  369 => 116,  365 => 114,  361 => 112,  355 => 111,  349 => 109,  346 => 108,  342 => 107,  337 => 106,  334 => 105,  331 => 103,  327 => 101,  321 => 100,  315 => 98,  312 => 97,  308 => 96,  303 => 95,  301 => 94,  298 => 93,  294 => 91,  288 => 90,  282 => 88,  279 => 87,  275 => 86,  270 => 85,  267 => 84,  264 => 82,  261 => 81,  258 => 80,  255 => 79,  252 => 77,  249 => 76,  246 => 75,  243 => 74,  240 => 73,  237 => 71,  234 => 70,  231 => 69,  229 => 68,  225 => 66,  221 => 64,  215 => 63,  209 => 60,  204 => 59,  201 => 58,  197 => 57,  194 => 56,  192 => 55,  187 => 53,  184 => 52,  178 => 51,  175 => 50,  172 => 49,  169 => 48,  164 => 47,  162 => 46,  159 => 45,  153 => 44,  150 => 43,  147 => 42,  144 => 41,  139 => 40,  137 => 39,  134 => 38,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  114 => 33,  112 => 32,  109 => 31,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  89 => 26,  87 => 25,  84 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  64 => 19,  62 => 18,  59 => 17,  56 => 16,  51 => 15,  45 => 14,  36 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Core/dashboard.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/admin-bundle/src/Resources/views/Core/dashboard.html.twig");
    }
}
