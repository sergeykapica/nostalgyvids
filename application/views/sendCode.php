<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div id="sendCode">
			<form action="<?php echo URL::base(); ?>accept_code" method="post">
				<div>Код выслан Вам на почту: <span class="emailColor"><?php echo $email; ?></span>. Вставьте его в поле ниже.</div>
				<div>
					<input type="text" name="acceptCode" class="nsInput validInput">
					<input type="submit" class="submitForm">
					<input type="hidden" name="token" value="<?php echo $token; ?>">
				</div>
			</form>
		</div>
	</body>
</html>