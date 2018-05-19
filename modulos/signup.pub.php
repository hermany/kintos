<?php
	header("Content-Type: text/html;charset=utf-8");
	require_once(_RUTA_NUCLEO."clases/class-constructor.php");
	$fmt = new CONSTRUCTOR;
	$fmt->publicacion->publicacion($fmt,$pub_id);
	$pub_nom=$fmt->publicacion->get_pub_nombre();
	$pub_id_cat=$fmt->publicacion->get_pub_id_cat();
?>
<div class="pub pub-<?php echo $pub_nom; ?>">
	<div class="pub-title"></div>
	<div class="pub-inner">
		<form class="form-signup" id="form-signup">
			<a class="nav-brand" href="<?php echo _RUTA_WEB; ?>" ></a>
			<div class="control-group">
				<div id="mensaje-signup"></div>
	      <div class="input-group nombre controls box-md-12">
	        <span class="input-group-addon"><i class="icn-user"></i></span>
	        <input class="form-control input-lg color-border-gris-a color-text-gris"  id="inputNombre" name="inputNombre" placeholder="Nombre Completo" type="text">
	      </div>
	      <div class="input-group email controls box-md-12">
	        <span class="input-group-addon"><i class="icn-email"></i></span>
	        <input type="text" class="form-control input-lg color-border-gris-a  color-text-gris" id="inputEmailSignup" name="inputEmailSignup" placeholder="E-mail"  >
	      </div> 
	       	      
	      <div class="input-group password controls box-md-12">
	        <span class="input-group-addon"><i class="icn-lock"></i></span>
	        <input type="password" class="form-control input-lg color-border-gris-a  color-text-gris" id="passwordSignup" name="passwordSignup" placeholder="Password"  >
	      </div>     
	      <div class="input-group c-password controls box-md-12">
	        <span class="input-group-addon"><i class="icn-lock"></i></span>
	        <input type="password" class="form-control input-lg color-border-gris-a  color-text-gris" id="confirmarPasswordSignup" name="confirmarPasswordSignup" placeholder="Confirmar Password"  >
	      </div>
    	</div>
    	 <label class="form-check-label">
          <input class="form-check-input" id="inputAceptar" type="checkbox" value="" checked>
          Estoy de acuerdo con los <a class='btn-terminos'>terminos y condiciones</a>
        </label>
    	<div class="form-actions">
      	<a class="btn btn-primary btn-lg btn-intro hvr-fade" id="btn-ingresar">Crear Cuenta</a>
    	</div>

		</form>
		<div class="box-signup">
    	¿Ya tienes una cuenta? <a href="<?php echo _RUTA_WEB; ?>login">Ingresar a una cuenta</a>
  	</div>
	</div>
	<div class="login-footer">
    <?php echo _PIE_PAGINA; ?>
  </div>
</div>
<script type="text/javascript" language="javascript" src="<? echo _RUTA_WEB; ?>js/signup.js"></script>