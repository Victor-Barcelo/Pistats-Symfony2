<?php

/* VbvPistatsBundle:Main:layout.html.twig */
class __TwigTemplate_529f137437456dccd4e158eaee2d65c3099112e8e1a441fdbeab722cbaef10e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\"/>
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/vendor/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>

<body>

<header>
    ";
        // line 21
        $this->env->loadTemplate("VbvPistatsBundle:Main:header.html.twig")->display($context);
        // line 22
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "</header>

<main>
    ";
        // line 26
        $this->displayBlock('main', $context, $blocks);
        // line 27
        echo "</main>

<footer>
    ";
        // line 30
        $this->env->loadTemplate("VbvPistatsBundle:Main:footer.html.twig")->display($context);
        // line 31
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "</footer>

";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "

</body>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Pistats";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/css/vendor/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/css/vendor/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/css/main.css"), "html", null, true);
        echo " \" type=\"text/css\" rel=\"stylesheet \"/>
    ";
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:Main:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 36,  134 => 35,  131 => 34,  126 => 31,  121 => 26,  116 => 22,  109 => 14,  105 => 12,  101 => 11,  96 => 10,  93 => 9,  87 => 6,  78 => 38,  76 => 34,  72 => 32,  69 => 31,  67 => 30,  62 => 27,  60 => 26,  55 => 23,  52 => 22,  50 => 21,  43 => 16,  41 => 9,  37 => 8,  32 => 6,  25 => 1,);
    }
}
