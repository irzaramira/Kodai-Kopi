<?php
include "../DB.php";

class PromoService {
	private $DB = NULL; 

	public function __construct()	
	{
		$this->DB = DB::getInstance();
    }	
    
	function processResult($result){
		$numRows = $result->num_rows; 
        if ($numRows > 0) 
        {
			while ($row = $result->fetch_assoc()) 
			{ 
				$data[] = $row; 
            } 
			return $data;  
		} 
    }
    public function insertPromo($name, $discount, $desc){
		try 
		{
			$conn=$this->DB->connect();
            $stmt = $conn->prepare("INSERT into promo (name, discount, description) VALUES (?, ?, ?) ;");
			
			$regisDate = date("y-m-d h:i:sa");
			
			$stmt->bind_param('sis', $name, $discount, $desc);
			return $stmt->execute();
			
			$conn->DB->closeCon();
			$stmt->close();	        
		}
		catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    
    public function getAllPromo() 
    { 
        $sql = "SELECT * FROM promo"; 
        $result = $this->DB->connect()->query($sql); 
        $this->DB->closeCon();
		
        return $this->processResult($result); 
	}
	
	public function checkPromoExists($name, $discount){
		$sql = "SELECT * FROM promo WHERE name LIKE '" . $name . "' AND discount = $discount"; 
        $result = $this->DB->connect()->query($sql); 
		
        $numRows = $result->num_rows; 
        if ($numRows > 0) 
        {
			return true; 
		} 
		return false; 
	}

	public function checkPromoUsed($email, $name, $discount){
		$sql = "SELECT * FROM usedpromo JOIN promo as PROMO on promoId = PROMO.id JOIN user AS USER ON userId = USER.id 
		WHERE USER.email LIKE '$email' AND PROMO.name LIKE '$name' AND PROMO.discount = $discount";

		$result = $this->DB->connect()->query($sql); 

		$numRows = $result->num_rows; 
		if ($numRows > 0) 
		{
			return true; 
		} 
		return false; 
	}

	public function insertPromoUsed($email, $name, $discount){
		$sql = "INSERT INTO usedpromo (userId, promoId) 
		SELECT USER.id, PROMO.id FROM user AS USER, promo AS PROMO WHERE email LIKE '$email' AND PROMO.name LIKE '$name' AND PROMO.discount = $discount";
		
		return $this->DB->connect()->query($sql); 
	}
}  
?>