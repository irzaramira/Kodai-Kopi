<?php
require_once("../Service/UserService.php");
require_once("../Model/User.php");
class UserController{
	private $UserService = NULL; 

	public function __construct()	
	{
		$this->UserService = new UserService();
	}
	
	public function verifyLogin($email, $password){
		return $this->UserService->verifyLogin($email, $password);
	}
	
	public function insertUser($name, $email, $password, $number){
		
		return $this->UserService->insertUser($name, $email, $password, $number);
	}
	
	public function checkEmailExist($email){
		return $this->UserService->checkEmailExist($email);

	}
	
	public function sendEmailForgotPassword($email){
		return $this->UserService->sendEmailForgotPassword($email);
	}
	
	public function resetPassword($email, $password){
		return $this->UserService->resetPassword($email, $password);
	}

	public function checkAdmin($email){
		return $this->UserService->checkAdmin($email);
	}
}
?>