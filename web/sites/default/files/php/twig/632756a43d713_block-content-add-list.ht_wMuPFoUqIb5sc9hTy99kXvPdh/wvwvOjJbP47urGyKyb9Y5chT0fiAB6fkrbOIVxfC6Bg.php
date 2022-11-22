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

/* core/themes/claro/templates/block-content-add-list.html.twig */
class __TwigTemplate_e27609246a2743dd6b16bb8a425d3220da39888aba0b47a82d3073c179175932 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "@claro/entity-add-list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@claro/entity-add-list.html.twig", "core/themes/claro/templates/block-content-add-list.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/block-content-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Claro's theme implementation to display a list of custom block types.
 *
 * Available variables:
 * - bundles: List of blockcontent types, each with the following properties:
 *   - label: Block content type label
 *   - add_link: \\Drupal\\Core\\Link link instance to create an entity of this
 *     block content type. This is a GeneratedLink originally and is switched by
 *     claro_preprocess_block_content_add_list().
 *   - description: A description of this custom block type.
 *
 * @todo Revisit after https://www.drupal.org/node/3026221 has been solved.
 *
 * @see template_preprocess_block_content_add_list()
 * @see claro_preprocess_block_content_add_list()
 */
 #}
{% extends '@claro/entity-add-list.html.twig' %}
", "core/themes/claro/templates/block-content-add-list.html.twig", "/Users/andrewhart/Desktop/sites/ecologic/web/core/themes/claro/templates/block-content-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
