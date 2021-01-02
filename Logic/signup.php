<?php
include '../Controller/UserController.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$number = $_POST["phone"];
$repeatpassword = $_POST["confirmpassword"];


$user = new UserController();


if (empty($password) || empty($email) || empty($number) ) {
	header("Location: signuppage.php?error=emptyboxes");

	exit();
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: signuppage.php?error=invalidmail");
    exit();
}
else if ($password !== $repeatpassword) {
    header("Location: signuppage.php?error=passworddoesnotmatch");
	exit();
}

       
if($user->checkEmailExist($email) == true){
	header("Location: signup.php?error=emailtaken");
    exit();
}
else{
	if($user->insertUser($name, $email, $password, $number) == true){
		header("location: ../login.php?signup=success");
	}
	else{
		header("location: ../register.html?SignUp=Unsuccessful");
	}
}	
?>
