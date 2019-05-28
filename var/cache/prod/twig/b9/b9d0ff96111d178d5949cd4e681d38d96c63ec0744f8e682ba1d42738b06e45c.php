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

/* SoporteBundle:Default:index.html.twig */
class __TwigTemplate_273719fec1700de04b96d831c9f523ff2d1c7fb703aea2f82ada28ff758958c1 extends \Twig\Template
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
        // line 1
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "SoporteBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SoporteBundle:Default:index.html.twig", "/mnt/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/inventario/src/SoporteBundle/Resources/views/Default/index.html.twig");
    }
}
