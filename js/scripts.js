$(document).ready(function() {
	
	function video_on(){
		$('.video-cmfn').addClass('on');
	}
	
	$('#btn-m2').on('click',function() {
		video_on();
	});

	$('body').on('click', '.mensaje', function() {
		video_on();
	});
	
});
 