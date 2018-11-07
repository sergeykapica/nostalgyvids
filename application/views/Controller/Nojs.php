<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Nojs extends Controller{
 
    public function action_jsUrl(){
		$v = View::factory('nojs');
	
		$this->response->body($v);
	}
}