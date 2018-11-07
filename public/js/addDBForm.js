$(document).ready(function(){

	var ftxt = $('.validInput');
	var ftem = $('.validEmail');
	var login = $('.login');
	var register = $('.register');
	var clDay = document.getElementsByName('day');
	var clMonth = document.getElementsByName('month');
	var clYear = document.getElementsByName('year');
	var addToDB = true;

	function getValue(val){
		return document.getElementsByName(val)[0].value;
	}
	
	function getLogin(){

		var xhr = getXmlHttpRequest();

		xhr.onload = function(){
						
			if(xhr.status != 200){
				return;
			}else{
				
				var dv = $(document.createElement('div'));
									
				dv.on('contentLoaded', function(e, con){
					con.content = xhr.responseText;
					if(con.content == false){
					
						var cap = $('.captchaCode').eq(0);
						
						sp = document.createElement('div');
						sp.innerHTML = 'Код капчи введён неверно.';
						sp.classList.add('error');
						sp.style.left = 0;
						sp.style.top = cap[0].offsetHeight-5+'px';
						sp.style.width = cap[0].offsetWidth+'px';
						
						cap.after(sp);
						addToDB = true;
					}else{
						
						if(con.content == 'acceptLogin'){
							window.location.assign(ab_path);
						}else{
						
							var pass = $(document.getElementsByName('enter_password')[0]);
						
							sp = document.createElement('div');
							sp.innerHTML = 'Неверный логин или пароль.';
							sp.style.left = (pass.prev()[0].offsetWidth+parseInt(pass.css('margin-left')))+'px';
							sp.style.top = pass[0].offsetHeight+5+'px';
							sp.classList.add("error");
							sp.style.width = pass[0].offsetWidth+'px';
							
							pass.after(sp);
							
							addToDB = true;
						}
						
						reclamZzzStrip();
					}
				});
				
				stripZzz(xhr.responseText, dv, true);
				
			}
		};

		var stayEl = '';
		
		if($(document.getElementsByName('stayInSystem')[0]).prop('checked') == true){
			stayEl = '&stayed=stayInSystem';
		}
		
		var token = document.getElementsByName('token')[0];

		var postData = 'enter_login='+getValue('enter_login')+'&enter_password='+getValue('enter_password')+'&captchaEnterCode='+getValue('captchaEnterCode')+stayEl+'&token='+token.value;

		xhr.open('POST', 'login_in', true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.setRequestHeader("Content-Length", postData.length);

		xhr.send(postData);
	}

	function setResult(){
		
		var xhr = getXmlHttpRequest();

		xhr.onload = function(){
						
			if(xhr.status != 200){
				return;
			}else{
				addToDB = false;
				//loader.eq(2).hide();
				
				var dv = $(document.createElement('div'));
									
				dv.on('contentLoaded', function(e, con){
					
					if(con.content == false){
					
						var cap = $('.captchaCode').eq(1);
						
						sp = document.createElement('div');
						sp.innerHTML = 'Код капчи введён неверно.';
						sp.classList.add('error');
						sp.style.left = 0;
						sp.style.top = cap[0].offsetHeight-5+'px';
						sp.style.width = cap[0].offsetWidth+'px';
						
						cap.after(sp);
						addToDB = true;
					}else{
						register.eq(0).parent()[0].innerHTML = xhr.responseText;
						reloadFormsCheck();
					}
					
					reclamZzzStrip();
				});
				
				stripZzz(xhr.responseText, dv);

			}
		};
		
		var postData = 'user_login='+getValue('user_login')+'&user_password='+getValue('user_password')+'&user_name='+getValue('user_name')+'&user_surname='+getValue('user_surname')+
		'&day='+clDay[0].selectedIn+'&month='+clMonth[0].selectedIn+'&year='+clYear[0].selectedIn+'&user_email='+getValue('user_email')+
		'&captchaCode='+getValue('captchaCode')+'&token='+getValue('token');
						
		xhr.open('POST', 'register_in', true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.setRequestHeader("Content-Length", postData.length);

		xhr.send(postData);
	}

	function getHttpRequest(target, elMas, url, isset, form){
				
		var xhr = getXmlHttpRequest();

		xhr.onload = function(){
						
			if(xhr.status != 200){
				return;
			}else{
				
				var dv = $(document.createElement('div'));
									
				dv.on('contentLoaded', function(e, con){
					
					if(url == 'checklogin' || url == ab_path+'checklogin'){
					
						//loader.eq(0).hide();
						
						if(isset === false){
						
							if(con.content == false){
								target.classList.add('errorInp');
								elMas[1].innerHTML = 'Данный логин уже существует.';
								$(target).after(elMas[0]);
							}	
						}else{
						
							if(con.content == true){
								target.classList.add('errorInp');
								elMas[1].innerHTML = 'Данный логин не существует.';
								$(target).after(elMas[0]);
							}else{
								
								if(typeof form.find('.error')[0] == 'undefined'){
									form.off('submit');
									form.submit();
								}
							}
						}
						
					}else{
						//loader.eq(1).hide();
						if(con.content == false){
							if(target.getAttribute('name') != 'our_email'){
								target.classList.add('errorInp');
								elMas[1].innerHTML = 'Данный адрес электронной почты уже существует.';
								$(target).after(elMas[0]);
							}
						}else{
							if(target.getAttribute('name') != 'user_email'){
								target.classList.add('errorInp');
								elMas[1].innerHTML = 'Данный адрес электронной почты не найден.';
								$(target).after(elMas[0]);
							}
						}
					}
				});
				
				stripZzz(xhr.responseText, dv);
				
			}
		}

		if(url == 'checklogin' || url == ab_path+'checklogin'){
			var postData = 'user_login='+target.value;
		}else{
			var postData = 'email='+target.value;
		}
						
		xhr.open('POST', url, true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.setRequestHeader("Content-Length", postData.length);

		xhr.send(postData);
	}

	function iterForm(target, form){
		
		try{
		
			ftxt.each(function(pole){
				var et = $(this).parent().find('.editingText');
				var ed = $(this).parent().find('.editingDate');
				
				if(typeof et[0] == 'undefined' && typeof ed[0] == 'undefined' || et.css('display') == 'none'){
					sp = document.createElement('div');
					sp.style.left = $(ftxt).eq(pole).prev().width()+parseInt($(ftxt).eq(pole).css('margin-left'))+'px';
					sp.style.top = ftxt[pole].offsetHeight+5+'px';
					sp.classList.add("error");
					sp.style.width = ftxt[pole].offsetWidth+'px';
					
					if(ftxt[pole].classList.contains('validEmail')){
						var target = ftxt.eq(pole);
						
						while(target.attr('id') != 'rememberPass' && target[0].nodeName != 'FORM'){
							target = target.parent();
						}
						
						if(target.attr('id') == 'rememberPass' && target.css('display') == 'none'){
							return;
						}
					}
					
					if(ftxt[pole].classList.contains('validUrl')){
					
						if(ftxt[pole].value == ""){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Поле должно быть заполнено!';
							ftxt.eq(pole).after(sp);
						}else if(ftxt[pole].value.length < 7){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'В поле меньше 7-и символов!';
							ftxt.eq(pole).after(sp);
						}else if(!/^http:\/\/.+/gm.test(ftxt[pole].value) && !/^https:\/\/.+/gm.test(ftxt[pole].value)){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Введённый текст не является ссылкой!';
							ftxt.eq(pole).after(sp);
						}
						
					}else if(ftxt[pole].getAttribute('name') == 'sale' || ftxt[pole].getAttribute('name') == 'price'){
					
						if(ftxt[pole].value == ""){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Поле должно быть заполнено!';
							ftxt.eq(pole).after(sp);
						}else if(/\d/gm.test(ftxt[pole].value) !== true){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'В поле должно быть число!';
							ftxt.eq(pole).after(sp);
						}else if(ftxt[pole].value < 0.2){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Цена не может быть ниже 0.2 руб.!';
							ftxt.eq(pole).after(sp);
						}else if(ftxt[pole].value > 1000){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Цена не может быть выше 1000 руб.!';
							ftxt.eq(pole).after(sp);
						}
						
					}else if(ftxt[pole].getAttribute('name') == 'PAYMENT_AMOUNT' || ftxt[pole].getAttribute('name') == 'm_amount' || ftxt[pole].getAttribute('name') == 'sum' || ftxt[pole].getAttribute('name') == 'AMOUNT'){
					
						if(ftxt[pole].value == ""){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Поле должно быть заполнено!';
							ftxt.eq(pole).after(sp);
						}else if(/\d/gm.test(ftxt[pole].value) !== true){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'В поле должно быть число!';
							ftxt.eq(pole).after(sp);
						}else if(ftxt[pole].value < 0.2){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Сумма не может быть ниже 0.2 руб.!';
							ftxt.eq(pole).after(sp);
						}
						
					}else if(ftxt[pole].classList.contains('textEditorArea')){
					
						sp.style.left = 0;
						sp.style.top = (ftxt[pole].parentNode.offsetHeight+5)+'px';
					
						if(ftxt[pole].innerHTML == ""){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'Поле должно быть заполнено!';
							ftxt.eq(pole).after(sp);
							return;
						}
						
					if(typeof $('#sendMessageSoc')[0] != 'undefined'){
					
						if(ftxt[pole].innerText.length < 3){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'В тексте меньше 3-х символов!';
							ftxt.eq(pole).after(sp);
						}
					}else{
					
						if(ftxt[pole].innerHTML.length < 10){
							ftxt[pole].classList.add('errorInp');
							sp.innerHTML = 'В тексте меньше 10-и символов!';
							ftxt.eq(pole).after(sp);
						}
					}
						
					}else if(ftxt[pole].classList.contains('vlWallets')){
					
						var vlW = $('.vlWallets');
						var notEmpty;
					
						if(ftxt[pole] == vlW[vlW.length-1]){
							vlW.each(function(){
								if($(this).val() != ''){
									notEmpty = true;
								}
							});
							
							if(typeof notEmpty == 'undefined'){
								ftxt[pole].classList.add('errorInp');
								sp.innerHTML = 'Один из этих платёжных систем должен быть указан!';
								ftxt.eq(pole).after(sp);
							}
						}

					}else if(ftxt[pole].getAttribute('type') == 'password'){
						
						if(ftxt[pole].getAttribute('name') == 'user_password'){
							var i = 0;
						}else{
							var i = 1;
						}
						
						if(ftxt[pole-i].getAttribute('name') == 'user_password'){
						
							if(ftxt[pole-i].value != ftxt[pole].value){
								ftxt[pole].classList.add('errorInp');
								sp.innerHTML = 'Пароли не совпадают!';
								ftxt.eq(pole).after(sp);
							}else{
							
								if(ftxt[pole].value.length < 6 ){
									ftxt[pole].classList.add('errorInp');
									sp.innerHTML = 'В пароле меньше 6-и символов!';
									ftxt.eq(pole).after(sp);
								}else if(ftxt[pole].value.length > 100){
									ftxt[pole].classList.add('errorInp');
									sp.innerHTML = 'В пароле больше 100-а символов!';
									ftxt.eq(pole).after(sp);
								}
							}
						}
					}else if(ftxt[pole].value == ""){
						ftxt[pole].classList.add('errorInp');
						sp.innerHTML = 'Поле должно быть заполнено!';
						ftxt.eq(pole).after(sp);
					}else if(ftxt[pole].value.length < 3){
						ftxt[pole].classList.add('errorInp');
						sp.innerHTML = 'В предложении меньше 3-х букв!';
						ftxt.eq(pole).after(sp);
					}else if(ftxt[pole].value.length > 100){
						ftxt[pole].classList.add('errorInp');
						sp.innerHTML = 'В предложении больше 100-а букв!';
						ftxt.eq(pole).after(sp);
					}else if(ftxt[pole].getAttribute('name') == 'user_login'){
						//loader.eq(0).show();
						getHttpRequest(ftxt[pole], [sp, sp], 'checklogin', false);
					}else if(ftxt[pole].getAttribute('name') == 'sender_login'){
						//loader.eq(0).show();
						
						if(typeof form[0] != 'undefined'){
							
							if(typeof ab_path != 'undefined'){
								getHttpRequest(ftxt[pole], [sp, sp], ab_path+'checklogin', true, form);
							}else{
								getHttpRequest(ftxt[pole], [sp, sp], 'checklogin', true, form);
							}
						}else{
							getHttpRequest(ftxt[pole], [sp, sp], 'checklogin', true);
						}
					}else if(ftxt[pole].getAttribute('name') == 'email' || ftxt[pole].getAttribute('name') == 'user_email'){
						//loader.eq(1).show();
						getHttpRequest(ftxt[pole], [sp, sp], 'checkemail');
						
						ftem.each(function(it){
							
							if(ftem[it].value.match(/[\w\d.]+@[\w\d.]+/gi) == null && ftem[it].value != ''){
								ftem[it].classList.add('errorInp');
								sp.innerHTML = 'Введённый адрес не является емейлом!';
								ftxt.eq(pole).after(sp);
							}
						});
					}
				}
			});
		}catch(e){
			alert(e.stack);
		}
	}

	function fixSelect(el){

		if(el.hasClass('clDate')){
			el.each(function(){
				var sel = $(this).find('select');
				
				sel.each(function(){
					$(this)[0].selectedIndex = $(this)[0].selectedIn;
				});
			});
		}else{
			el.each(function(){
				
				$(this)[0].selectedIndex = $(this)[0].selectedIn;
				
			});
		}
	}
	
	ftxt.on('focus', function(){
		$('.error').remove();
		ftxt.removeClass('errorInp');
	});

	ftxt.on('blur', function(e){
		iterForm(e.target);	
	});

	login.on('submit', function(){
		
		$('.error').remove();
	
		iterForm();
					
		if(typeof $(this).find('.error')[0] === 'undefined' && typeof $(this).find('.errorInp')[0] === 'undefined'){
			getLogin();
		}
		
		return false;
	});
	
	register.on('submit', function(){
		
		$('.error').remove();
	
		iterForm();
		
		if(typeof $(this).find('.error')[0] === 'undefined' && typeof $(this).find('.errorInp')[0] === 'undefined'){
			setResult();
		}
		
		return false;
	});
	
	window.iterForm = iterForm;

});