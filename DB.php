<?php
class DB{	
	// 
	// private $servername = "localhost";
	// private $username = "id15791167_kodaikopi54";
	// private $password = "!Zarajelek54";
	// private $dbase = "id15791167_kodaikopi";

	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbase = "kodaikopi";
	
	private $_mysqliConnectionObject; 
	private static $_instance; //The single instance
	
	protected function __construct(){
		
		$this->_mysqliConnectionObject = new mysqli($this->servername, $this->username, $this->password,$this->dbase);

	 	if($this->_mysqliConnectionObject->connect_error)
        {
			die("ERROR: Could not connect. " . $$conn->connect_error);
		}

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->_mysqliConnectionObject->set_charset("utf8mb4");

	}
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	private function __clone() { }
	
	public function closeCon() {
        $this->_mysqliConnectionObject -> close();
    }
	public function connect(){
		return $this->_mysqliConnectionObject;
	}
}
	
?>