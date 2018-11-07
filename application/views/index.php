<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<?php foreach( $styles as $style ){ ?>
			<link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css">
		<?php } ?>
		<title>Сайт для тех, кто хочет вспомнить хорошее.</title>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/jquery2.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/xmlhttprequest.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/generalAnimations.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/callActionSpoiler.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/checkButton.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/setCalendar.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/addDBForm.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/stripZzzReclam.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/xmlHttpRequestZzzStrip.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/reloadFormsCheck.js"></script>
	</head>
	<body>
		<div id="mainWrapper">
			<div id="container">
				<div id="logotype">
					<a href=""></a>
				</div>
				<div id="hMenus">
					<ul>
						<li>Главная</li>
						<li>Новости</li>
						<li>Видео</li>
						<li>Аудио</li>
						<li>Общение</li>
					</ul>
				</div>
				<div id="content">
					<div id="mainContent">
						<?php
							if( isset($stateDB) ){
								
								if($stateDB === 'addToDB'){ ?>
									<div class="stateAccept">Вы успешно зарегистрировались.</div>
								<?php }else if($stateDB === 'notAddToDB'){ ?>
									<div class="stateNotAccept">При регистрации возникла ошибка.</div>
								<?php }
							}
						?>
					</div>
					<div id="footer">
						<?php if($loginAccess === false){ ?>
							<span class="movedBezier lor">Вход / Регистрация</span>
						<?php }else{ ?>
							<span class="movedBezier"><a href="">Аккаунт</a></span>
						<?php } ?>
						<span class="movedBezier">Общая информация</span>
					</div>
				</div>
			</div>
			<div id="regOrLogin">
				<div class="closeModal"></div>
				<div class="callActionSpoiler">Логин</div>
				<div>
					<form action="<?php echo URL::base(); ?>login_in" method="post" class="login">
						<div>
							<span>Логин:</span><input type="text" name="enter_login" class="nsInput validInput">
						</div>
						<div>
							<span>Пароль:</span><input type="text" name="enter_password" class="nsInput validInput">
						</div>
						<div>
							<img src="<?php echo URL::base(); ?>get_captcha" class="captchaCode"/>
						</div>
						<div>
							<span>Введите капчу:</span><input type="text" name="captchaEnterCode" class="nsInput">
						</div>
						<div class="checkField">
							<span>Оставаться в системе:</span>
							<div class="checkButton">
								<label>
									<input type="checkbox" name="stayInSystem" value="stayInSystem" class="checkValue">
									<div></div>
								</label>
							</div>
						</div>
						<div class="lastField">
							<input type="hidden" name="token" value="<?php echo $token; ?>">
							<input type="submit" value="Отправить" class="submitForm">
						</div>
					</form>
				</div>
				<div class="callActionSpoiler">Регистрация</div>
				<div>
					<form action="" method="post" class="register">
						<div>
							<span>Логин:</span><input type="text" name="user_login" class="nsInput validInput">
						</div>
						<div>
							<span>Пароль:</span><input type="password" name="user_password" class="nsInput validInput">
						</div>
						<div>
							<span>Повторите пароль:</span><input type="password" name="user_password2" class="nsInput validInput">
						</div>
						<div>
							<span>Введите почту:</span><input type="text" name="user_email" class="nsInput validInput validEmail">
						</div>
						<div>
							<span>Имя:</span><input type="text" name="user_name" class="nsInput validInput">
						</div>
						<div>
							<span>Фамилия:</span><input type="text" name="user_surname" class="nsInput validInput">
						</div>
						<div>
							<span>Дата рождения:</span>
							<div class="clDate">
								<select size="7" name="day">
								</select>
								<select size="7" name="month">
								</select>
								<select size="7" name="year">
								</select>
							</div>
						</div>
						<div>
							<img src="<?php echo URL::base(); ?>get_captcha" class="captchaCode"/>
						</div>
						<div>
							<span>Введите капчу:</span><input type="text" name="captchaCode" class="nsInput validInput">
						</div>
						<div class="lastField">
							<input type="hidden" name="token" value="<?php echo $token; ?>">
							<input type="submit" value="Отправить" class="submitForm">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
		
			$(window).load(function(){
				
				window.ab_path = '<?php echo URL::base(); ?>';
				var movedBezier = $('.movedBezier');
				
				movedBezier.on('click', function(){
					generalAnimations.movedBezier($(this), -4);
				});
				
				var regOrLogin = $('#regOrLogin');
				
				miscFuncs.setOverflowPosition(regOrLogin, 'top');
				
				var lor = $('.lor').eq(0);
				
				lor.on('click', function(){
					
					generalAnimations.movedModal(regOrLogin, 'top', 500, true);
				});
				
				regOrLogin.on('click', function(e){
					
					var target = $(e.target);
					
					if(target.hasClass('closeModal')){
						
						generalAnimations.movedModal(regOrLogin, 'top', 500, false);
					}
				});
				
				setCalendar(31, 1900);
			});
		</script>
	</body>
</html>