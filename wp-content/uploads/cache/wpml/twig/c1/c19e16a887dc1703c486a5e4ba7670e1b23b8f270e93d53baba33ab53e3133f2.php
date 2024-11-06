<?php

/* media-translation-table-row.twig */
class __TwigTemplate_6d97dc1aa55e47100ae58c48541005e81174272d048279ec63a00bb65e88cd6a extends Twig_Template
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
        echo "<tr class=\"wpml-media-attachment-row\" data-attachment-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "post", array()), "ID", array()), "html", null, true);
        echo "\"
    data-language-code=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "language", array()), "html", null, true);
        echo "\"
    data-language-name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["languages"] ?? null), $this->getAttribute(($context["attachment"] ?? null), "language", array()), array(), "array"), "name", array()), "html", null, true);
        echo "\"
    data-is-image=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "is_image", array()), "html", null, true);
        echo "\"
    data-thumb=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "thumb", array()), "src", array()), "html", null, true);
        echo "\"
    data-file-name=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "file_name", array()), "html", null, true);
        echo "\"
    data-mime-type=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "post", array()), "post_mime_type", array()), "html", null, true);
        echo "\"
    data-title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "post", array()), "post_title", array()), "html", null, true);
        echo "\"
    data-caption=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "post", array()), "post_excerpt", array()), "html", null, true);
        echo "\"
    data-alt_text=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "alt", array()), "html", null, true);
        echo "\"
    data-description=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "post", array()), "post_content", array()), "html", null, true);
        echo "\"
    data-flag=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["languages"] ?? null), $this->getAttribute(($context["attachment"] ?? null), "language", array()), array(), "array"), "flag", array()), "html", null, true);
        echo "\">
    <td class=\"wpml-col-media-title\">
        <span title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["languages"] ?? null), $this->getAttribute(($context["attachment"] ?? null), "language", array()), array(), "array"), "name", array()), "html", null, true);
        echo "\" class=\"wpml-media-original-flag\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["languages"] ?? null), $this->getAttribute(($context["attachment"] ?? null), "language", array()), array(), "array"), "flag", array()), "html", null, true);
        echo "\" width=\"16\" height=\"12\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "language", array()), "html", null, true);
        echo "\">
        </span>
        <span class=\"wpml-media-wrapper\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "thumb", array()), "src", array()), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "thumb", array()), "width", array()), "html", null, true);
        echo "\"
                 height=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "thumb", array()), "height", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "language", array()), "html", null, true);
        echo "\"";
        // line 20
        if ( !$this->getAttribute(($context["attachment"] ?? null), "is_image", array())) {
            echo "class=\"is-non-image\"";
        }
        echo ">
        </span>
    </td>
    <td class=\"wpml-col-media-translations\">";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 25
            if ((twig_test_empty(($context["target_language"] ?? null)) || (($context["target_language"] ?? null) == $context["code"]))) {
                // line 26
                if (($this->getAttribute(($context["attachment"] ?? null), "language", array()) == $context["code"])) {
                    // line 27
                    echo "                    <span title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["languages"] ?? null), $this->getAttribute(($context["attachment"] ?? null), "language", array()), array(), "array"), "name", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "original_language", array()), "html", null, true);
                    echo "\">
                                    <i class=\"otgs-ico-original\"></i>
                                </span>";
                } else {
                    // line 31
                    echo "                    <span class=\"wpml-media-wrapper\"
                          id=\"media-attachment-";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "post", array()), "ID", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\"
                          data-file-name=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "file_name", array()), "html", null, true);
                    echo "\"
                          title=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["languages"] ?? null), $context["code"], array(), "array"), "name", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "statuses", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "status", array()), array(), "array"), "html", null, true);
                    echo "\"
                          data-attachment-id=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "id", array()), "html", null, true);
                    echo "\"
                          data-language-code=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\"
                          data-language-name=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
                    echo "\"
                          data-thumb=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "thumb", array()), "src", array()), "html", null, true);
                    echo "\"
                          data-title=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "title", array()), "html", null, true);
                    echo "\"
                          data-caption=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "caption", array()), "html", null, true);
                    echo "\"
                          data-alt_text=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "alt", array()), "html", null, true);
                    echo "\"
                          data-description=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "description", array()), "html", null, true);
                    echo "\"
                          data-flag=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["languages"] ?? null), $context["code"], array(), "array"), "flag", array()), "html", null, true);
                    echo "\"
                          data-media-is-translated=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "media_is_translated", array()), "html", null, true);
                    echo "\">
                                    <a class=\"js-open-media-translation-dialog";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "media_is_translated", array())) {
                        echo "wpml-media-translation-image";
                    }
                    echo "\">
                                        <img src=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "thumb", array()), "src", array()), "html", null, true);
                    echo "\"
                                             width=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "thumb", array()), "width", array()), "html", null, true);
                    echo "\" height=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "thumb", array()), "height", array()), "html", null, true);
                    echo "\"
                                             alt=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "language", array()), "html", null, true);
                    echo "\"";
                    // line 49
                    if ( !$this->getAttribute(($context["attachment"] ?? null), "is_image", array())) {
                        echo "class=\"is-non-image\"";
                    }
                    // line 50
                    if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "media_is_translated", array())) {
                        echo "style=\"display:none\"";
                    }
                    echo ">
                                        <i class=\"";
                    // line 51
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "id", array())) {
                        echo "otgs-ico-edit";
                    } else {
                        echo "otgs-ico-add";
                    }
                    echo "\"";
                    // line 52
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "translations", array()), $context["code"], array(), "array"), "media_is_translated", array())) {
                        echo "style=\"display:none\"";
                    }
                    echo "></i>
                                    </a>
                                </span>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "media-translation-table-row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 58,  212 => 52,  205 => 51,  199 => 50,  195 => 49,  192 => 48,  186 => 47,  182 => 46,  176 => 45,  172 => 44,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  130 => 34,  126 => 33,  120 => 32,  117 => 31,  108 => 27,  106 => 26,  104 => 25,  100 => 24,  92 => 20,  87 => 19,  81 => 18,  73 => 15,  69 => 14,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "media-translation-table-row.twig", "/var/www/profritual/data/www/omega-ritual.com.ua/wp-content/plugins/wpml-media-translation/templates/menus/media-translation-table-row.twig");
    }
}
