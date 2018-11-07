<?php defined('SYSPATH') or die('No direct script access.');

class Controller_VictorPlayer extends Controller{

	public function action_victorGet(){
	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$g = View::factory('victorplayer');
			$g->bind('path', $_POST['path']);
			$g->bind('vid', $_POST['vid']);
			
			$this->response->body($g);
		}
	}
}