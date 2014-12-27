<?php

/* VbvPistatsBundle:Main:modalUserAdmin.html.twig */
class __TwigTemplate_aad792fa96c8157676c143abd197773607dfbfbca88ce7a9f17f3a8b3cc9bd5f extends Twig_Template
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
        echo "<!--
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/vendor/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/css/vendor/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/css/vendor/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/css/main.css"), "html", null, true);
        echo " \" type=\"text/css\" rel=\"stylesheet \"/>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/main.js"), "html", null, true);
        echo "\"></script>
-->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
      <h4 class=\"modal-title\" id=\"myModalLabel\">Administración de usuarios</h4>
    </div>
    
    <div class=\"modal-body\">
      <ul class=\"nav nav-pills\"> 
        <li id=\"list-tab\" role=\"presentation\" class=\"\"><a href=\"#\">Lista de usuarios</a></li>
        <li id=\"new-tab\" role=\"presentation\" class=\"\"><a href=\"#\">Crear nuevo usuario</a></li>
        <li id=\"show-tab\" role=\"presentation\" class=\"disabled\"><a href=\"#\">Mostrar usuario</a></li>
        <li id=\"edit-tab\" role=\"presentation\" class=\"disabled\"><a href=\"#\">Editar usuario</a></li>
      </ul>
      <hr>
        ";
        // line 28
        echo "        <div id=\"jaja\"></div>
    </div>
    
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-primary save-btn\">Guardar cambios</button>
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
  </div>
</div>
</div>

  <script>
      \$('#list-tab').click(function(){
        \$('#jaja').load('";
        // line 41
        echo $this->env->getExtension('routing')->getPath("user");
        echo "');
      });

      // removeClass('active');
      // \$('#new-tab').removeClass('active');
      // \$('#show-tab').addClass('disable');
      // \$('#edit-tab').addClass('active');
  </script>";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:Main:modalUserAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  68 => 28,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
