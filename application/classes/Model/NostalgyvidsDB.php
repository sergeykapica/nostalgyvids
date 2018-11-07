<?php defined('SYSPATH') or die('No direct script access.');

class Model_NostalgyvidsDB extends Model{

	protected $_pdo;
	protected $users_list = 'users_list';
	protected $users_settings = 'users_settings';
	
	public function __construct(){
		$this->_pdo = new PDO("mysql:host=localhost;dbname=nostalgyvids", "root", "");
		$this->_pdo->exec("SET NAMES utf8mb4");
	}
	
	public function addUserToDB($u_login, $u_password, $u_name, $u_surname, $u_email, $u_location, $u_photo, $u_ip, $r_date){
		
		$sql = 'INSERT INTO '.$this->users_list.' (user_login, user_password, user_name, user_surname, user_email, user_location, user_photo, user_ip, register_date) '.
				'VALUES (:u_login, :u_password, :u_name, :u_surname, :u_email, :u_location, :u_photo, :u_ip, :r_date)';
				
		$params = array(
					':u_login' => $u_login,
					':u_password' => $u_password, 
					':u_name' => $u_name,
					':u_surname' => $u_surname,
					':u_email' => $u_email,
					':u_location' => $u_location,
					':u_photo' => $u_photo,
					':u_ip' => $u_ip,
					':r_date' => $r_date
		);
		
		$sql2 = 'INSERT INTO '.$this->users_settings.' (s_email, s_location, s_login) VALUES (1, 1, :s_login)';
		
		$params2 = array(':s_login' => $u_login);
		
		$this->_pdo->beginTransaction();
		
		$query = $this->_pdo->prepare($sql);
		$res = $query->execute($params);
		
		$query = $this->_pdo->prepare($sql2);
		$res = $query->execute($params2);
		
		if($res === false){
			$this->_pdo->rollBack();
            return false;
        }else{
			$this->_pdo->commit();
            return true;	
		}
	}
	
	public function selectUsersList(){
		
		$sql = 'SELECT id, user_login, user_password, user_name, user_surname, user_email, user_location, user_photo, user_ip, register_date '.
				'FROM '.$this->users_list.' ORDER BY id';
	
		$this->_pdo->beginTransaction();
		$query = $this->_pdo->prepare($sql);
		$query->execute();
		$res = $query->fetchAll();
		
		if($res === false){
			$this->_pdo->rollBack();
            return array();
        }else{
			$this->_pdo->commit();
            return $res;	
		}
	}
}