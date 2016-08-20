<?php

/* modular/section.html.twig */
class __TwigTemplate_6a3602dad37af796e6b996cae5fa351be9c8ef2f892675d934561aa01fc12b95 extends Twig_Template
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
        echo "
<!-- section - ";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
        echo " -->
<div id=\"";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
        echo "\" class=\"pad-section\">
  <div class=\"container\">
    <h2>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
    <br>
      <div class=\"row\">
        <div class=\"col-sm-12\">
          ";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
        echo " section -->
";
    }

    public function getTemplateName()
    {
        return "modular/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  38 => 9,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <!-- section - {{ page.menu }} -->*/
/* <div id="{{ page.menu }}" class="pad-section">*/
/*   <div class="container">*/
/*     <h2>{{ page.title }}</h2>*/
/*     <br>*/
/*       <div class="row">*/
/*         <div class="col-sm-12">*/
/*           {{ page.content }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <!-- /{{ page.menu }} section -->*/
/* */
