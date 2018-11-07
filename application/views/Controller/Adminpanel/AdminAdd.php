<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpanel_AdminAdd extends Controller_Adminpanel_Handler{

	private $session;
    
    public function before(){
        parent::before();
        Session::$default = 'native';
        $this->session = Session::instance();
        
        if($this->is_logged_in() != true){
            $this->template = View::factory('admin/adminAuth');
        }
    }

	public function action_insertToDB(){
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$name = $this->handelStr($_POST['topicName']);
				$content = $this->handelStr($_POST['textAr']);
				$idcats = $this->handelInt($_POST['selCat']);
				$dates = date("Y-m-d H:i:s");
			
				$toDB = Model::factory('VictorDB')->addToDB($name, $content, $idcats, $dates);
				
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