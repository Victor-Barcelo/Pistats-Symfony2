<?php

/* VbvPistatsBundle:Main:index.html.twig */
class __TwigTemplate_58e0b0f66e5b5a41a07d0bee72dae6264b762f518f1d88460d3a52691b9f03c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VbvPistatsBundle:Main:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'inlinejs' => array($this, 'block_inlinejs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VbvPistatsBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Pistats ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<div style=\"max-width: 900px;\" class=\"center-block\">
\t
\t<div class=\"container-fluid main-section\">

";
        // line 42
        echo "\t  

\t  <script type=\"text/javascript\">
\t    ";
        // line 45
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["tempChart"]) ? $context["tempChart"] : $this->getContext($context, "tempChart")));
        echo "
\t    ";
        // line 46
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["lightChart"]) ? $context["lightChart"] : $this->getContext($context, "lightChart")));
        echo "
\t  </script>

      <div class=\"row\" >  
\t    <div class=\"col-md-12 main\">
\t      <div class=\"panel panel-primary\">
\t        <div class=\"panel-heading\">Registro de temperatura</div>
\t        <div class=\"panel-body\">
\t        \t<div id=\"tempChart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>

      <div class=\"row\" >  
\t    <div class=\"col-md-12 main\">
\t      <div class=\"panel panel-primary\">
\t        <div class=\"panel-heading\">Registro de luminosidad</div>
\t        <div class=\"panel-body\">
\t        \t<div id=\"lightChart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t  
";
        // line 80
        echo "\t
\t</div> ";
        // line 82
        echo "
</div>

";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $this->displayBlock('inlinejs', $context, $blocks);
    }

    public function block_inlinejs($context, array $blocks = array())
    {
        // line 89
        echo "\t\t<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
\t\t";
        // line 91
        echo "\t\t<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
\t\t<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
        <script type=\"text/javascript\">
            window.onload = function() {
            };
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 91,  104 => 89,  97 => 88,  94 => 87,  87 => 82,  84 => 80,  56 => 46,  52 => 45,  47 => 42,  40 => 6,  37 => 5,  31 => 3,);
    }
}
