<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../Controller/UserController.php';


$password =  $_POST["password"];
$email =  $_POST["email"];
	
$user = new UserController();
if(	$user->verifyLogin($email, $password) == true){
	$_SESSION['email'] = $email;
	$_SESSION['isAdmin'] = $user->checkAdmin($email);
	header("location: ../index.php?Login=Successful");
}
else{
	header("location: ../login.php?Login=Unsuccessful");
}
 ?>

    