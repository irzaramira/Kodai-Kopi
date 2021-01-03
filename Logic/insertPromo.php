<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../Controller/PromoController.php';

// if(!isset($_SESSION['email'])){
//     header("location: ../login.php?Login=NotLoggedIn");
// }

$name =  $_POST["name"];
$discount =  $_POST["discount"];
$desc = $_POST["description"];

$promo = new PromoController();

$file= $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmp = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$filesError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png');
if(in_array($fileActualExt,$allowed)){
    if($filesError ===  0){
        if($_FILES['file']['size'] < 1000000){            
            $fileNameNew = $name.$discount.".".$fileActualExt;
            $fileDestination = 'C:/xampp/htdocs/uploads/'.$fileNameNew;
            echo move_uploaded_file($fileTmp, $fileDestination);
            //$user->uploadPic($email);
            //header("Location: welcome.php?uploadsucess");
        }else{
            echo "Your file is too big!";
        }
    }else{
        echo "You have an error uploading your file!";
    }
}else{
    echo "You cannot upload files of this type!";
}


if(	$promo->insertPromo($name, $discount, $desc, $fileNameNew) == true){	
	header("location: ../index.php?Login=Successful");
}
else{
	header("location: ../login.php?Login=Unsuccessful");
}
?>
