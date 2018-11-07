$(window).load(function(){

	window.generalAnimations = {
		
		mvBzC: 3,
		movedBezier: function(elem, range){
			
			var th = this;
			
			elem.animate({
				top: range+'px'
			}, {
				duration: 200,
				complete: function(){
					
					var curPos = parseFloat($(this).css('top'));
					
					if(range < 0){
						th.prevRange = range;
						th.movedBezier($(this), 0);
					}else if(range == 0){
						
						if(th.mvBzC >= 0){
							th.movedBezier($(this), th.prevRange*0.5);
							th.mvBzC--;
						}else{
							th.prevRange = 0;
							th.mvBzC = 3;
						}
						
					}
				}
			});
		},
		
		movedModal: function(elem, cur, dur, rel){
			
			var absWHeight = $(window).height();
			var absWWidth = $(window).width();
			var vPos = ( absWHeight / 2 ) - ( elem[0].offsetHeight / 2 );
			var hPos = ( absWWidth / 2 ) - ( elem[0].offsetWidth / 2 );
			
			if(rel === true){
			
				switch(cur){
					
					case 'bottom':
					case 'top':
					
						elem.animate(
						{
							top: vPos+'px'
						},
						{
							duration: dur
						});
					break;
						
					case 'right':
					case 'left':
					
						elem.animate(
						{
							left: hPos+'px'
						},
						{
							duration: dur
						});
					break;
				}
			}else{
				
				switch(cur){
					
					case 'bottom':
					case 'top':
					
						elem.animate(
						{
							top: -( elem[0].offsetHeight + 30 )+'px'
						},
						{
							duration: dur
						});
					break;
						
					case 'right':
					case 'left':
					
						elem.animate(
						{
							left: -( elem[0].offsetWidth + 30 )+'px'
						},
						{
							duration: dur
						});
					break;
				}
			}
			
		}
	};
	
	window.miscFuncs = {
		
		setOverflowPosition: function(elem, cur){
			
			switch(cur){
				
				case 'top':
					elem.css('top', -( elem[0].offsetHeight + 30 )+'px');
				break;
				
				case 'bottom':
					elem.css('bottom', -( elem[0].offsetHeight + 30 )+'px');
				break;
					
				case 'left':
					elem.css('left', -( elem[0].offsetWidth + 30 )+'px');
				break;
				
				case 'right':
					elem.css('right', -( elem[0].offsetWidth + 30 )+'px');
				break;
			}
			
		}
	};
});
	