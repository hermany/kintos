<?php
// require_once(_RUTA_HOST."/nucleo/config.php");
// require_once(_RUTA_HOST."/nucleo/clases/class-mysql.php");
// //echo "Class BRAND";
header('Content-Type: text/html; charset=utf-8');

class TRANSACCION{

	var $fmt;

  function __construct($fmt) {
    $this->fmt = $fmt;
  }

  public function tiene_transacciones($usu){
		$consulta = "SELECT mod_tra_id FROM  mod_transaccion WHERE mod_tra_usu_id=$usu";
		$rs =$this->fmt->query->consulta($consulta);
		$num=$this->fmt->query->num_registros($rs);
		if($num>0){
			return true;
		}else{
			return false;
		}
		$this->fmt->query->liberar_consulta();
  }
}

?>