<?php

/* VbvPistatsBundle:User:modal.html.twig */
class __TwigTemplate_a3f44a9731b52c7d46e46080eea72ba290c36d30faecd2cf6aa97e1d8ad07109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modalBody' => array($this, 'block_modalBody'),
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
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
      <h4 class=\"modal-title\" id=\"myModalLabel\">Administración de usuarios</h4>
    </div>
    
    <div class=\"modal-body\">
      <ul class=\"nav nav-pills\"> 
        <li id=\"list-tab\" role=\"presentation\" class=\"\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Lista de usuarios</a></li>
        <li id=\"new-tab\" role=\"presentation\" class=\"\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Crear nuevo usuario</a></li>
        <li id=\"show-tab\" role=\"presentation\" class=\"disabled\"><a href=\"#\">Mostrar usuario</a></li>
        <li id=\"edit-tab\" role=\"presentation\" class=\"disabled\"><a href=\"#\">Editar usuario</a></li>
      </ul>
      <hr>
        ";
        // line 28
        $this->displayBlock('modalBody', $context, $blocks);
        // line 29
        echo "    </div>
    
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-primary save-btn\">Guardar cambios</button>
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
  </div>
</div>
</div>
<!-- </dialog> -->";
    }

    // line 28
    public function block_modalBody($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  78 => 29,  76 => 28,  68 => 23,  64 => 22,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  20 => 1,);
    }
}
