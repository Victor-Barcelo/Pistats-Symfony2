<?php

/* VbvPistatsBundle:User:new.html.twig */
class __TwigTemplate_9033fd2fc1d9fe26bd2316bf89eff71eb9f52977a9b23355f232313414458ec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VbvPistatsBundle:Main:layout.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->env->loadTemplate("VbvPistatsBundle:User:new.html.twig", "1797841145")->display($context);
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}


/* VbvPistatsBundle:User:new.html.twig */
class __TwigTemplate_9033fd2fc1d9fe26bd2316bf89eff71eb9f52977a9b23355f232313414458ec8_1797841145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VbvPistatsBundle:User:layout.html.twig");

        $this->blocks = array(
            'user_main' => array($this, 'block_user_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VbvPistatsBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_main($context, array $blocks = array())
    {
        // line 5
        echo "            ";
        $this->displayParentBlock("user_main", $context, $blocks);
        echo "

\t\t\t    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

\t\t\t\t<script>
\t\t\t\t    \$('#list-tab').removeClass('active');
\t\t\t\t    \$('#new-tab').addClass('active');
\t\t\t\t    \$('#show-tab').addClass('disable');
\t\t\t\t    \$('#edit-tab').addClass('disable');
\t\t\t\t</script>

        ";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 7,  80 => 5,  77 => 4,  31 => 3,  28 => 2,);
    }
}
