<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Common{
	
	public function action_index(){
		
		$stDB = $this->checkStateDB();
		
		if($stDB == true){
			$this->template->stateDB = $stDB;
		}
		
		$this->template;
	}
}