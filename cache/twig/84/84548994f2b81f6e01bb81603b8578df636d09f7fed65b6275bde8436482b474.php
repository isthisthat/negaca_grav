<?php

/* partials/base.html.twig */
class __TwigTemplate_afbcacfa589becd663e95935daa41540e67d8d9f546214ca565276e8ad8b6cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "</head>

<body>

";
        // line 49
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "

<div class=\"container marketing\">
    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "</div>

<div class=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted text-center\">&copy; 2016 Grupo Negaça Capoeira. Contact <a href=\"mailto:negaca@capoeiracambridge.co.uk\">negaca@capoeiracambridge.co.uk</a></p>
    </div>
</div>
</body>
";
        // line 63
        $this->displayBlock('bottom', $context, $blocks);
        // line 64
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"/images/favicon.ico\">

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
    ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap.min.css", 1 => 101), "method");
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/carousel.css", 1 => 101), "method");
        // line 24
        echo "
            ";
        // line 26
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap-custom.css", 1 => 100), "method");
        // line 27
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 28
        echo "
            ";
        // line 29
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 34
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 35
        echo "
            ";
        // line 36
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 37
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 38
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 39
            echo "            ";
        }
        // line 40
        echo "
            ";
        // line 41
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "    ";
    }

    // line 63
    public function block_bottom($context, array $blocks = array())
    {
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
        return array (  187 => 63,  183 => 54,  180 => 53,  174 => 41,  171 => 40,  168 => 39,  165 => 38,  162 => 37,  160 => 36,  157 => 35,  154 => 34,  151 => 33,  148 => 32,  142 => 29,  139 => 28,  136 => 27,  133 => 26,  130 => 24,  127 => 23,  124 => 22,  122 => 21,  119 => 20,  114 => 43,  112 => 32,  109 => 31,  107 => 20,  98 => 18,  94 => 16,  88 => 14,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  66 => 5,  63 => 4,  58 => 64,  56 => 63,  46 => 55,  44 => 53,  39 => 50,  37 => 49,  31 => 45,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% if header.description %}*/
/*             <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*             <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*             <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         <link rel="icon" type="image/png" href="/images/favicon.ico">*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {# Bootstrap core CSS #}*/
/*             {% do assets.add('theme://css/bootstrap.min.css',101) %}*/
/*             {% do assets.add('theme://css/carousel.css',101) %}*/
/* */
/*             {# Custom styles for this theme #}*/
/*             {% do assets.add('theme://css/bootstrap-custom.css',100) %}*/
/*             {% do assets.add('theme://css/custom.css',100) %}*/
/* */
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %}*/
/*             {% do assets.add('theme://js/bootstrap.min.js') %}*/
/* */
/*             {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*             {% endif %}*/
/* */
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/* */
/*     {% endblock head %}*/
/* </head>*/
/* */
/* <body>*/
/* */
/* {% include 'partials/navigation.html.twig' %}*/
/* */
/* */
/* <div class="container marketing">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* <div class="footer">*/
/*     <div class="container">*/
/*         <p class="text-muted text-center">&copy; 2016 Grupo Negaça Capoeira. Contact <a href="mailto:negaca@capoeiracambridge.co.uk">negaca@capoeiracambridge.co.uk</a></p>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* {% block bottom %}{% endblock %}*/
/* </html>*/
/* */
