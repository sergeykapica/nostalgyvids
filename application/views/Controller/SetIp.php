<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_SetIp extends Controller_Handler{
 
    public function action_ipSet(){
	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$ip = $this->handelStr($_POST['ip']);
			$city = $this->handelStr($_POST['city']);
			$region = $this->handelStr($_POST['region']);
			$country = $this->handelStr($_POST['country']);
			$dates = date("Y-m-d H:i:s");
			
			Model::factory('VictorDB')->addToIpInfo($ip, $city, $region, $country, $dates);
		}
	}
}