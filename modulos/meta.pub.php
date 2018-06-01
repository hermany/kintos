
<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" /> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="screen" /> -->
<link rel="stylesheet" href="<?php echo _RUTA_WEB_NUCLEO; ?>css/bootstrap.min.css" type="text/css" media="screen" />
<link href="<?php echo _RUTA_WEB_NUCLEO; ?>css/animate.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
<script src="<?php echo _RUTA_WEB_NUCLEO; ?>js/jquery.min.js"  crossorigin="anonymous"></script>
<script src="<?php echo _RUTA_WEB; ?>js/animaciones.js"  crossorigin="anonymous"></script>
<script src="<?php echo _RUTA_WEB; ?>js/scripts.js"  crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?php echo _RUTA_WEB_NUCLEO; ?>css/animate.css" type="text/css" media="screen" />

<!-- <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

<?php
$rand = range(1, 100);
shuffle($rand);
foreach ($rand as $val) {
  $vrand = $val;
}
?>
<link rel="stylesheet" href="<? echo _RUTA_WEB_NUCLEO;?>css/bootstrap-datetimepicker.min.css?reload" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<? echo _RUTA_WEB_NUCLEO;?>css/datetimepicker.adm.css?reload" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo _RUTA_WEB_NUCLEO; ?>js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo _RUTA_WEB_NUCLEO; ?>js/bootstrap-datetimepicker.es.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo _RUTA_WEB; ?>css/default.theme.css?reload=<?php echo $vrand;?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo _RUTA_WEB_NUCLEO; ?>css/icon-font.css?reload=<?php echo $vrand;?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo _RUTA_WEB_NUCLEO; ?>css/lato-font.css?reload=<?php echo $vrand;?>" type="text/css" media="screen" />


