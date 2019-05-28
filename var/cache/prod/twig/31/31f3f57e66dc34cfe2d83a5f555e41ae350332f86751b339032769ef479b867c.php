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

/* @SonataCore/FlashMessage/render.html.twig */
class __TwigTemplate_a95ecdb8121264a5d39014d8e964ad64c6e6cbaa959d114404bfe850f8315f04 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesTypes());
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
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 13
            echo "    ";
            $context["domain"] = (((isset($context["domain"]) || array_key_exists("domain", $context))) ? (($context["domain"] ?? null)) : (null));
            // line 14
            echo "    ";
            $context["messages"] = $this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessages($context["type"], ($context["domain"] ?? null));
            // line 15
            echo "    ";
            if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 1)) {
                // line 16
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\Twig\Extension\StatusRuntime')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissible collapsed-box\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataCoreBundle"), "html", null, true);
                echo "\">
                &times;
            </button>
            <input type=\"checkbox\" class=\"read-more-state\" id=\"toggle-more-";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "\" />
            <div class=\"read-more-wrap\">
                ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 28
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) >= 2)) {
                        // line 29
                        echo "                        <span class=\"read-more-target\">";
                        echo $context["message"];
                        echo "</span>
                    ";
                    } else {
                        // line 31
                        echo "                        ";
                        echo $context["message"];
                        echo "
                    ";
                    }
                    // line 33
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "            </div>

            <label for=\"toggle-more-";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "\" class=\"read-more-trigger\">
                <span class=\"more\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more", [], "SonataCoreBundle"), "html", null, true);
                echo " &#9660;</span>
                <span class=\"less hide\">";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("less", [], "SonataCoreBundle"), "html", null, true);
                echo " &#9650;</span>
                <span class=\"badge badge-default\">";
                // line 39
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages"] ?? null)), "html", null, true);
                echo "</span>
            </label>
        </div>
    ";
            } elseif ((twig_length_filter($this->env,             // line 42
($context["messages"] ?? null)) == 1)) {
                // line 43
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\Twig\Extension\StatusRuntime')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataCoreBundle"), "html", null, true);
                echo "\">
                &times;
            </button>
            ";
                // line 52
                echo twig_first($this->env, ($context["messages"] ?? null));
                echo "
        </div>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@SonataCore/FlashMessage/render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 52,  165 => 49,  155 => 43,  153 => 42,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 34,  117 => 33,  111 => 31,  105 => 29,  102 => 28,  85 => 27,  80 => 25,  74 => 22,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  38 => 12,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataCore/FlashMessage/render.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views/FlashMessage/render.html.twig");
    }
}
