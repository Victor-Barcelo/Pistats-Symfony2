<?php

/* VbvPistatsBundle:User:show.html.twig */
class __TwigTemplate_f9add1a9c9a3646a8e84316c4dfae38e0170265c039790ba7dce4680891dcb22 extends Twig_Template
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
        $this->env->loadTemplate("VbvPistatsBundle:User:show.html.twig", "99836790")->display($context);
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:show.html.twig";
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


/* VbvPistatsBundle:User:show.html.twig */
class __TwigTemplate_f9add1a9c9a3646a8e84316c4dfae38e0170265c039790ba7dce4680891dcb22_99836790 extends Twig_Template
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

            <table class=\"record_properties\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "password", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "

            <script>
                \$('#list-tab').removeClass('active');
                \$('#new-tab').removeClass('active');
                \$('#show-tab').removeClass('disable');
                \$('#show-tab').addClass('active');
                \$('#edit-tab').addClass('disable');
            </script>

        ";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  112 => 24,  104 => 19,  97 => 15,  90 => 11,  80 => 5,  77 => 4,  31 => 3,  28 => 2,);
    }
}
