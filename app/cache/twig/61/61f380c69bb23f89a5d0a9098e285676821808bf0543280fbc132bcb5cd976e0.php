<?php

/* partials/plugins-details.html.twig */
class __TwigTemplate_7320675504b347d69d0f6a491921f7d7f19d9224aad86d0f296924a5734d7425 extends Twig_Template
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
        $context["gpm"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array(), "method");
        // line 2
        $context["installed"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isPluginInstalled", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
        // line 3
        echo "
<div class=\"grav-update plugin\" data-gpm-plugin=\"";
        // line 4
        echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array());
        echo "\">
";
        // line 5
        if (((isset($context["installed"]) ? $context["installed"] : null) && $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isPluginUpdatable", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method"))) {
            // line 6
            echo "    ";
            $context["remote"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "getRepositoryPlugin", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
            // line 7
            echo "        <p>
            <i class=\"fa fa-bullhorn\"></i>
            <strong>v";
            // line 9
            echo $this->getAttribute((isset($context["remote"]) ? $context["remote"] : null), "available", array());
            echo "</strong> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.OF_THIS_PLUGIN_IS_NOW_AVAILABLE");
            echo "!
            <button class=\"button button-small secondary\" data-download=\"";
            // line 10
            echo $this->getAttribute((isset($context["remote"]) ? $context["remote"] : null), "zipball_url", array());
            echo "\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATE_PLUGIN");
            echo "</button>
        </p>
";
        }
        // line 13
        echo "</div>

<h1>
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
        echo "
    ";
        // line 17
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => (isset($context["plugin"]) ? $context["plugin"] : null)), "method")) {
            // line 18
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN");
            echo "\"></i></span></small>
    ";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "symlink", array())) {
            // line 21
            echo "    <small class=\"hint--bottom\" data-hint=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED");
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 25
        echo "    <small>";
        echo (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version", array())) ? (("v" . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version", array())))) : (""));
        echo "</small>
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 28
        echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "icon", array());
        echo "\"></i>
    ";
        // line 29
        $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-details.html.twig", 29)->display(array_merge($context, array("plugin" => (isset($context["plugin"]) ? $context["plugin"] : null))));
        // line 30
        echo "</div>

";
        // line 32
        if ((isset($context["installed"]) ? $context["installed"] : null)) {
            // line 33
            echo "    ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("plugins/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
            // line 34
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/plugins-details.html.twig", 34)->display(array_merge($context, array("data" => (isset($context["data"]) ? $context["data"] : null), "blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()))));
            // line 35
            echo "
    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        <a class=\"button\" href=\"";
            // line 38
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/plugins/") . $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array())) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "uninstall"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\"><i class=\"fa fa-fw fa-warning\"></i>";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_PLUGIN");
            echo "</a>
    </div>
";
        } else {
            // line 41
            echo "    <div class=\"button-bar success\">
        <a class=\"button\" href=\"";
            // line 42
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/plugins/") . $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "slug", array())) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "install"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\"><i class=\"fa fa-fw fa-plus\"></i>";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_PLUGIN");
            echo "</a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/plugins-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  119 => 41,  111 => 38,  106 => 35,  103 => 34,  100 => 33,  98 => 32,  94 => 30,  92 => 29,  88 => 28,  81 => 25,  73 => 21,  70 => 20,  64 => 18,  62 => 17,  58 => 16,  53 => 13,  45 => 10,  39 => 9,  35 => 7,  32 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set gpm = admin.gpm() %}*/
/* {% set installed = gpm.isPluginInstalled(admin.route) %}*/
/* */
/* <div class="grav-update plugin" data-gpm-plugin="{{ admin.route }}">*/
/* {% if installed and gpm.isPluginUpdatable(admin.route) %}*/
/*     {% set remote = gpm.getRepositoryPlugin(admin.route) %}*/
/*         <p>*/
/*             <i class="fa fa-bullhorn"></i>*/
/*             <strong>v{{ remote.available }}</strong> {{ "PLUGIN_ADMIN.OF_THIS_PLUGIN_IS_NOW_AVAILABLE"|tu }}!*/
/*             <button class="button button-small secondary" data-download="{{ remote.zipball_url }}">{{ "PLUGIN_ADMIN.UPDATE_PLUGIN"|tu }}</button>*/
/*         </p>*/
/* {% endif %}*/
/* </div>*/
/* */
/* <h1>*/
/*     {{ plugin.name|e }}*/
/*     {% if admin.isTeamGrav(plugin) %}*/
/*         <small><span class="info-reverse"><i class="fa fa-check-circle" title="{{ "PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"|tu }}"></i></span></small>*/
/*     {% endif %}*/
/*     {% if plugin.symlink %}*/
/*     <small class="hint--bottom" data-hint="{{ "PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"|tu }}">*/
/*         <i class="fa fa-fw fa-link"></i>*/
/*     </small>*/
/*     {% endif %}*/
/*     <small>{{ plugin.version ? 'v' ~ plugin.version|e }}</small>*/
/* </h1>*/
/* <div class="gpm-item-info">*/
/*     <i class="gpm-item-icon fa fa-fw fa-{{ plugin.icon }}"></i>*/
/*     {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}*/
/* </div>*/
/* */
/* {% if (installed) %}*/
/*     {% set data = admin.data('plugins/' ~ admin.route) %}*/
/*     {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}*/
/* */
/*     <div class="button-bar danger">*/
/*         <span class="danger-zone"></span>*/
/*         <a class="button" href="{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ plugin.slug ~ '/task' ~ config.system.param_sep ~ 'uninstall', 'admin-form', 'admin-nonce') }}"><i class="fa fa-fw fa-warning"></i>{{ "PLUGIN_ADMIN.REMOVE_PLUGIN"|tu }}</a>*/
/*     </div>*/
/* {% else %}*/
/*     <div class="button-bar success">*/
/*         <a class="button" href="{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ plugin.slug ~ '/task' ~ config.system.param_sep ~ 'install', 'admin-form', 'admin-nonce') }}"><i class="fa fa-fw fa-plus"></i>{{ "PLUGIN_ADMIN.INSTALL_PLUGIN"|tu }}</a>*/
/*     </div>*/
/* {% endif %}*/
/* */