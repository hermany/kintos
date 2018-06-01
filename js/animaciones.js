function cerrar(id,tiempo,animacion){
  setTimeout(function() {
  $( id ).removeClass('animated wobble');
  $( id ).removeClass('animated bounceOutRight');
  $( id ).removeClass('animated fadeIn');
  $( id ).removeClass('animated fadeOut');
  $( id ).addClass('animated ' + animacion);
  setTimeout(function() {
    $( id ).removeClass('on animated ' + animacion);
    $( id ).html("");
  },800);
  }, tiempo );
}


