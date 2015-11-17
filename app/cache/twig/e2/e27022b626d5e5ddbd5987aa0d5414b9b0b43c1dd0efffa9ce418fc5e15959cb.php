<?php

/* partials/base.html.twig */
class __TwigTemplate_1b79d03a5e2e74f70380a1ba53f525228d3cfe9bd5cc68321ae0ca0bc3a9e069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>
<body class=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
    ";
        // line 52
        $this->displayBlock('showcase', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "
    <aside class=\"sidebar\">
        ";
        // line 65
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 65)->display($context);
        // line 66
        echo "    </aside>
    ";
        // line 67
        $this->displayBlock('bottom', $context, $blocks);
        // line 74
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.ico", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
        // line 14
        echo "
        ";
        // line 15
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 16
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 17
            echo "        ";
        }
        // line 18
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 19
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 20
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "    ";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        // line 29
        echo "    <header id=\"header\">

        <div class=\"logo\">
            <h1>
              <a href=\"";
        // line 33
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                ";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "
              </a>
            </h1>
        </div>

        <div class=\"navbar\">

            ";
        // line 41
        $this->displayBlock('header_extra', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 46
        echo "
        </div>

    </header>
    ";
    }

    // line 41
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 43
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 44
        echo "              ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "            ";
    }

    // line 52
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "    <section class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "    </section>
    ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "      <footer class=\"footer\"></footer>
    ";
    }

    // line 67
    public function block_bottom($context, array $blocks = array())
    {
        // line 68
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "      ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 70
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 71
        echo "      ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 71,  255 => 70,  252 => 69,  249 => 68,  242 => 72,  239 => 68,  236 => 67,  231 => 61,  228 => 60,  223 => 56,  218 => 57,  216 => 56,  211 => 55,  208 => 54,  203 => 52,  199 => 45,  196 => 44,  193 => 43,  188 => 41,  180 => 46,  178 => 43,  175 => 42,  173 => 41,  163 => 34,  159 => 33,  153 => 29,  150 => 28,  146 => 22,  143 => 21,  140 => 20,  137 => 19,  134 => 18,  131 => 17,  128 => 16,  126 => 15,  123 => 14,  120 => 13,  117 => 12,  109 => 23,  107 => 12,  102 => 10,  97 => 9,  95 => 8,  86 => 7,  83 => 6,  77 => 74,  75 => 67,  72 => 66,  70 => 65,  66 => 63,  64 => 60,  61 => 59,  59 => 54,  56 => 53,  54 => 52,  51 => 51,  49 => 28,  45 => 27,  42 => 26,  40 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* */
/* {% block head %}*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.ico', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body class="{{ page.header.body_classes }}">*/
/*     {% block header %}*/
/*     <header id="header">*/
/* */
/*         <div class="logo">*/
/*             <h1>*/
/*               <a href="{{ base_url == '' ? '/' : base_url }}">*/
/*                 {{ config.site.title }}*/
/*               </a>*/
/*             </h1>*/
/*         </div>*/
/* */
/*         <div class="navbar">*/
/* */
/*             {% block header_extra %}{% endblock %}*/
/* */
/*             {% block header_navigation %}*/
/*               {% include 'partials/navigation.html.twig' %}*/
/*             {% endblock %}*/
/* */
/*         </div>*/
/* */
/*     </header>*/
/*     {% endblock %}*/
/* */
/*     {% block showcase %}{% endblock %}*/
/* */
/*     {% block body %}*/
/*     <section class="{{ class }}">*/
/*         {% block content %}{% endblock %}*/
/*     </section>*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*       <footer class="footer"></footer>*/
/*     {% endblock %}*/
/* */
/*     <aside class="sidebar">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*     </aside>*/
/*     {% block bottom %}*/
/*       {% block javascripts %}*/
/*           {% do assets.addJs('jquery',101) %}*/
/*           {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}*/
/*       {% endblock %}*/
/*       {{ assets.js() }}*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
