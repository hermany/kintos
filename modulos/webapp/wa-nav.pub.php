<?php
	header("Content-Type: text/html;charset=utf-8");
	require_once(_RUTA_NUCLEO."clases/class-constructor.php");
	$fmt = new CONSTRUCTOR;
	$fmt->publicacion->publicacion($fmt,$pub_id);
	$pub_nom=$fmt->publicacion->get_pub_nombre();
	$pub_id_cat=$fmt->publicacion->get_pub_id_cat();

if ($fmt->sesion->get_variable("usu_id")!=false){
  $id_usu = $fmt->sesion->get_variable("usu_id");
  $id_rol = $fmt->usuario->id_rol_usuario($id_usu);

  $usu_nombre    = $fmt->usuario->nombre_usuario($id_usu);
  $usu_apellidos = $fmt->usuario->apellidos_usuario($id_usu);
  $usu_imagen    = $fmt->usuario->imagen_usuario_mini($id_usu);
  $rol_nombre    = $fmt->usuario->nombre_rol($id_rol);

	define("_USU_NOMBRE",$usu_nombre);
	define("_USU_NOMBRE_COMPLETO",$usu_nombre." ". $usu_apellidos);
	define("_USU_IMAGEN",$img);
	define("_USU_ID",$id_usu);
	define("_USU_ID_ROL",$id_rol);

}else{
  ?>
  <script type="text/javascript">
    window.location.href = "<?php echo _RUTA_WEB; ?>";
  </script>
  <?php
}


$id_usu = _USU_ID;
$nombre = _USU_NOMBRE;
$nombre_completo = _USU_NOMBRE_COMPLETO;

?>
<script src="<?php echo _RUTA_WEB; ?>js/webapp.js"  crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo _RUTA_WEB; ?>css/webapp.css?reload" type="text/css" media="screen" />
<div class="pub wa-nav fluid-container">
	<a class="nav-brand" href="<?php echo _RUTA_WEB; ?>" ></a>
  <ul class="nav-inner ">
    <?php echo $fmt->nav->traer_cat_hijos_menu("12","0","1"); ?>
    <li>
    	<a class="btn-perfil"><span><?php echo $nombre; ?></span> <i class="icn icn-chevron-donw"></i></a>
    </li>
  </ul>
  <div class="perfil">
  	<!-- <i class="icn icn-up icn-arrow-o-up"></i> -->
  	<ul>
  		<li><a href="">Ver perfil</a></li>
  		<li><a href="">Cuenta</a></li>
  		<li><a href="">Registro de Actividad</a></li>
  		<li><a href="<?php echo _RUTA_WEB;?>logout">Salir</a></li>
  	</ul>
  </div>
</div>