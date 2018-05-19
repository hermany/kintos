<?php
	header("Content-Type: text/html;charset=utf-8");
	require_once(_RUTA_NUCLEO."clases/class-constructor.php");
	$fmt = new CONSTRUCTOR;
	$fmt->publicacion->publicacion($fmt,$pub_id);
	$pub_nom=$fmt->publicacion->get_pub_nombre();
	$pub_id_cat=$fmt->publicacion->get_pub_id_cat();
	$hoy=  $this->fmt->class_modulo->fecha_hoy("America/La_Paz");
	$mes_a =$this->fmt->class_modulo->date_formato($hoy,"normal",$formato="m,a")

?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-nav-item-18").addClass('active');
	});
</script>
<div class="loading on">cargando</div>
<div class="pub pub-<?php echo $pub_nom; ?>">

	<div class="pub-sidebar">
		<a class="btn-ocultar-sidebar"><i class="icn icn-chevron-left"></i></a>
		<div class="seccion vision-general">

			<label class='title-seccion'> Visión General</label>
			<ul>
				<?php echo $fmt->nav->traer_cat_hijos_menu("17","0","1"); ?>
			</ul>
		</div>
		</ul>
	</div>
	<div class="pub-body">
		<?php require_once 'wa-flujo-efectivo.pub.php'; ?>
	</div>
</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>