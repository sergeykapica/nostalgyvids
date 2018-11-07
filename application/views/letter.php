<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<style>
		
			@font-face{
				font-family: nostalgyMainFont;
				src: url(<?php echo URL::base(); ?>public/fonts/lca.ttf);
			}
		
			#main{
				width: 100%;
				min-height: 5px;
				margin: 0 auto;
				background-color: #d6e9eb;
				font-size: 20px;
				font-family: nostalgyMainFont;
				color: #4f638e;
			}
			
			#main > div:nth-child(1){
				width: inherit;
				height: 70px;
				text-align: center;
				background-color: #313b3a;
				padding: 35px;
				box-sizing: border-box;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				-o-box-sizing: border-box;
			}
			
			#logo > span:nth-child(1){
				color: #d7ae8d;
			}
			
			#logo > span:nth-child(2){
				color: #d6e9eb;
			}
			
			#main > div:nth-child(2){
				width: inherit;
				min-height: 5px;
				text-align: left;
				padding: 10px;
				box-sizing: border-box;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				-o-box-sizing: border-box;
			}
			
		</style>
	</head>
	<body>
		<div id="main">
			<div>
				<span id="logo"><span>Nostalgy</span><span>vids.zzz.com.ua</span></span>
			</div>
			<div>
				Уважаемый, <?php echo $name; ?>.<br>
				<?php echo $content; ?>: <?php echo $codeAc; ?>
			</div>
		</div>
	</body>
</html>