<?php

namespace WPML\Core;

use \WPML\Core\Twig\Environment;
use \WPML\Core\Twig\Error\LoaderError;
use \WPML\Core\Twig\Error\RuntimeError;
use \WPML\Core\Twig\Markup;
use \WPML\Core\Twig\Sandbox\SecurityError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedTagError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFilterError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFunctionError;
use \WPML\Core\Twig\Source;
use \WPML\Core\Twig\Template;

/* setup-wizard-buttons.twig */
class __TwigTemplate_6eaf4d62cb79cb1c9a1597b8c270d9ea723f4bd4d8f916df421a3a4e0ca9a684 extends \WPML\Core\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !(isset($context["setup_complete"]) ? $context["setup_complete"] : null)) {
            // line 2
            echo "\t<footer id=\"icl_setup_nav_3\" class=\"js-wpml-ls-section wpml-section clearfix text-right\">
\t\t<input id=\"icl_setup_back_2\" class=\"button-secondary alignleft\" name=\"save\" value=\"";
            // line 3
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", []), "button_back", []), "html", null, true);
            echo "\" type=\"button\" />
\t\t";
            // line 4
            echo (isset($context["setup_step_2_nonce_field"]) ? $context["setup_step_2_nonce_field"] : null);
            echo "
\t\t<input class=\"button-primary alignright\" name=\"save\" value=\"";
            // line 5
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", []), "button_next", []), "html", null, true);
            echo "\" type=\"submit\" />
\t\t<input type=\"hidden\" name=\"submit_setup_wizard\" value=\"0\" />
\t</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "setup-wizard-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  41 => 4,  37 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "setup-wizard-buttons.twig", "/home/percivaltoken/public_html/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/setup-wizard-buttons.twig");
    }
}
