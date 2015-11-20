<?php

/* forms/default/form.html.twig */
class __TwigTemplate_69249aba955a72bed58c1d9a4957969a5c4d8b9cc0f6675ed74a5e1fdb9560a7 extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            echo "<div class=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</div>";
        }
        // line 2
        echo "
<form name=\"";
        // line 3
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 4
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
        echo "\"
      method=\"";
        // line 5
        echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        echo "\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 7
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 8
            echo "    <div>
        ";
            // line 9
            $this->loadTemplate((((("forms/fields/" . (($this->getAttribute($context["field"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["field"], "type", array()), "text")) : ("text"))) . "/") . (($this->getAttribute($context["field"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["field"], "type", array()), "text")) : ("text"))) . ".html.twig"), "forms/default/form.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t<div class=\"buttons\">
\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 15
            echo "\t    <button class=\"";
            echo (($this->getAttribute($context["button"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "classes", array()), "button")) : ("button"));
            echo "\" type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\">";
            echo (($this->getAttribute($context["button"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "value", array()), "Submit")) : ("Submit"));
            echo "</button>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 17,  88 => 15,  84 => 14,  80 => 12,  65 => 10,  63 => 9,  60 => 8,  57 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  25 => 2,  19 => 1,);
    }
}
/* {% if form.message %}<div class="alert">{{ form.message }}</div>{% endif %}*/
/* */
/* <form name="{{ form.name }}"*/
/*       action="{{ form.action ? base_url ~ form.action : page.url }}"*/
/*       method="{{ form.method|upper|default('POST') }}">*/
/* {% for field in form.fields %}*/
/*     {% set value = form.value(field.name) %}*/
/*     <div>*/
/*         {% include "forms/fields/#{field.type|default('text')}/#{field.type|default('text')}.html.twig" %}*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* 	<div class="buttons">*/
/* 	{% for button in form.buttons %}*/
/* 	    <button class="{{ button.classes|default('button') }}" type="{{ button.type|default('submit') }}">{{ button.value|default('Submit') }}</button>*/
/* 	{% endfor %}*/
/* 	</div>*/
/* </form>*/
/* */
