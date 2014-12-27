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

\t  <div class=\"row\"> 
\t    <div class=\"col-md-12 main\">
\t      <div class=\"panel panel-primary\">
\t        <div class=\"panel-heading\">Información</div>
\t        <div class=\"panel-body\">
\t          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t        </div>
\t      </div>
\t    </div>
\t  </div>

\t  <div class=\"row\">
\t    <div class=\"col-md-12 main\">
\t      <div class=\"panel panel-primary\">
\t        <div class=\"panel-heading\">Almacenamiento</div>
\t        <div class=\"panel-body\">
\t          <p><?=\$disk_info['name']?> (<?=\$disk_info['max_capacity']?>) - <?=\$disk_info['usage']?> Disponibles</p>  
\t          <div class=\"progress\">
\t            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: <?=\$disk_info['usage_percent']?>%;\">
\t              <?=\$disk_info['usage_percent']?> %
\t            </div>
\t          </div>    
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t  
\t  <div class=\"row\" >  
\t    <div class=\"col-md-12 main\">
\t      <div class=\"panel panel-primary\" id=\"map-container\">
\t        <div class=\"panel-heading\">Registro de temperatura<button type=\"button\" id=\"chart-refresh_btn\" class=\"btn btn-info btn-xs pull-right\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span></button></div>
\t        <div class=\"panel-body\" id=\"chart-div\">

\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t
\t</div>

</div>

";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $this->displayBlock('inlinejs', $context, $blocks);
    }

    public function block_inlinejs($context, array $blocks = array())
    {
        // line 62
        echo "\t\t<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/temperature_chart.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            window.onload = function() {
                // \$(\"#header-but-search\").addClass(\"active\");
                // \$(\"#header-but-create\").removeClass(\"active\");
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
        return array (  109 => 63,  106 => 62,  99 => 61,  96 => 60,  40 => 6,  37 => 5,  31 => 3,);
    }
}
