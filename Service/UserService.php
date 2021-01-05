<?php
include "../DB.php";

class UserService {
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
	
	public function verifyLogin($email,$password)
	{
		try 
		{
			$conn = $this->DB->connect();
			
			$stmt = $conn->prepare("SELECT password FROM user WHERE email = ? ;");
			$stmt->bind_param('s', $email);
			$stmt->execute();
           
			$result = $stmt->get_result();
			$numRows = $result->num_rows;       
			if ($numRows > 0) 
            {
                $password = mysqli_real_escape_string($conn, $password);
                
                $data[]=$result->fetch_array();
                $a =  $data[0];
				//verifying input and decrypting password from DB
				return password_verify($password, $a["password"]);
				
            }
		}
		catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
	}
	
	public function insertUser($name, $email, $password, $number){
		try 
		{
			$isAdmin = 0;
			//Encrypting Password
			$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
			$conn=$this->DB->connect();
            $stmt = $conn->prepare("INSERT into user (username, email, password, number, isAdmin) VALUES (?, ?, ?, ?, ?) ;");
						
			$stmt->bind_param('sssii', $name, $email, $hashedpassword, $number, $isAdmin);
			return $stmt->execute();
			
			$conn->DB->closeCon();
			$stmt->close();	        
		}
		catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
	}
	
	public function checkEmailExist($email){
		try 
		{
			$conn = $this->DB->connect();
			$stmt = $conn->prepare("SELECT Email FROM user WHERE Email = ? ;");
			$stmt->bind_param('s', $email);
			$stmt->execute();
			
			$result = $stmt->get_result();
			
			$numrows = $result->num_rows;
			
			
			if($numrows > 0){
				return true;
			}
			else{
				return false;
			}	
			$conn->DB->closeCon();
			$stmt->close();
		}
		catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
	}
	
	//Securing Email
	function SanitizeEmail($field) {
		$field = filter_var($field, FILTER_SANITIZE_EMAIL);
    	if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        	return true;
    	}	 
		else {
        	return false;
    	}
	}
	
	public function resetPassword($email, $password){
		try{
			$conn = $this->DB->connect();
		
			$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

			$stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ? ;");
			$stmt->bind_param('ss', $hashedpassword, $email);
			return $stmt->execute();
			
			$conn->DB->closeCon();
			$stmt->close();
		}
		catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

	}

	public function checkAdmin($email){
		try{
			$conn = $this->DB->connect();
			
			$stmt = $conn->prepare("SELECT isAdmin FROM user WHERE email = ? ;");
			$stmt->bind_param('s', $email);
			$stmt->execute();
           
			$result = $stmt->get_result();
			$numRows = $result->num_rows;       
			if ($numRows > 0) 
			{
				while ($row = $result->fetch_assoc()) 
				{ 
					$admin = $row['isAdmin']; 
				} 
				return $admin;
			} 
		}
		catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
	}
}

?>