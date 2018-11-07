<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpanel_AdminDelete extends Controller_Adminpanel_Handler{

	private $session;
    
    public function before(){
        parent::before();
        Session::$default = 'native';
        $this->session = Session::instance();
        
        if($this->is_logged_in() != true){
            $this->template = View::factory('admin/adminAuth');
        }
    }

	public function action_deleteToDB(){
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$vib = $this->handelStr($_POST['catId']);
				
				$mass = explode(',', $vib);
			
				$toDB = Model::factory('VictorDB')->deleteToDB($mass);
				
				if($toDB){
					$this->response->body(true);
				}else{
					$this->response->body(false);
				}
			}
	}
		
	private function is_logged_in()
    {
        return $this->session->get('logged_in');
    }
}