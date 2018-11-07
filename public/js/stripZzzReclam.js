$(document).ready(function(){

	function reclamZzzStrip(){
		var cba = $('.cbalink');
		var cum = $('.cumf_bt_form_wrapper');
		var scz = $('script');
		
		scz.each(function(){
			
			if(typeof $(this).attr('src') !== 'undefined'){
				
				if($(this).attr('src').match(/zzz/im) !== null){
					$(this).remove();
				}
			}
		});
		
		cba.remove();
		cum.remove();
	}
	
	reclamZzzStrip();
	
	window.reclamZzzStrip = reclamZzzStrip;
});