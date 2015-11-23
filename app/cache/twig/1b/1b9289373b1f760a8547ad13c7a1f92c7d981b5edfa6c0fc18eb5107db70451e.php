<?php

/* site.html.twig */
class __TwigTemplate_4ee90008683e8c838182562800d7304394a4047153217f7c7b91312bd3b378d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "site.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => "site"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
        // line 12
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_titlebar($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 18
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> Save</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 21
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION");
        echo " - ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE");
        echo "</h1>
";
    }

    // line 24
    public function block_content_top($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"alert notice\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION");
        echo ": <b>";
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "file", array()), "filename", array()), array((isset($context["base_path"]) ? $context["base_path"] : null) => ""));
        echo "</b></div>
    <ul class=\"tab-bar\">
        <li><a href=\"";
        // line 27
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/system\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM");
        echo "</a></li>
        <li class=\"active\"><span>";
        // line 28
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE");
        echo "</span></li>
        <li><a href=\"";
        // line 29
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/info\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO");
        echo "</a></li>
    </ul>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "site.html.twig", 34)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()), "data" => (isset($context["data"]) ? $context["data"] : null))));
    }

    public function getTemplateName()
    {
        return "site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  116 => 33,  107 => 29,  103 => 28,  97 => 27,  89 => 25,  86 => 24,  78 => 21,  70 => 18,  67 => 17,  64 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set data = admin.data('site') %}*/
/* */
/* {% block stylesheets %}*/
/*     {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> Save</button>*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }} - {{ "PLUGIN_ADMIN.SITE"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block content_top %}*/
/*     <div class="alert notice">{{ "PLUGIN_ADMIN.SAVE_LOCATION"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>*/
/*     <ul class="tab-bar">*/
/*         <li><a href="{{ base_url_relative }}/system">{{ "PLUGIN_ADMIN.SYSTEM"|tu }}</a></li>*/
/*         <li class="active"><span>{{ "PLUGIN_ADMIN.SITE"|tu }}</span></li>*/
/*         <li><a href="{{ base_url_relative }}/info">{{ "PLUGIN_ADMIN.INFO"|tu }}</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}*/
/* {% endblock %}*/
/* */
/* */
