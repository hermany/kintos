<?php
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR;
$img_bg = $fmt->class_multimedia->multimedia_cat_last("1");
?>
<section class="pub-slide">
	<div class="bg-slide"></div>
	<div class="pub-inner">
		<h1 class="title">Gasta, registra, ahorra e invierte</h1>
		<h3>Te ayudamos a organizar tus finanzas, para que sientas libertad.</h3>
		<a href="<?php echo _RUTA_WEB; ?>signup" class="btn btn-crear-cuenta btn-warning">Crea una cuenta gratis</a>
		<a class="btn-ver-video"><div><i class="icn icn-play"></i> <span>Así funciona</span></div></a>
	</div>
</section>
<section class="pub-icos container-fluid">
	<div class="pub-inner container">
		<div class="promess promess-1"><h4 class="title">Organizate cada día</h4><h5>Ordena TODO de forma sencilla con nuestras sugerencias.</h5></div>
		<div class="promess promess-2"><h4 class="title">Crea presupuestos</h4><h5>No solo eso, programa pagos y logra tus objetivos.</h5></div>
		<div class="promess promess-3"><h4 class="title">¿ Crédito ?</h4><h5>Analíza tus cuentas y en poco tiempo sabremos como obtenerlo.</h5></div>
		<div class="promess promess-4"><h4 class="title">Ahorrar es posible</h4><h5>Con nuestros tips se puede, lo demás depende de tí.</h5></div>
	</div>
</section>
<section class="pub-maquina container-fluid">
</section>