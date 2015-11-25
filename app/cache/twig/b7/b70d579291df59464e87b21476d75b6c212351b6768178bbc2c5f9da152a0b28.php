<?php

/* partials/base.html.twig */
class __TwigTemplate_adc057dbfb8b829c3f2473b5a4a5c57d31178d33789b0181d68a9eaa0b8b171b extends Twig_Template
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
        // line 27
        echo "</head>
<body class=\"";
        // line 28
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "
    ";
        // line 87
        $this->displayBlock('bottom', $context, $blocks);
        // line 95
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
        // line 24
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
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/starterdaily-mediakit.css"), "method");
        // line 15
        echo "
        ";
        // line 16
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 17
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 18
            echo "        ";
        }
        // line 19
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 20
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 21
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 22
            echo "        ";
        }
        // line 23
        echo "    ";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "      <header id=\"header\">

        <div class=\"content-menu\">

            <div class=\"logo\">
                <h1>
                <a href=\"";
        // line 36
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo " \">
                    <img src=\"";
        // line 37
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo-starterdaily-r.png\"/>
                </a>
                </h1>
            </div>

            <div class=\"mobile-menu\"><img src=\"";
        // line 42
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/category.png\"/></div>
            <div class=\"menu-mobile-media\">
            
            </div>

            <div id=\"navbar\">
              ";
        // line 48
        $this->displayBlock('header_extra', $context, $blocks);
        // line 49
        echo "              ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 50
            echo "              ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 50)->display($context);
            // line 51
            echo "              ";
        }
        // line 52
        echo "              ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 55
        echo "              <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>

        </div>     


      </header>
    ";
    }

    // line 48
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 52
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 53
        echo "              ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "              ";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "      <section class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "      </section>
    ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "      <footer class=\"footer\">
        <div class=\"end_mediakit_content\">
            <div class=\"end_mediakit\">
               <img src=\"";
        // line 74
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/imagen-bg.jpg\"/>  
            </div>
            <div class=\"bg-color\"></div>
            <div markdown=\"1\" class=\"end_info\">
                <div markdown=\"1\" class=\"end_info-center\">
                    <img src=\"";
        // line 79
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo-starterdaily-r.png\"/>
                    <h5>gracias</h5>
                </div>  
            </div>   
        </div>
      </footer>
    ";
    }

    // line 87
    public function block_bottom($context, array $blocks = array())
    {
        // line 88
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "      ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 90
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 91
        echo "          ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/starterdaily-mediakit.min.js", 1 => 99), "method");
        // line 92
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
        return array (  285 => 92,  282 => 91,  279 => 90,  276 => 89,  273 => 88,  266 => 93,  263 => 88,  260 => 87,  249 => 79,  241 => 74,  236 => 71,  233 => 70,  228 => 66,  223 => 67,  221 => 66,  216 => 65,  213 => 64,  209 => 54,  206 => 53,  203 => 52,  198 => 48,  187 => 55,  184 => 52,  181 => 51,  178 => 50,  175 => 49,  173 => 48,  164 => 42,  156 => 37,  152 => 36,  144 => 30,  141 => 29,  137 => 23,  134 => 22,  131 => 21,  128 => 20,  125 => 19,  122 => 18,  119 => 17,  117 => 16,  114 => 15,  111 => 14,  108 => 13,  105 => 12,  97 => 24,  95 => 12,  90 => 10,  85 => 9,  83 => 8,  74 => 7,  71 => 6,  65 => 95,  63 => 87,  60 => 86,  58 => 70,  55 => 69,  53 => 64,  50 => 63,  48 => 29,  44 => 28,  41 => 27,  39 => 6,  36 => 5,  34 => 4,  29 => 1,);
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
/*         {% do assets.addCss('theme://css/starterdaily-mediakit.css') %}*/
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
/*       <header id="header">*/
/* */
/*         <div class="content-menu">*/
/* */
/*             <div class="logo">*/
/*                 <h1>*/
/*                 <a href="{{ base_url == '' ? '/' : base_url }} ">*/
/*                     <img src="{{ theme_url }}/images/logo-starterdaily-r.png"/>*/
/*                 </a>*/
/*                 </h1>*/
/*             </div>*/
/* */
/*             <div class="mobile-menu"><img src="{{ theme_url }}/images/category.png"/></div>*/
/*             <div class="menu-mobile-media">*/
/*             */
/*             </div>*/
/* */
/*             <div id="navbar">*/
/*               {% block header_extra %}{% endblock %}*/
/*               {% if config.plugins.langswitcher.enabled %}*/
/*               {% include 'partials/langswitcher.html.twig' %}*/
/*               {% endif %}*/
/*               {% block header_navigation %}*/
/*               {% include 'partials/navigation.html.twig' %}*/
/*               {% endblock %}*/
/*               <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*             </div>*/
/* */
/*         </div>     */
/* */
/* */
/*       </header>*/
/*     {% endblock %}*/
/* */
/*     {% block body %}*/
/*       <section class="{{ class }}">*/
/*           {% block content %}{% endblock %}*/
/*       </section>*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*       <footer class="footer">*/
/*         <div class="end_mediakit_content">*/
/*             <div class="end_mediakit">*/
/*                <img src="{{ theme_url }}/images/imagen-bg.jpg"/>  */
/*             </div>*/
/*             <div class="bg-color"></div>*/
/*             <div markdown="1" class="end_info">*/
/*                 <div markdown="1" class="end_info-center">*/
/*                     <img src="{{ theme_url }}/images/logo-starterdaily-r.png"/>*/
/*                     <h5>gracias</h5>*/
/*                 </div>  */
/*             </div>   */
/*         </div>*/
/*       </footer>*/
/*     {% endblock %}*/
/* */
/*     {% block bottom %}*/
/*       {% block javascripts %}*/
/*           {% do assets.addJs('jquery',101) %}*/
/*           {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}*/
/*           {% do assets.addJs('theme://js/starterdaily-mediakit.min.js',99) %}*/
/*       {% endblock %}*/
/*       {{ assets.js() }}*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
