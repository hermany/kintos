<?php 
require_once("../../config.php");
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");

$fmt = new CONSTRUCTOR;

$usu = $_POST['usu'];

$html ="";
$html .="<div class='block block-egreso on'>";
$html .=" <div class='header'>";
$html .=" 	<label>Egresos</label>";
$html .=" 	<div class='btns'>";
$html .=" 	<a class='btn-link btn-nuevo'><i class='icn icn-plus'></i></a>";
$html .=" 	<a class='btn-link btn-a'><i class='icn icn-settings'></i></a>";
$html .="		</div>";
$html .=" </div>";
$html .="	<div class='box-egresos'>";
$html .="	</div>";
$html .="	<div class='box-ingresos'>";
$html .="	</div>";
$html .="</div>";
$html .="<div class='tipos-botones'>";
$html .="	<a class='btn btn-default btn-egresos on'><i class='icn icn-play icn-egreso'></i><span>Egreso</span></a>";
$html .="	<a class='btn btn-default btn-ingreso'><i class='icn icn-play icn-ingreso'></i><span>Ingreso</span></a>";
$html .="</div>";

echo $html;

?>