<?php

/* VbvPistatsBundle:User:layout.html.twig */
class __TwigTemplate_4e1ac2d3382503a5f7f7f054596679cfe1095c391813c539582876821d5f92bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_main' => array($this, 'block_user_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t";
        // line 4
        echo "
\t\t    <div id=\"admin-panel\" class=\"panel panel-info center-block\">
\t\t    \t<div class=\"panel-heading\">
\t\t    \t\tAdministracion de usuarios
\t\t    \t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t    \t";
        // line 10
        $this->env->loadTemplate("VbvPistatsBundle:User:nav.html.twig")->display($context);
        // line 11
        echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t";
        // line 12
        $this->displayBlock('user_main', $context, $blocks);
        // line 14
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 17
        echo "\t\t</div>
\t</div>
";
    }

    // line 12
    public function block_user_main($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  49 => 12,  43 => 17,  39 => 14,  37 => 12,  34 => 11,  32 => 10,  24 => 4,  20 => 1,);
    }
}
