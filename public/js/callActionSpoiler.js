$(window).load(function(){
	
	var callActionButton = $('.callActionSpoiler');
	var isOpen = false;
	
	callActionButton.on('click', function(){
		
		if(isOpen === false){
			$(this).next().slideDown(1000);
			isOpen = true;
		}else{
			$(this).next().slideUp(1000);
			isOpen = false;
		}
	});
});