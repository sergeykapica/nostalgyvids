<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Handler extends Controller{

	protected $salt = 'VictorComposer';

    public function handelStr($info){
        $rep = HTML::chars(Security::encode_php_tags(trim(strip_tags($info))));
		
        return $rep;
    }
    
    public function handelInt($info){
        return $info*1;
    }
	
	public function hashInt($randInt){
		return md5($randInt.$this->salt);
	}
}