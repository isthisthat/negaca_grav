<?php

/* partials/navigation.html.twig */
class __TwigTemplate_0189c3faf388bdb34d78d48f02f32c889166cb767993d28ce09d43754a8b953e extends Twig_Template
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
        echo "<!-- navigation panel -->
<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-main\">
\t<span class=\"sr-only\">Toggle navigation</span>
\t<span class=\"icon-bar\"></span>
\t<span class=\"icon-bar\"></span>
\t<span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">";
        // line 12
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-main\">
      <ul class=\"nav navbar-nav navbar-right\">
\t    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "\t\t";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 19
                echo "\t\t    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 20
                echo "\t\t    <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
\t\t";
            }
            // line 22
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 22,  50 => 20,  47 => 19,  44 => 18,  40 => 17,  32 => 12,  19 => 1,);
    }
}
/* <!-- navigation panel -->*/
/* <nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">*/
/* 	<span class="sr-only">Toggle navigation</span>*/
/* 	<span class="icon-bar"></span>*/
/* 	<span class="icon-bar"></span>*/
/* 	<span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">{{ site.title }}</a>*/
/*     </div>*/
/* */
/*     <div class="collapse navbar-collapse" id="navbar-collapse-main">*/
/*       <ul class="nav navbar-nav navbar-right">*/
/* 	    {% for page in pages.children %}*/
/* 		{% if page.visible %}*/
/* 		    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/* 		    <li class="{{ current_page }}"><a href="{{ page.url }}">{{ page.menu }}</a></li>*/
/* 		{% endif %}*/
/* 	    {% endfor %}*/
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
