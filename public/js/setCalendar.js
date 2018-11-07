$(window).load(function(){

var calDate = $('.clDate');
var countriesE = $('.countries');
var psP = 0;
var clickDate = true;

function setCalendar(days, year){

	var dy = new Date();
	var months = ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'];
	
	for(var yt = 1; yt<=days; yt++){
	
		calDate.each(function(cla){
			
			if( !$(this).hasClass('countries') && !$(this).hasClass('cities') ){
				var el = document.createElement('option');
		
				el.value = yt;
				el.innerHTML = yt;
				
				$(this).children(0).eq(0).append(el);
				
			}
		});
	}
	
	for(var yt = 0; yt<months.length; yt++){
	
		calDate.each(function(cla){
			
			if( !$(this).hasClass('countries') && !$(this).hasClass('cities') ){
				
				var el = document.createElement('option');
				
				el.value = yt+1;
				el.innerHTML = months[yt];
				
				$(this).children(0).eq(1).append(el);
				
			}
		});
	}
	
	for(var yt = dy.getFullYear(); yt>=year; yt--){
	
		calDate.each(function(cla){
			
			if( !$(this).hasClass('countries') && !$(this).hasClass('cities') ){
				
				var el = document.createElement('option');
		
				el.value = yt;
				el.innerHTML = yt;
				
				$(this).children(0).eq(2).append(el);
				
			}
		});
	}
}

calDate.on('mousedown', function(){
	return false;
});

calDate.each(function(){
	
	$(this).find('select').each(function(){
	
		if(typeof this.selectedIn === 'undefined'){
			this.selectedIn = 0;
		}
	});
});


calDate.on('click', function(e){

	var target = $(e.target);
	
	if(target[0].nodeName == 'OPTION'){
		var indexOption = target.index();
	}
	
	while(target[0].nodeName != 'SELECT' && !target.hasClass('editingDate')){
		target = target.parent();
	}
	
	if(typeof indexOption !== 'undefined'){
		target[0].selectedIn = indexOption;
	}
	
	if(!target.hasClass('editingDate')){
		if(clickDate === true){
			target.css('height', '200px');

			clickDate = false;
			
		}else{
			target.css({ 'height': '', 'position': '' });
			target[0].scrollTop = e.target.offsetTop-3;
			clickDate = true;
		}
	}else{
		target.hide();
	}
});

window.setCalendar = setCalendar;

});