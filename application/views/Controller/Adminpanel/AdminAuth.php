<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpanel_AdminAuth extends Controller_Adminpanel_Handler {
	
	private $session;
    
	public function before(){
		parent::before();
		Session::$default = 'native';
		$this->session = Session::instance();
		
		$log = View::factory('admin/adminAuth');
		$log->styles = array('reznikovStyle', 'adaptiveReznikovStyle');
	}
	
	public function action_getLogin()
	{	
		$log = View::factory('admin/adminAuth');
		
		$this->response->body($log);
	}
	
	public function action_login()
	{
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
			$salto = 'VictorTheBest';
			$raz = 100;
				
			$username = $this->getHash($this->handelStr($_POST['login']), $salto, $raz);
			$password = $this->getHash($this->handelStr($_POST['pass']), $salto, $raz);
				
			$infoFromDB = Model::factory('VictorDB')->selectPassAndLogin();
				
			foreach($infoFromDB as $info){
				
				$usernameFromDB = $info['login'];
				$passwordFromDB = $info['password'];
				
			}
			
			if($username == $usernameFromDB && $password == $passwordFromDB){
				$this->session->set('logged_in', true);
				$this->redirect('adminpanel');
			}else{
				$this->redirect('adminlogin');
			}
		}
	}
	
	public function action_logout()
	{
		$this->session->delete('logged_in');
		$this->redirect();
	}
	
	public function getHash($string, $salt, $iterationCount) {
		for ($i = 0; $i < $iterationCount; $i++)
			$string = sha1($string . $salt);
		return $string;
	}
	
}