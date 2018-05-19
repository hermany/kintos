$(document).ready(function() {
	$('.btn-intro').click(function(event) {
		/* Act on the event */

		var sitio = "http://localhost/server/kintos/";

		var mensaje_1 = "<div class='mensaje-error animated fadeIn'> Upps necesitamos un <b>Nombre</b> para la cuenta. </div>";
		var mensaje_2 = "<div class='mensaje-error animated fadeIn'> Upps en el campo <b>Nombre</b> completo no es un nombre valido .  </div>";
		var mensaje_3 = "<div class='mensaje-error animated fadeIn'> Upps necesitamos un <b>Email</b> para confirmar la cuenta.  </div>";
		var mensaje_4 = "<div class='mensaje-error animated fadeIn'> Upps el campo <b>Email</b> no es una direccion valida.  </div>";
		var mensaje_5 = "<div class='mensaje-error animated fadeIn'> Upps el campo <b>Password</b> esta vacio.  </div>";
		var mensaje_6 = "<div class='mensaje-error animated fadeIn'> Upps necesitamos un <b>Password</b> de más de 7 digitos, te recomendamos: 1 mayuscula, 2 alfanumericos y 1 signo.  </div>";
		var mensaje_7 = "<div class='mensaje-error animated fadeIn'> Upps el <b>Password</b> no coincide con la confirmación :(.  </div>";
		var mensaje_8 = "<div class='mensaje-error animated fadeIn'> Upps si no estas deacuerdo con nuestras políticas no podemos crear una cuenta :(.  </div>";
		var mensaje_9 = "<div class='mensaje-error animated fadeIn'> Ocurrio algun error, por favor intenta nuevamente dentro de 1 hora.  </div>";
		var mensaje_10 = "<div class='mensaje-existe animated fadeIn'> El correo ya esta registrado, recupera tu clave. <a href='"+sitio+"forgot' >Haz click aquí</a>  </div>";

		var nombre = $('#inputNombre').val();
		var email = $('#inputEmailSignup').val();
		var password = $('#passwordSignup').val();
		var c_password = $('#confirmarPasswordSignup').val();
		var aceptar = $('#inputAceptar').val();

		if(nombre==""){
			$("#mensaje-signup").html(mensaje_1);
			$(".nombre .input-group-addon").addClass('error');
			toggleIdCerrar('#mensaje-signup',3000);
		}else{
			var po_no = nombre.split(" ");
			//console.log("palabras:" + po_no.length);
			if(po_no.length <= 1){
				$("#mensaje-signup").html(mensaje_2);
				$(".nombre .input-group-addon").addClass('error');
				toggleIdCerrar('#mensaje-signup',3000);
			}else{
				if (email==""){
					$("#mensaje-signup").html(mensaje_3);
					$(".email .input-group-addon").addClass('error');
					toggleIdCerrar('#mensaje-signup',3000);
				}else{
					if(ValidaEmail(email)==false){
						$("#mensaje-signup").html(mensaje_4);
						$(".email .input-group-addon").addClass('error');
						toggleIdCerrar('#mensaje-signup',3000);
					}else{
						if (password==""){
							$("#mensaje-signup").html(mensaje_5);
							$(".password .input-group-addon").addClass('error');
							toggleIdCerrar('#mensaje-signup',3000);
						}else{
							if(ValidaPw(password)==false){
								$("#mensaje-signup").html(mensaje_6);
								$(".password .input-group-addon").addClass('error');
								toggleIdCerrar('#mensaje-signup',5000);
							}else{
								if (password!=c_password){
									$("#mensaje-signup").html(mensaje_7);
									$(".c-password .input-group-addon").addClass('error');
									toggleIdCerrar('#mensaje-signup',3000);
								}else{
									if ($("#inputAceptar").is(':checked')) {
										// console.log("ok");
										var form_data = new FormData();
										form_data.append("nombre",nombre);
										form_data.append("email",email);
										form_data.append("password",password);
										var ruta = sitio + "modulos/ajax-signup.php";
										$.ajax({
										  url:ruta,
										  type:"post",
										  data:form_data,
										  processData: false,
										  contentType: false,
										  beforeSend: function () {
										  },
										  success: function(msgx){
										  	console.log(msgx);
										  	var dat = msgx.split(",");
										  	if(dat[0]=="existe"){
										  		$("#mensaje-signup").html(mensaje_10);
										  	}else{
											    if(dat[0]!="ok"){
														$("#mensaje-signup").html(mensaje_9);
														toggleIdCerrar('#mensaje-signup',4000);
											    }else{
											    	document.location.href=dat[1];
											    }
										  	}
										  },
										  complete: function(){
										  }
										});
									}else{
										$("#mensaje-signup").html(mensaje_8);
										$(".c-password .input-group-addon").addClass('error');
										toggleIdCerrar('#mensaje-signup',5000);
									}
								}
							}
						}
					}
				}
			}
		}
	});

	$("#inputNombre").keyup(function() {
		/* Act on the event */
		$(".nombre .input-group-addon").removeClass('error');
	});	
	$("#inputEmailSignup").keyup(function() {
		/* Act on the event */
		$(".email .input-group-addon").removeClass('error');
	});	
	$(".password").keyup(function() {
		/* Act on the event */
		$(".password .input-group-addon").removeClass('error');
	});	
	$(".c-password").keyup(function() {
		/* Act on the event */
		$(".c-password .input-group-addon").removeClass('error');
	});

}); //fin ready

function toggleIdCerrar(id,tiempo){
	$( id ).addClass('fadeOut');
	setTimeout(function() {
  $( id ).html("");
}, tiempo );
}

function ValidaEmail(email) {
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regex.test(email);
}

function ValidaPw(pswd){
	if ( pswd.length < 8 ) {
    return false;
  }  
 
 	if ( pswd.match(/[A-z]/) ) {
  } else {
    return false;
  }

  //validate capital letter
  if ( pswd.match(/[A-Z]/) ) {
  } else {
    return false;
  }

  //validate number
  if ( pswd.match(/\d/) ) {
  } else {
    return false;
  }

  return true;
}