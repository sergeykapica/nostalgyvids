<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpanel_Handler extends Controller{

    public function handelStr($info){
        $rep = HTML::chars(Security::encode_php_tags(trim(strip_tags($info))));
		
        return $rep;
    }
    
    public function handelInt($info){
        return $info*1;
    }
}