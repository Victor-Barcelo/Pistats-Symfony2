<?php

/* VbvPistatsBundle:User:index.html.twig */
class __TwigTemplate_8474b1f0726c5c13b0b9a8280e1908f31b5527534ff335292f7ec08ba1834d68 extends Twig_Template
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
        $this->env->loadTemplate("VbvPistatsBundle:User:index.html.twig", "1433479612")->display($context);
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:index.html.twig";
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


/* VbvPistatsBundle:User:index.html.twig */
class __TwigTemplate_8474b1f0726c5c13b0b9a8280e1908f31b5527534ff335292f7ec08ba1834d68_1433479612 extends Twig_Template
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

            <table class=\"records_list\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "                    <tr>
                        <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">mostrar</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">editar</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </tbody>
            </table>
        
            <script>
                \$('#list-tab').addClass('active');
                \$('#new-tab').removeClass('active');
            </script>

        ";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  112 => 20,  108 => 19,  102 => 18,  99 => 17,  95 => 16,  80 => 5,  77 => 4,  31 => 3,  28 => 2,);
    }
}
