<?php
	header("Content-Type: text/html;charset=utf-8");
	require_once(_RUTA_NUCLEO."clases/class-constructor.php");
	$fmt = new CONSTRUCTOR;
	$fmt->publicacion->publicacion($fmt,$pub_id);
	$pub_nom=$fmt->publicacion->get_pub_nombre();
	$pub_id_cat=$fmt->publicacion->get_pub_id_cat();
?>
<div class="pub pub-<?php echo $pub_nom; ?>">
	<div class="pub-title brand-footer"></div>
	<div class="pub-inner">
		© 2018 kintos, Inc. Todos los derechos reservados - Telf. (591 3)75313126  - soporte@kintos.in Santa Cruz Bolivia.
	</div>
</div>