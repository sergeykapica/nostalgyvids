<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpanel_Adminmain extends Controller_Adminpanel_Common{
 
	private $session;
    
    public function before(){
        parent::before();
        Session::$default = 'native';
        $this->session = Session::instance();
        
        if($this->is_logged_in() != true){
            $this->template = View::factory('admin/adminAuth');
        }
		
		$filec = 'public/files/countIps.txt';
			
		$content = file_get_contents($filec);
		$this->template->countIps = $content;
    }
 
    public function action_index(){
		$adminmain = View::factory('admin/adminmain');
		
		$this->template->content = $adminmain;
	}
	
	public function action_addToDB(){
		
		$adminmain = View::factory('admin/adminAddToDB');
		$adminmain->bind('cats', $cats);
		$n = '';
		$adminmain->bind('strFromCat', $n);
		
		$cats = Model::factory('VictorDB')->selectCats();
		
		if($_GET){
			$con = Model::factory('VictorDB')->selectStr($_GET['c']);
			
			$adminmain->bind('strFromCat', $con);
		}
		
		$this->template->content = $adminmain;
		
	}
	
	public function action_editFromDB(){
		
		$adminmain = View::factory('admin/adminEditFromDB');
		$adminmain->bind('cats', $cats);
		
		$cats = Model::factory('VictorDB')->selectCats();
		
		$this->template->content = $adminmain;
		
	}
	
	public function action_deleteFromDB(){
		
		$adminmain = View::factory('admin/adminDeleteFromDB');
		$adminmain->bind('cats', $cats);
		
		$cats = Model::factory('VictorDB')->selectCats();
		
		$this->template->content = $adminmain;
		
	}
	
	private function is_logged_in()
    {
        return $this->session->get('logged_in');
    }
}