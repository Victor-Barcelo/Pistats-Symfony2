<?php

/* VbvPistatsBundle:User:nav.html.twig */
class __TwigTemplate_0cfc2a78a974435e4487a211755e9ff9c6b1e026f245f2f766dfc993f77137e3 extends Twig_Template
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

<!-- Modal -->
      <ul class=\"nav nav-pills\"> 
        <li id=\"list-tab\" role=\"presentation\" class=\"\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Lista de usuarios</a></li>
        <li id=\"new-tab\" role=\"presentation\" class=\"\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Crear nuevo usuario</a></li>
        <li id=\"show-tab\" role=\"presentation\" class=\"disabled\"><a href=\"#\">Mostrar usuario</a></li>
        <li id=\"edit-tab\" role=\"presentation\" class=\"disabled\"><a href=\"#\">Editar usuario</a></li>
      </ul>
<!-- </dialog> -->";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
