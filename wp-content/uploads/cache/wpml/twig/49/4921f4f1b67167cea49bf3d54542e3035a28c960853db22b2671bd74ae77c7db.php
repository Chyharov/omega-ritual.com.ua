<?php

/* slot-subform-statics-footer.twig */
class __TwigTemplate_a3318cfebede61a779ba98721eabbbe4c0bc3ac990931bba84e24332aded4ee3 extends Twig_Template
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
        $this->loadTemplate("preview.twig", "slot-subform-statics-footer.twig", 1)->display(array_merge($context, array("preview" => $this->getAttribute($this->getAttribute(($context["previews"] ?? null), "statics", array()), "footer", array()))));
        // line 2
        echo "
<div class=\"wpml-ls-subform-options\">";
        // line 5
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-statics-footer.twig", 5)->display(array_merge($context, array("id" => "in-footer", "name" => "statics[footer][template]", "value" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
($context["settings"] ?? null), "statics", array()), "footer", array()), "template", array()), "slot_type" => "footer")));
        // line 14
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-statics-footer.twig", 14)->display(array_merge($context, array("name_base" => "statics[footer]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 17
($context["settings"] ?? null), "statics", array()), "footer", array()), "template_slug" => $this->getAttribute(        // line 18
($context["slot_settings"] ?? null), "template", array()))));
        // line 22
        $this->loadTemplate("panel-colors.twig", "slot-subform-statics-footer.twig", 22)->display(array_merge($context, array("id" => "static-footer", "name_base" => "statics[footer]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 26
($context["settings"] ?? null), "statics", array()), "footer", array()))));
        // line 29
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-statics-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 29,  32 => 26,  31 => 22,  29 => 18,  28 => 17,  27 => 14,  25 => 9,  24 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "slot-subform-statics-footer.twig", "/var/www/profritual/data/www/omega-ritual.com.ua/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-statics-footer.twig");
    }
}
