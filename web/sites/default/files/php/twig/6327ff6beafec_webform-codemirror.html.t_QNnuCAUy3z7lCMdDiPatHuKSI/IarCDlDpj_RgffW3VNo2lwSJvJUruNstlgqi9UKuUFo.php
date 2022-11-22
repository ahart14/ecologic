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

/* modules/contrib/webform/templates/webform-codemirror.html.twig */
class __TwigTemplate_404cab9e26b20d70ba55dcda17e04c1f2da3448f4a5eecc5e20131eb86114cd4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        if ((($context["type"] ?? null) == "html")) {
            // line 19
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.codemirror.html"), "html", null, true);
            echo "
";
        } elseif ((        // line 20
($context["type"] ?? null) == "yaml")) {
            // line 21
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.codemirror.yaml"), "html", null, true);
            echo "
";
        } else {
            // line 23
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.codemirror.text"), "html", null, true);
            echo "
";
        }
        // line 25
        echo "<pre class=\"js-webform-codemirror-runmode webform-codemirror-runmode\" data-webform-codemirror-mode=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mode"] ?? null), 25, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 25, $this->source), "html", null, true);
        echo "</pre>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-codemirror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  54 => 23,  48 => 21,  46 => 20,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for 'CodeMirror' code.
 *
 * Available variables
 * - code: The code.
 * - type: The type of code.
 * - mode: The CodeMirror mode used to format the code.
 *
 * @see http://codemirror.net/doc/manual.html#option_mode
 * @see \\Drupal\\webform\\Element\\WebformCodeMirror()
 * @see template_preprocess_webform_codemirror()
 *
 * @ingroup themeable
 */
#}
{% if type == 'html' %}
  {{ attach_library('webform/webform.element.codemirror.html') }}
{% elseif type == 'yaml' %}
  {{ attach_library('webform/webform.element.codemirror.yaml') }}
{% else %}
  {{ attach_library('webform/webform.element.codemirror.text') }}
{% endif %}
<pre class=\"js-webform-codemirror-runmode webform-codemirror-runmode\" data-webform-codemirror-mode=\"{{ mode }}\">{{ code }}</pre>
", "modules/contrib/webform/templates/webform-codemirror.html.twig", "/Users/andrewhart/Desktop/sites/ecologic/web/modules/contrib/webform/templates/webform-codemirror.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array("escape" => 19);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
