<?php defined('SYSPATH') or die('No direct script access.');

require Kohana::find_file('classes/Controller/', 'Handler');

class Controller_Clients extends Controller{
	
	use Handler;
	
	public function before(){
		
		parent::before();
		
		ini_set('session.use_strict_mode', 1);
		header('X-XSS-Protection: 1');
		
		Session::$default = 'native';
		$this->session = Session::instance();
		$this->SITEADRESS = URL::base();
		
		$this->setToken();
	}
	
	public function action_loginIn(){
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if($this->hashDecoder($this->handelStr($_POST['token'])) == $this->session->get('uniq_hash')){
				
				if($this->hashInt($this->handelStr($_POST['captchaEnterCode'])) == $this->session->get('randomnr2')){
					
					$e_login = $this->handelStr($_POST['enter_login']);
					$e_pass = $this->hashInt($this->handelStr($_POST['enter_password']));
					
					$usersFromDB = Model::factory('NostalgyvidsDB')->selectUsersList();
					
					foreach($usersFromDB as $user){
						
						if( $e_login == $user['user_login'] && $e_pass == $user['user_password'] ){
							
							$login_token = $this->setUniq();
							
							$this->session->set('login_token', $login_token);
							$this->session->set('user_logged', $this->hashInt($user['user_login']).':'.$this->hashEncoder($login_token));
							
							if(isset($_POST['stayed'])){
								setcookie('user_stayed', $this->hashInt($user['user_login']).':'.$this->hashEncoder($login_token), 0x6FFFFFFF, '', '', false, true);
							}
							
							$this->response->body('acceptLogin');
							break;
						}
					}
					
					if(!isset($login_token)){
						$this->response->body('notAcceptLogin');
					}
					
				}else{
					$this->response->body(false);
				}
			}
		}
	}
	
	public function action_registerIn(){
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if($this->hashDecoder($this->handelStr($_POST['token'])) == $this->session->get('uniq_hash')){
				
				if($this->hashInt($this->handelStr($_POST['captchaCode'])) == $this->session->get('randomnr2')){
					
					$u_login = $this->handelStr($_POST['user_login']);
					$u_password = $this->hashInt($this->handelStr($_POST['user_password']));
					$u_name = $this->handelStr($_POST['user_name']);
					$u_surname = $this->handelStr($_POST['user_surname']);
					$u_email = $this->handelStr($_POST['user_email']);
					$u_date = $this->handelStr($_POST['day']).'/'.$this->handelStr($_POST['month']).'/'.$this->handelStr($_POST['year']);
					$reg_date = time();
					$photo = URL::base().'public/images/';
					$ip = ip2long($_SERVER['REMOTE_ADDR']);
					
					$location = json_decode(file_get_contents('https://ipinfo.io/geo'));
					$location = $location->country.', '.$location->city;
					
					$data = array(
								'user_login' => $u_login,
								'user_password' => $u_password,
								'user_name' => $u_name,
								'user_surname' => $u_surname,
								'user_email' => $u_email,
								'user_location' => $location,
								'user_date' => $u_date,
								'register_date' => $reg_date,
								'user_photo' => $photo,
								'user_ip' => $ip
					);
					
					$this->session->set('user_data', $data);
					
					$codeAc = $this->randAcceptCode();
					$this->session->set('codeAccept', $codeAc);
					
					$content = 'Вставьте этот код в поле активации аккаунта:';
			 
					$letter = View::factory('letter');
					$letter->bind('name', $u_name);
					$letter->bind('content', $content);
					$letter->bind('codeAc', $codeAc);
				 
					$to = $u_email;
					$subject = 'Письмо от администрации сайта: '.$this->SITEADRESS;
					$from = $this->SITEEMAILADRESS;
					$message = $letter->render();
					
					/*$token = '20a6b8ebf0cdcfcbc276eaab82eff538';
					
					$tokenArr = ["from_email" => $from,
								 "from_name" => $from,
								 "to" => $to,
								 "subject" => $subject,
								 "html" => $message
					];
					
					$tokenGo = array(
						'http' => array(
							'method'  => 'POST',
							'header'  => array('Content-type: application/json', 'Authorization: Bearer '.$token),
							'content' => json_encode($tokenArr)
						), 'ssl' => array(
								'verify_peer' => false,
								'verify_peer_name' => false
						)
					);
					
					$tokenMass = file_get_contents("https://api.mailopost.ru/v1/email/messages", false, stream_context_create($tokenGo));
					
					$json = json_decode($tokenMass);
					
					if(!$json->status == 'queued' || !$json->status == 'sent' || !$json->status == 'delivered'){
						$this->response->body(false);
					}*/
					
					$config = Kohana::$config->load('email');
					Email::connect($config);
					
					if(Email::send($to, $from, $subject, $message, true) == true){
					
						$responseView = View::factory('sendCode');
						$responseView->bind('email', $u_email);
						$responseView->token = $this->tk;
						
						$this->response->body($responseView);
					}else{
						$this->response->body('<div class="errorEmail">Ошибка отправки письма</div>');
					}
				}
			}
		}
	}
	
	public function action_acceptCode(){
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if($this->hashDecoder($this->handelStr($_POST['token'])) == $this->session->get('uniq_hash')){
				
				if($this->handelInt($_POST['acceptCode']) == $this->session->get('codeAccept')){
					
					$data = $this->session->get('user_data');
					
					if($data == true){
						
						$addToDB = Model::factory('NostalgyvidsDB')->addUserToDB($data['user_login'], $data['user_password'], $data['user_name'], $data['user_surname'], $data['user_email'], $data['user_location'], $data['user_photo'], $data['user_ip'], $data['register_date']);
						
						if($addToDB === true){
							$this->session->set('ourState', 'addToDB');
						}else{
							$this->session->set('ourState', 'notAddToDB');
						}
						
						$this->session->delete('user_data');
						$this->redirect();
					}
				}
			}
		}
	}
	
	public function action_checkLogin(){
	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
			$inputUser = $this->handelStr($_POST['user_login']);
		
			$users = Model::factory('NostalgyvidsDB')->selectUsersList();
			
			foreach($users as $user){
			
				if($user['user_login'] == $inputUser){
					$this->response->body(false);
					die();
				}
			}
			
			$this->response->body(true);
		}
	}
	
	public function action_checkEmail(){
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$inputUser = $this->handelStr($_POST['email']);
		
			$users = Model::factory('NostalgyvidsDB')->selectUsersList();
			
			foreach($users as $user){
			
				if($user['user_email'] == $inputUser){
					$this->response->body(false);
					die();
				}
			}
			
			$this->response->body(true);
		}
	}
}