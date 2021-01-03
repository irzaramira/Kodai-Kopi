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
    public function insertPromo($name, $discount, $desc, $pic){
		try 
		{
			$conn=$this->DB->connect();
            $stmt = $conn->prepare("INSERT into promo (name, discount, description, pic) VALUES (?, ?, ?, ?) ;");
			
			$regisDate = date("y-m-d h:i:sa");
			
			$stmt->bind_param('siss', $name, $discount, $desc, $pic);
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
}  
?>