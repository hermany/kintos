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

	$('.btn-nueva-accion').click(function(e) {
		/* Act on the event */
		e.stopPropagation();
		$(".box-nueva-accion").toggleClass('on');
	});

	$('.btn-modal-accion').click(function(e) {
		/* Act on the event */
		e.stopPropagation();
		$(".box-nueva-accion").removeClass('on');
		var tarea= $(this).attr("tarea");
		var nombre= $(this).attr("nombre");
		var contenido = window[tarea];
		var inner = tpl_modal.replace("{nombre-modal}",nombre);
		var inner = inner.replace("{modal-contenido}",contenido);
		// console.log(inner);
		$("body").append(inner); 
		$( ".draggable" ).draggable(function(e){
			e.stopPropagation();
		});
	 
	});

});