<?php

/* VbvPistatsBundle:User:edit.html.twig */
class __TwigTemplate_7a02681ff6e65264e4d882ecca5b7e4979db7288ca1f330168a726b738572777 extends Twig_Template
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
        $this->env->loadTemplate("VbvPistatsBundle:User:edit.html.twig", "1031140223")->display($context);
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:edit.html.twig";
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


/* VbvPistatsBundle:User:edit.html.twig */
class __TwigTemplate_7a02681ff6e65264e4d882ecca5b7e4979db7288ca1f330168a726b738572777_1031140223 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
\t\t\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

\t\t\t\t<script>
\t\t\t\t    \$('#list-tab').removeClass('active');
\t\t\t\t    \$('#new-tab').removeClass('active');
\t\t\t\t    \$('#show-tab').addClass('disable');
\t\t\t\t    \$('#edit-tab').addClass('active');
\t\t\t\t</script>

        ";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 8,  86 => 7,  80 => 5,  77 => 4,  31 => 3,  28 => 2,);
    }
}
