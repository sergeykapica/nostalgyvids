<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpanel_Common extends Controller_Template {
 
    public $template = 'admin/adminIndex';
	
	public function before()
    {
        parent::before();
		
		$this->template->styles = array('reznikovStyle', 'adaptiveReznikovStyle');
	}
	
}