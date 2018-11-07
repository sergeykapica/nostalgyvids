<?php defined('SYSPATH') or die('No direct script access.');

require Kohana::find_file('classes/Controller/', 'Handler');

class Controller_OtherFuncs extends Controller{
	
	use Handler;
	
	public function before(){
		parent::before();
		
		ini_set('session.use_strict_mode', 1);
		header('X-XSS-Protection: 1');
		
		Session::$default = 'native';
		$this->session = Session::instance();
	}
	
	public function action_getCaptcha(){
		
		$randomnr = rand(100000, 999999);
		$this->session->set('randomnr2', $this->hashInt($randomnr));
	 
		$im = imagecreatetruecolor(200, 60);
	 
		$blue = imagecolorallocate($im, 79, 99, 142);
		$gr_blue = imagecolorallocate($im, 63, 78, 112);
		$light_blue = imagecolorallocate($im, 214, 233, 235);
	 
		imagefilledrectangle($im, 0, 0, 200, 60, $light_blue);
		
		$font = 'public/fonts/lca.ttf';
	 
		imagettftext($im, 30, 5, 35, 40, $gr_blue, $font, $randomnr);
		imagettftext($im, 30, 5, 35, 50, $blue, $font, $randomnr);
		
		header("Expires: Wed, 1 Jan 1997 00:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
	 
		header("Content-type: image/gif");
		imagepng($im);
		imagedestroy($im);
	}
}