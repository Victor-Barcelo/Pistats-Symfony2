<?php

/* VbvPistatsBundle:Main:header.html.twig */
class __TwigTemplate_1bc98a4a98916530c227f922cf60608b366bc342b7655a7eb62ee710b2d33c6a extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("vbv_pistats_homepage");
        echo "\">Pistats</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li id=\"role-label\">Rol: [";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "Administrador";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "Usuario";
        }
        echo "]</li>
                <li class=\"\" id=\"status\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("vbv_pistats_homepage");
        echo "\">Estado<span class=\"sr-only\">(current)</span></a></li>
                ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " <li id=\"user-admin\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user");
            echo "\">Administración de usuarios</a></li>";
        }
        // line 17
        echo "                <li id=\"user-config\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#user-config-modal\">Configuracion de usuario</a></li>
                <li id=\"logout\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

";
        // line 24
        $this->env->loadTemplate("VbvPistatsBundle:Main:userConfigModal.html.twig")->display($context);
        // line 25
        echo "    
";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:Main:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  67 => 24,  58 => 18,  55 => 17,  49 => 16,  45 => 15,  37 => 14,  30 => 10,  19 => 1,);
    }
}
