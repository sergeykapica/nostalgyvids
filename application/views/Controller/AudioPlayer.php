<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AudioPlayer extends Controller{

	public function action_victorGet(){
	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$g = View::factory('audioPlayer');
			$g->bind('path', $_POST['path']);
			
			$this->response->body($g);
		}
	}
}