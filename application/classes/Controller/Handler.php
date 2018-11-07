<?php defined('SYSPATH') or die('No direct script access.');

require Kohana::find_file('classes/Controller', 'GenerateToken');

trait Handler{
	
	use GenerateToken;
	
	protected $session;
	protected $salto = 'sergKapica';
	private $hashEnContent = array('a' => 'fd', 'b' => 'nj', 'c' => 'lp', 'd' => 'er', 'e' => 'vc', 'f' => 'iu', 'g' => 'ty',
								   'h' => 'wd', 'i' => 'gb', 'j' => 'cd', 'k' => 'na', 'l' => 'za', 'm' => 'gf', 'n' => 'xa',
								   'o' => 'be', 'p' => 'qv', 'q' => 'yu', 'r' => 'rp', 's' => 'lk', 't' => 'im', 'u' => 'dc',
								   'v' => 'eq', 'w' => 'hj', 'x' => 'sy', 'y' => 'fh', 'z' => 'di');
	public $SITEADRESS;
	public $SITEEMAILADRESS = 'admin@nostalgyvids.zzz.com.ua';					   
								   
	public function theftProcentPrice($price){
		
		$pr = ( $price / 100 ) * $this->procent_of_price;
		$price += $pr;
		
		return $price;
	}	
								   
    public function handelStr($info){
        $rep = HTML::chars(Security::encode_php_tags(trim(strip_tags($info))));
		
        return $rep;
    }
    
    public function handelInt($info){
        return $info*1;
    }
	
	public function hashInt($randInt){
	
		for($i = 0; $i < 100; $i++){
			$randInt = md5($randInt.$this->salto);
		}         
		
		return $randInt;
	}
	
	public function hashIntPass($randInt){
		return md5($randInt.$this->salto);
	} 
	
	protected function setUniq(){
		$alpha = range('a', 'z');
		$newPass = '';
		
		for($i = 0; $i < 16; $i++){
			$newPass .= $alpha[rand(0, (count($alpha)-1))];
		}
		
		return strtolower($newPass.$this->salto);
	}
	
	public function randAcceptCode(){
		return rand(100000, 999999);	
	}
	
	protected function hashEncoder($str){
		
		$newStr = '';
		
		for($i = 0; $i < strlen($str); $i++){
			
			foreach($this->hashEnContent as $b => $hash){
			
				if($b == $str[$i]){
					$newStr .= $hash;
					break;
				}
			}
		}
		
		return $newStr;
	
	}
	
	protected function hashDecoder($str){
	
		$newStr = '';
		
		for($i = 0; $i < strlen($str)-1; $i+=2){
			
			foreach($this->hashEnContent as $b => $hash){
			
				if($hash == $str[$i].$str[$i+1]){
					$newStr .= $b;
					break;
				}
			}
		}
		
		return $newStr;
	}
	
	protected function setLogged($not_ver_hash = false){
				
		if(time() - $this->session->get('session_time') >= 600 || $not_ver_hash !== false){
			
			$this->session->set('session_time', time());
			$unq_h = $this->setUniq();
			$this->session->set('login_token', $unq_h);
			$replace_key = explode(':', $this->is_logged_in());
			$replace_key[1] = $this->hashEncoder($unq_h);
			$replace_key = implode(':', $replace_key);
			$this->session->set('user_logged', $replace_key);
			
			if($this->is_stayed_in() == true){
				setcookie('user_stayed', $replace_key, 0x6FFFFFFF, '', '', false, true);
			}
			
			$this->session->write();
			$n_id = $this->session->regenerate();
			$this->session = Session::instance(Session::$default, $n_id);
		}
		
		$fromDB = Model::factory('NostalgyvidsDB')->selectUsersList();
		
		$logAcc = explode(':', $this->is_logged_in());
		
		foreach($fromDB as $pole){
			
			if($logAcc[0] == $this->hashInt($pole['user_login'])){
				
				if($this->hashDecoder($logAcc[1]) == $this->session->get('login_token')){
					
				}else{
					$this->setLogged(true);
				}
			}
		}
	}
	
	protected function checkLoged(){
		
		if($this->is_stayed_in() == true){
			$this->isLogin = true;
			$this->session->set('user_logged', $this->is_stayed_in());
			
			if($this->session->get('session_time') != true){
				$this->session->set('session_time', time()-4);
			}
		}
		
		if($this->isLogin === true){
			$this->setLogged();
		}
		
		$this->template->loginAccess = $this->isLogin;
	}
	
	protected function is_logged_in(){
        return $this->session->get('user_logged');
    }
	
	protected function is_unique_hash(){
        return $this->session->get('uniq_hash');
    }
	
	protected function get_token(){
        return $this->session->get('tokenh');
    }
	
	protected function is_stayed_in(){
		return @$_COOKIE['user_stayed'];
	}   
	
	public function checkStateDB(){
		
		$stateDB = $this->session->get('ourState');
		
		if($stateDB == true){
		
			$this->session->delete('ourState');
			return $stateDB;
		}else{
			return false;
		}
	}
}