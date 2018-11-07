$(document).ready(function(){
	
	function stripZzz(resText, dispElem, url){
	
		$('.remZzz').remove();
									
		var dv = document.createElement('div');
		var sc = document.createElement('script');
		
		dv.style.visibility = 'hidden';
		dv.classList.add('remZzz');
		dv.innerHTML = resText;
		
		sc.type = 'text/javascript';
		sc.src = ab_path+'public/js/stripZzzReclam.js';
		sc.classList.add('remZzz');
		
		sc.onload = function(){
			
			if(typeof url !== 'undefined'){
				dv.innerHTML = dv.innerHTML.substr(0, dv.innerHTML.indexOf('<'));
			}else{
				dv.innerHTML = dv.innerHTML.replace('<!--]-->', '');
				dv.innerHTML = dv.innerHTML.replace('<!-- zzz </body><!-->', '');
			}
			
			dispElem.trigger('contentLoaded', { content: dv.innerHTML });
		};
		
		document.body.appendChild(sc);
		document.body.appendChild(dv);
	}
	
	window.stripZzz = stripZzz;
});