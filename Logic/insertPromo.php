<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../Controller/PromoController.php';

if(!isset($_SESSION['email'])){
    header("location: ../login.php?Login=NotLoggedIn");
}

$name =  $_POST["name"];
$discount =  $_POST["discount"];
$desc = $_POST["description"];

$promo = new PromoController();


if(	$promo->insertPromo($name, $discount, $desc)){	
	header("location: ../View/promo.php?Created");
}
else{
	header("location: ../index.php?Created=Unsuccessful");
}
?>
