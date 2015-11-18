<?php

/* modular/text.html.twig */
class __TwigTemplate_5398c07a555a932c67ad426a96141f96f7eab83c9ed833a56ebc9849fc3912d9 extends Twig_Template
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
