<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpanel_AdminGetInfo extends Controller_Adminpanel_Handler{

	private $session;
    
    public function before(){
        parent::before();
        Session::$default = 'native';
        $this->session = Session::instance();
        
        if($this->is_logged_in() != true){
            $this->template = View::factory('admin/adminAuth');
        }
    }

	public function action_getFromDB(){
		
			require Kohana::find_file('vendor', 'pagination/pagination');
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				$idcat = $this->handelInt($_POST['catId']);
				$fromDB = Model::factory('VictorDB')->selectContent($idcat);
				
				$n = $this->handelInt($_GET['n']);
				
				$p = new PaginationPages();
				$p->setPag(5, count($fromDB));
				$path = 'getfromdb?n=';
				
				$sqlQuery = Model::factory('VictorDB')->selectPagContent($idcat, abs($n-1)*$p->pagOnPage, $p->pagOnPage);
				
				if(count($sqlQuery) <= 0){
					$viewPag = '<div style="width: 100%; text-align: center">Записи отсутствуют.</div>';
				}else{
					$viewPag = $p->echoPag($path, $n);
				}
				
				$view = View::factory('admin/adminFromDB');
				$view->bind('info', $sqlQuery);
				$view->bind('pag', $viewPag);

				$this->response->body($view);
				
			}
	}
	
	private function is_logged_in()
    {
        return $this->session->get('logged_in');
    }
}