<?php

/* VbvPistatsBundle:Main:userConfigModal.html.twig */
class __TwigTemplate_acf42fd1264dd94c5c16d08472de1dabce42b2fed1fb5934aba7be1719a672e7 extends Twig_Template
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
        // line 9
        echo "
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pistats/js/user_config.js"), "html", null, true);
        echo "\"></script>

<!-- Modal -->
<div class=\"modal fade\" id=\"user-config-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Configuracion de usuario</h4>
      </div>
      <div class=\"modal-body\">

          <form class=\"form-horizontal\">
          <fieldset>

          <!-- Checkbox (inline) -->
          <div class=\"form-group email-notify\">
            <label class=\"col-md-4 control-label\" for=\"checkboxes\">¿Notificar alertas al email?</label>
            <div class=\"col-md-6\">
              <label class=\"checkbox-inline\" for=\"checkboxes-0\">
                <input type=\"checkbox\" name=\"checkboxes\" id=\"\" value=\"1\">
              </label>
            </div>
          </div>

          <!-- Email input-->
          <div class=\"form-group email\">
            <label class=\"col-md-4 control-label\" for=\"textinput\">Email</label>  
            <div class=\"col-md-4\">
            <input name=\"textinput\" type=\"email\" placeholder=\"\" class=\"form-control input-md\">
            </div>
          </div>
          <hr>
          Cambiar contraseña
          <hr>
          <!-- Password input-->
          <div class=\"form-group current-pass\">
            <label class=\"col-md-4 control-label\" for=\"passwordinput\">Contraseña actual</label>
            <div class=\"col-md-4\">
              <input name=\"passwordinput\" type=\"password\" placeholder=\"\" class=\"form-control input-md\">
            </div>
          </div>

          <!-- Password input-->
          <div class=\"form-group new-pass\">
            <label class=\"col-md-4 control-label\" for=\"passwordinput\">Nueva contraseña</label>
            <div class=\"col-md-4\">
              <input name=\"passwordinput\" type=\"password\" placeholder=\"\" class=\"form-control input-md\">
            </div>
          </div>

          <!-- Password input-->
          <div class=\"form-group repeat-new-pass\">
            <label class=\"col-md-4 control-label\" for=\"passwordinput\">Nueva contraseña (repetir)</label>
            <div class=\"col-md-4\">
              <input id=\"\" name=\"passwordinput\" type=\"password\" placeholder=\"\" class=\"form-control input-md\">
            </div>
          </div>

          </fieldset>
          </form>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary save-btn\">Guardar cambios</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "VbvPistatsBundle:Main:userConfigModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 10,  19 => 9,);
    }
}
