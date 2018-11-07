<?php defined('SYSPATH') or die('No direct script access.');

trait GenerateToken{

	protected $tk;

	public function setToken(){
	
		if(!$this->is_unique_hash()){
			
			$u = $this->setUniq();
			
			$this->session->set('uniq_hash', $u);
			$u = $this->hashEncoder($u);
			$this->session->set('tokenh', $u);
		}
		
		$this->tk = $this->get_token();
	}
	
	protected function is_unique_hash(){
        return $this->session->get('uniq_hash');
    }
	
	protected function get_token(){
        return $this->session->get('tokenh');
    }
}