<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Captcha extends Controller_Handler{

	private $session;
    
	public function before(){
		parent::before();
		Session::$default = 'native';
		$this->session = Session::instance();
	}

	public function action_getCaptcha(){
	 
		$randomnr = rand(1000, 9999);
		$this->session->set('randomnr2', $this->hashInt($randomnr));
	 
		$im = imagecreatetruecolor(150, 50);
	 
		$kor = imagecolorallocate($im, 123, 63, 0);
		$kor1 = imagecolorallocate($im, 173, 90, 0);
		$bezhev = imagecolorallocate($im, 232, 214, 160);
	 
		imagefilledrectangle($im, 0, 0, 200, 50, $bezhev);
		
		$font = 'public/fonts/11385.ttf';
	 
		imagettftext($im, 50, 0, 22, 48, $kor1, $font, $randomnr);
	 
		imagettftext($im, 50, 0, 15, 50, $kor, $font, $randomnr);
		
		header("Expires: Wed, 1 Jan 1997 00:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
	 
		header ("Content-type: image/gif");
		imagegif($im);
		imagedestroy($im);
	}
}