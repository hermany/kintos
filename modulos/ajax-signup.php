<?php 
require_once("../config.php");
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR;

$nom = explode(" ", $fmt->limpiar_cadena($_POST["nombre"]));
$num_n = count($nom);
if ($num_n>4){
	$nombre = $nom[0]." ".$nom[1];
	$apellido = $nom[2]." ".$nom[3];
}else{
	$nombre = $nom[0];
	$apellido = $nom[1]." ".$nom[2];
}

$email = $fmt->limpiar_cadena($_POST["email"]);
$pw = $fmt->limpiar_cadena($_POST["password"]);

$consulta = "SELECT usu_email FROM usuario WHERE usu_email='$email'";
$rs =$fmt->query->consulta($consulta);
$num=$fmt->query->num_registros($rs);
if($num>0){
	 echo "existe";
}else{
	$ingresar = "usu_nombre, usu_apellidos, usu_email, usu_password, usu_activar,usu_estado,usu_padre";
	$valores  = "'".$nombre."','".
	      $apellido."','".
	      $email."','".
	      base64_encode($pw)."','1','1','1'";
	$sql="insert into usuario (".$ingresar.") values (".$valores.")";
	$fmt->query->consulta($sql,__METHOD__);

	$sql="select max(usu_id) as id_usu from usuario";
	$rs= $fmt->query->consulta($sql,__METHOD__);
	$fila = $fmt->query->obt_fila($rs);
	$id = $fila ["id_usu"];

	// ingresar rol
	$ingresar1 ="usu_rol_usu_id, usu_rol_rol_id";
	$valores1 = "'".$id."','3'";
	$sql1="insert into usuario_roles (".$ingresar1.") values (".$valores1.")";
	$fmt->query->consulta($sql1,__METHOD__);

	$fmt->sesion->set_variable("usu_id",$id);
	$fmt->sesion->set_variable("usu_nombre",$nombre." ".$apellido);
	$fmt->sesion->set_variable("usu_mail",$email);
	$fmt->sesion->set_variable("usu_rol",'3');
	$fmt->sesion->set_variable("usu_sitio","kintos");

	echo "ok,"._RUTA_WEB."webapp";
}

?>