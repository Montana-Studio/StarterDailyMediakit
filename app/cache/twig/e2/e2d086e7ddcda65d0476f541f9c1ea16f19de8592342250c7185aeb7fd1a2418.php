<?php

/* modular/text.html.twig */
class __TwigTemplate_f4657bc86273e3ac42bd2c74a5d868e761c062526a44d0bb29af41c5bc2ccb6a extends Twig_Template
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
        // line 3
        echo "    ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 5,  19 => 3,);
    }
}
/* {##% set image = page.media.images|first %##}*/
/* {##% if image %##}*/
/*     {##{ image.cropResize(400,400).html('','','align-'~page.header.image_align) }##}*/
/* {##% endif %##}*/
/* {{ content }}*/
/* */
