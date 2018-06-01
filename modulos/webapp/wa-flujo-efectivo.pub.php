<?php
	header("Content-Type: text/html;charset=utf-8");
	require_once(_RUTA_NUCLEO."clases/class-constructor.php");
	require_once(_RUTA_HOST."modulos/webapp/class-transaccion.php");
	$fmt = new CONSTRUCTOR;
	$transaccion = new TRANSACCION($fmt);
	$usu = $fmt->sesion->get_variable("usu_id");
	$fecha = $fmt->class_modulo->date_formateado("America/La_Paz","d-m-Y");
?>
<div class="pub pub-flujo-efectivo">
	<div class="pub-header pub-header-flujo-efectivo">
		<a class="btn-forma btn-lista-vg"><i class="icn icn-list"></i> Modo lista</a>
	</div>
	<div class="pub-inner pub-inner-flujo-efectivo">
		<div class="title title-mes">
			<?php echo $mes_a; ?>
		</div>
		<div class="estados">
			<div class="total-monto total-ingresos">
				<label>Ingresos</label>
				<span>Bs.- 350.00</span>
			</div>				
			<div class="total-monto total-egresos">
				<label>Egresos</label>
				<span>Bs.- 350.00</span>
			</div>				
			<div class="total-monto total-estado">
				<label>Resultado</label>
				<span>Bs.- 5.00</span>
			</div>
		</div>
		<div class="pub-transacciones">
				<?php 
				  $btn_crear  ="<div class='agregar-transaccion'>";
				  $btn_crear .="<a class='elegir-icon elegir-tipo-transaccion'>";
				  $btn_crear .="	<i class='icn icn-plus-circle'></i>";
				  $btn_crear .="</a>";
				  $btn_crear .="<div class='tipo-transaccion' usu='".$usu."'></div>";
				  $btn_crear .="<span class='fe-btn fe-tipo-moneda'>Bs.</span>";
				  $btn_crear .="<input tipe='text' placeholder='0.00' id='inputMonto' name='inputMonto' />";
				  $btn_crear .="<input tipe='text' placeholder='Detalle' id='inputDetalle' name='inputDetalle' />";
				  $btn_crear .="<a class='fe-quien' usu='".$usu."'><i class='icn icn-user'></i> <span>Yo</span></a>";
				  $btn_crear .="<span class='calendar'><i class='btn-calendar icn icn-calendar'></i> <input type='text' id='inputFecha' name='inputFecha' value='".$fecha."'></span>";
				  $btn_crear .="<a class='btn btn-primary btn-agregar-transaccion'><i class='icn icn-plus'></i></a>";
				  $btn_crear .="</div>";

					if ($transaccion->tiene_transacciones($usu)){

					}else{
						echo $btn_crear;
						echo "<div class='mensaje-sin-transaccion'>";
						echo "<h2>Todavía no tienes transacciones</h2>";
						echo "<h4>Inicia cuanto antes</h4>";
						echo "<a class='btn btn-default btn-iniciar-transaccion'>Crear una transacción</a>";
						echo "</div>";
					}
				?>
			</div>
	</div>

</div>