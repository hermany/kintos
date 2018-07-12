	var sitio = "http://localhost/server/kintos/";

	var tpl_modal="<div class='modal modal-{nombre-modal} draggable animated fadeIn'><div class='modal-inner'>{modal-contenido}</div></div>";
	var tpl_nuevo_egreso="<div class='pub-header'><label>Nuevo Egreso</label></div><div class=''></div>";

$(function() {

	//variables

	//acciones load

  resize();
	$(".loading").removeClass("on");
	$(".pub-principal").addClass("on");

	function  resize(){
		/* Act on the event */
		var w = $(window).width();
		var h = $(window).height();
		var h_nav = $(".wa-nav").height();
		var h_principal = h - h_nav;
		var w_pbody = w - 272;

		$(".pub-principal").height(h_principal);
		$(".pub-principal .pub-body").width(w_pbody);
	};

	$(window).resize(function(event) {
		resize();
	});

	//botones webapp
	$('.btn-perfil').click(function( ) {
		$(".perfil").toggleClass('on');
		$(".btn-perfil").toggleClass('on');
	});	

	$('.btn-ocultar-sidebar').click(function( ) {
		$(".pub-sidebar").toggleClass('off');
		$(".pub-body").toggleClass('on');
		$(".btn-ocultar-sidebar").toggleClass('on');
	});

	$('.cont-cuerpo').click(function(event) {
		 $(".perfil").removeClass('on');
		 $(".btn-perfil").removeClass('on');
		 $(".box-nueva-accion").removeClass('on');
		 $( ".draggable" ).remove();
	});

	//iniciar transacciones
	$(".btn-iniciar-transaccion").click(function(){
		$(".mensaje-sin-transaccion").addClass('off');
		cerrar(".mensaje-sin-transaccion",500);
		$(".agregar-transaccion").addClass('on');
		$(".title-mes").addClass('on');
	});

	//transacciones

	$('#inputFecha').datetimepicker({
		language:  'es',
		format: 'dd-mm-yyyy',
		autoclose: true,
		minView: 2,
		minuteStep: 5,
		weekStart: 1,
		forceParse: 0,
		todayBtn: true,
	});
	$(".datetimepicker .prev i").removeClass();
	$(".datetimepicker .next i").removeClass();
	$(".datetimepicker .prev i").addClass("icn icn-chevron-left");
	$(".datetimepicker .next i").addClass("icn icn-chevron-right");

	$("#inputMonto").blur(function(){
		var valor = $(this).val();
		var numero = parseFloat(valor)
		var dinero =  numero.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		// console.log(dinero);
		if (dinero != "NaN"){
			$("#inputMonto").val(dinero);
		}
	});

	$('.elegir-tipo-transaccion').click(function(event) {
		var usu = $(this).attr("usu");
		$(".tipo-bloque").removeClass('on');
		$(".tipo-transaccion").addClass('on');

		var form_data = new FormData();
		form_data.append("usu",usu);
		var ruta = sitio + "modulos/webapp/ajax-elegir-tipo.php";
		$.ajax({
		  url:ruta,
		  type:"post",
		  data:form_data,
		  processData: false,
		  contentType: false,
		  beforeSend: function () {
		  	$(".tipo-transaccion").html("<div class='loading on'></div>");
		  },
		  success: function(msgx){
		    console.log(msgx);
		    $(".tipo-transaccion").html(msgx);
		    $(".tipo-transaccion").mouseleave(function(event) {
		    	setTimeout(function() {
            $(".tipo-transaccion").removeClass('on');
          },1000);
		    });
		  },
		  complete: function(){
		  }
		});
	});

});