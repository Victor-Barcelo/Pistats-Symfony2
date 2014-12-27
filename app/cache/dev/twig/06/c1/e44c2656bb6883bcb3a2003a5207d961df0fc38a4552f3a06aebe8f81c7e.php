<?php

/* VbvPistatsBundle:Main:footer.html.twig */
class __TwigTemplate_06c1e44c2656bb6883bcb3a2003a5207d961df0fc38a4552f3a06aebe8f81c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'inlinejs' => array($this, 'block_inlinejs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('inlinejs', $context, $blocks);
    }

    public function block_inlinejs($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:Main:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }
}
