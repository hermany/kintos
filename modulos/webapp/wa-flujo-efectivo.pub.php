<div class="pub-header">
	<a class="btn-forma btn-lista-vg"><i class="icn icn-list"></i> Modo lista</a>
</div>
<div class="pub-inner">
		<div class="title">
			<?php echo $mes_a; ?>
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
		<div class="botones">
			<a class="btn-nueva-accion btn btn-primary"><i class="icn icn-plus"></i> Nueva Transacción</a>
			<div class="box-nueva-accion">
				<i class="icn icn-up icn-arrow-o-up"></i>
				<ul>
					<li><a class="btn btn-link btn-modal-accion" nombre="nuevo-egreso" tarea="tpl_nuevo_egreso"><i class="icn icn-play icn-egreso"></i> Egreso</a> <a class="info info-egreso">?</a></li>
					<!-- <li><a class="btn btn-link"><i class="icn icn-play icn-egreso-fijo"></i> Egreso Fijo</a> <a class="info info-egreso-fijo">?</a></li> -->
					<!-- <li class="li-borde"><a class="btn btn-link"><i class="icn icn-minus-circle icn-egreso-deuda"></i> Deuda</a> <a class="info info-egreso-deuda">?</a></li> -->
					<li><a class="btn btn-link"><i class="icn icn-play icn-ingreso-extra"></i> Ingreso</a> <a class="info info-ingreso-extra">?</a></li>
					<!-- <li class="li-borde"><a class="btn btn-link"><i class="icn icn-play icn-ingreso-fijo"></i> Ingreso Fijo</a> <a class="info info-ingreso-fijo">?</a></li> -->
					<!-- <li><a class="btn btn-link"><i class="icn icn-plus-circle icn-ingreso-prestamo"></i> Ingreso por Prestamo</a><a class="info info-ingreso-prestamo">?</a></li> -->
					<!-- <li><a class="btn btn-link"><i class="icn icn-bank icn-saldo-banco"></i> Saldo Banca</a><a class="info info-saldo-banco">?</a></li> -->
				</ul>
			</div>
		</div>
	</div>