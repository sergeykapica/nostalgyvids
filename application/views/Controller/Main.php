<?php defined('SYSPATH') or die('No direct script access.');
 
require Kohana::find_file('vendor', 'pagination/pagination');
 
class Controller_Main extends Controller_Common{

	private $session;
    public $ipCheck = false;
	
	public function before(){
		parent::before();
		Session::$default = 'native';
		$this->session = Session::instance();
		$this->template->ipCheck = $this->ipCheck;
	}
	
	public  $pagCells = 10;
	
	public function getPaginationContent($idcat, $conpage, $path){
		
		$fromDB = Model::factory('VictorDB')->selectContent($idcat);
			
		if(count($_GET) > 0){
			$n = $this->handelInt($_GET['n']);
		}else{
			$n = 1;
		}
				
		$p = new PaginationPages();
		$p->setPag($conpage, count($fromDB));
				
		$sqlQuery = Model::factory('VictorDB')->selectPagContent($idcat, abs($n-1)*$p->pagOnPage, $p->pagOnPage);
		
		if(count($sqlQuery) <= 0){
			$viewPag = '<div id="nulltr" style="width: 100%; font-size: 28px; text-align: center">Записи отсутствуют.</div>';
		}else{
			$viewPag = $p->echoPag($path, $n);
		}
		
		$dan = array($sqlQuery, $viewPag);
		
		return $dan;
	}
	
	public function action_index()
	{
	
		$this->pagCells = 20;
	
		$filec = 'public/files/countIps.txt';
			
		$content = file_get_contents($filec);
		
		@$userhash = $_COOKIE["userhash"];
		
		if(!$userhash){
			$userhash = uniqid();
			setcookie("userhash", $userhash, 0x6FFFFFFF);
			
			$content++;
			file_put_contents($filec, $content);
			
			$this->ipCheck = true;
			
		}
	
		$catN = 1;
		
		$sqlQuery = $this->getPaginationContent($catN, $this->pagCells, 'news?n=');
	
		$biog = View::factory('news');
		$biog->bind('info', $sqlQuery[0]);
		$biog->bind('pag', $sqlQuery[1]);
		
		$this->template->content = $biog;
		$this->template->ipCheck = $this->ipCheck;
	}
	
	public function action_biography(){
	
		$this->pagCells = 10;
	
		$catN = 2;
		
		$sqlQuery = $this->getPaginationContent($catN, $this->pagCells, 'biography?n=');
	
		$biog = View::factory('biography');
		$biog->bind('info', $sqlQuery[0]);
		$biog->bind('pag', $sqlQuery[1]);
		
		$this->template->content = $biog;
	}
	
	public function action_photos(){
	
		$this->pagCells = 50;
	
		$catN = 3;
		
		$sqlQuery = $this->getPaginationContent($catN, $this->pagCells, 'photos?n=');
	
		$biog = View::factory('photos');
		$biog->bind('info', $sqlQuery[0]);
		$biog->bind('pag', $sqlQuery[1]);
		
		$this->template->content = $biog;
	}
	
	public function action_videos(){
	
		$this->pagCells = 50;
	
		$catN = 4;
		
		$sqlQuery = $this->getPaginationContent($catN, $this->pagCells, 'videos?n=');
	
		$biog = View::factory('videos');
		$biog->bind('info', $sqlQuery[0]);
		$biog->bind('pag', $sqlQuery[1]);
		
		$this->template->content = $biog;
	}
	
	public function action_audios(){
	
		$this->pagCells = 50;
	
		$catN = 5;
		
		$sqlQuery = $this->getPaginationContent($catN, $this->pagCells, 'audios?n=');
	
		$biog = View::factory('audios');
		$biog->bind('info', $sqlQuery[0]);
		$biog->bind('pag', $sqlQuery[1]);
		
		$this->template->content = $biog;
	}
	
	public function action_connectAdmins(){
	
		$capRes = '';
		$mailSend = '';
	
		$biog = View::factory('sendMail');
		$biog->bind('capRes', $capRes);
		$biog->bind('mailSend', $mailSend);
		
		$this->template->content = $biog;
	}
	
	public function action_handlerSendEmail(){

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
			$biog = View::factory('sendMail');
	
			if($this->hashInt($this->handelInt($_POST['captchaResult'])) == $this->session->get('randomnr2')){
				
				$token = '20a6b8ebf0cdcfcbc276eaab82eff538';
				
				$email = $this->handelStr($_POST['email']);
				$topic = $this->handelStr($_POST['topic']);
				$emailText = $this->handelStr($_POST['textEmail']);
				
				$tokenArr = ["from_email" => $email,
							 "from_name" => $email,
							 "to" => "kermesovich@gmail.com",
							 "subject" => $topic,
							 "text" => $emailText
				];
				
				$tokenGo = array(
					'http' => array(
						'method'  => 'POST',
						'header'  => array('Content-type: application/json', 'Authorization: Bearer '.$token),
						'content' => json_encode($tokenArr)
					)
				);
				
				$tokenMass = file_get_contents("https://api.mailopost.ru/v1/email/messages", false, stream_context_create($tokenGo));
				
				$json = json_decode($tokenMass);
				
				$capRes = 'sendEmail';
				
				if($json->status == 'queued' || $json->status == 'sent' || $json->status == 'delivered'){
					$mailSend = 'queued';
				}else{
					$mailSend = 'skipped';
				}
				
				
			}else{
				$mailSend = '';
				$capRes = '';
			}
	
			$biog->bind('capRes', $capRes);
			$biog->bind('mailSend', $mailSend);
			
			$this->template->content = $biog;
		}
	}
    
}