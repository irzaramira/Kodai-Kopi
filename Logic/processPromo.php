<?php
session_start();

$query = $_GET['name'];
$data = explode("discount=", $query);
$name = $data[0];
$discount = $data[1];
$email = $_SESSION['email'];
include '../Controller/PromoController.php';
if (!isset($_SESSION['email'])){
     header('location: ../login.php');
}
$promoController = new PromoController();
if($promoController->checkPromoExists($name,$discount) == false){
    header('Location: ../View/promo.php?promodoesnotexists');
}
else if ($promoController->checkPromoUsed($email,$name,$discount) == true){
    header('Location: ../View/promo.php?promoalreadyused');
}
else{
    if($promoController->insertPromoUsed($email, $name, $discount)){
        $_SESSION['discount'] = $discount;
        $_SESSION['promoName'] = $name;
        header('Location: ../View/promoSuccess.php');
    }
}

?>