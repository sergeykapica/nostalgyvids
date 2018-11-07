$(window).load(function(){
	
	var checkButton = $('.checkValue');
	
	checkButton.on('change', function(){
		
		var th = $(this);
		
		if(th.prop('checked') === true){
			
			th.next().css(
			{
				'background': 'url('+ab_path+'public/images/check.png) no-repeat center',
				'background-size': '50px'
			}	
			);
			
		}else{
			th.next().css('background', '');
		}
	});
});