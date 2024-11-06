<?php

/* media-translation.twig */
class __TwigTemplate_f666e29e34efaa176fc55568cb4d5790cb25c28af75ef72bd1006c74a0998920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrap\">

    <h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "heading", array()), "html", null, true);
        echo "</h2>";
        // line 5
        $this->loadTemplate("batch-translation.twig", "media-translation.twig", 5)->display(array_merge($context, ($context["batch_translation"] ?? null)));
        // line 6
        echo "
    <div class=\"tablenav top wpml-media-tablenav\">";
        // line 8
        $this->loadTemplate("media-translation-filters.twig", "media-translation.twig", 8)->display($context);
        // line 9
        echo "    </div>

    <table class=\"widefat striped wpml-media-table\">
        <thead>
        <tr>
            <th class=\"wpml-col-media-title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "original_language", array()), "html", null, true);
        echo "</th>
            <th class=\"wpml-col-media-translations\">";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 17
            if ((twig_test_empty(($context["target_language"] ?? null)) || (($context["target_language"] ?? null) == $context["code"]))) {
                // line 18
                echo "                        <span title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag", array()), "html", null, true);
                echo "\" width=\"16\" height=\"12\"
                                                               alt=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", array()), "html", null, true);
                echo "\"></span>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </th>
        </tr>
        </thead>
        <tbody>";
        // line 26
        if (($context["attachments"] ?? null)) {
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attachments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 28
                $this->loadTemplate("media-translation-table-row.twig", "media-translation.twig", 28)->display(array("attachment" => $context["attachment"], "languages" => ($context["languages"] ?? null), "strings" => ($context["strings"] ?? null), "target_language" => ($context["target_language"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 31
            echo "            <tr>
                <td colspan=\"2\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "no_attachments", array()), "html", null, true);
            echo "</td>
            </tr>";
        }
        // line 35
        echo "        </tbody>

    </table>

    <div class=\"tablenav bottom\">";
        // line 40
        $this->loadTemplate("pagination.twig", "media-translation.twig", 40)->display(array("pagination_model" => ($context["pagination"] ?? null)));
        // line 42
        $this->loadTemplate("media-translation-popup.twig", "media-translation.twig", 42)->display($context);
        // line 43
        echo "
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "media-translation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  99 => 42,  97 => 40,  91 => 35,  86 => 32,  83 => 31,  76 => 28,  72 => 27,  70 => 26,  65 => 22,  57 => 19,  50 => 18,  48 => 17,  44 => 16,  40 => 14,  33 => 9,  31 => 8,  28 => 6,  26 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "media-translation.twig", "/var/www/profritual/data/www/omega-ritual.com.ua/wp-content/plugins/wpml-media-translation/templates/menus/media-translation.twig");
    }
}
