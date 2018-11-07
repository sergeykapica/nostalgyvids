<?php defined('SYSPATH') or die('No direct script access.');

require Kohana::find_file('classes/Controller', 'Handler');

class Controller_Common extends Controller_Template{
	
	use Handler;
	
	public $template = 'index';
	
	public function before(){
		parent::before();
		
		ini_set('session.use_strict_mode', 1);
		header('X-XSS-Protection: 1');
		
		$this->template->styles = array('nostalgyvidsStyle');
		
		Session::$default = 'native';
		$this->session = Session::instance();
		
		$this->SITEADRESS = URL::base();
		
		if($this->is_logged_in() != true){
			$this->isLogin = false;
		}else{
			$this->isLogin = true;
		}
		
		$this->checkLoged();
		
		$this->setToken();
		$this->template->token = $this->tk;		
	}
}