$(window).load(function(){
	
	window.reloadFormsCheck = function(){
		
		var scr = document.scripts;

		for(var i = 0; i < scr.length; i++){
			
			if(typeof scr[i].src !== 'undefined'){

				if(scr[i].src.match(/addDBForm/gi) !== null){
					
					$(scr[i]).remove();
					
					var n_scr = document.createElement('script');
					n_scr.type = 'text/javascript';
					n_scr.src = ab_path+'public/js/addDBForm.js';
					
					document.body.appendChild(n_scr);
				}
			}
		}
	};
});