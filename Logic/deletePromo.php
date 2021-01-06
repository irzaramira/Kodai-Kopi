<?php
session_start();
require '../Controller/PromoController.php';
require '../Controller/UserController.php';

$data = json_decode($_GET['promo']);
$promoController = new PromoController();
$userController = new UserController();


if($_SESSION['isAdmin'] == 0){
    header("Location: ../login.php");
}
else if($promoController->deletePromo($data->id)){
    $userController->logActivity($_SESSION['email'], "Deleted promo");
    header("Location: ../View/promo.php?promodeleted");
}
else{
    header("Location: ../index.php");
}
?>