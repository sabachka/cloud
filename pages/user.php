<?php
include_once __DIR__ . '/entity.php';
class User  // класс пользователя 
extends Entity // наследует класс entity
{
	
	private $userName; //имя пользователя
	private $userPassword; // пароль
	private $userEmail; // почта пользователя
	private $userDIR; // директория на сервере

	
	//конструктор класса User
	public function __construct ($entityID, $userName, $userPassword, $userDIR, $userEmail)
		{
			parent::__construct($entityID);
			if (isset ($userName){
			$this->userName = $userName;
			}
				
			if (isset ($userPassword){
			$this->userPassword = $userPassword;
			}
				
			if (isset ($userDIR){
			$this->userDIR = $userDIR;
			}
				
			if (isset ($userEmail){
			$this->userEmail = $userEmail;
			}
		}
	// userName
	public function setUserName ($userName) {
		if (isset ($userName)) {
		$this->userName = $userName;
		}
	}
	
	public function getUserName () {
		return $this->userName;
		}
	}
	
	//userPassword
	public function setUserPassword ($userPassword) {
		if (isset ($userPassword)) {
		$this->userPassword = $userPassword;
		}
	}
	
	public function getUserPassword () {
		return $this->userPassword;
	}
	
	//userEmail
	public function setUserEmail ($UserEmail) {
		if (isset ($userEmail)) {
		$this->userEmail = $userEmail;
		}
	}
	
	public function getUserEmail () {
		return $this->userEmail;
	}
	
	//userDIR
	public function setUserDIR ($UserDIRl) {
		if (isset ($userDIR)) {
		$this->userDIR = $userDIR;
		}
	}
	
	public function getUserDIR () {
		return $this->userDIR;
	}
}
?>