<?php
session_start();
?>

<html lang="en">

<?php
    include 'View/header.php';
?>

<body data-spy="scroll">

    <div id="top"></div>
   

    <div id="carousel" class="carousel slide mt-5 shadow-sm" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/main.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/promo1.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/promo2.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <div class="container my-2" id="about">
        <div class="row">
            <div class="col-lg-6 my-3">
                <img class="img-about" src="img/ambience1.JPG" alt="about_img">
            </div>
            <div class="col-lg-6 my-3">
                <h1 class="font-weight-bold">About</h1>
                <p class="mt-3">Kodai Kopi merupakan perusahaan yang bergerak di bidang Food & Beverage yang menyediakan
                    minuman
                    kekinian yang di gandrungi oleh generasi milenial dengan berbagai macam varian rasa serta harga yang
                    terjangkau. </p>
                <p>Kodai Kopi adalah cafe yang berada di Mall of Indonesia yang siap menemani hari-harimu dengan kopi
                    yang berkualitas serta varian minuman lainnya.</p>
                <?php
                    if(!isset($_SESSION['email'])){
                        echo '<h3 class="font-weight-bold">Want to know more promo?</h3>
                        <a href="register.php" class="text-reset font-weight-bold">Register now!</a>';
                    }
                ?>
                
            </div>
            <?php
                    if(isset($_SESSION['email'])){
                       echo ' <!-- News -->
                       <div class="container my-2" id="news">
                           <div class="row">
                               <div class="col-lg-6 my-3">
                                   <h1 class="font-weight-bold">News</h1>
                                   <p class="mt-4">Kodai Kopi merupakan perusahaan yang bergerak di bidang Food & Beverage yang menyediakan
                                       minuman
                                       kekinian yang di gandrungi oleh generasi milenial dengan berbagai macam varian rasa serta harga yang
                                       terjangkau. </p>
                                   <p>Kodai Kopi adalah cafe yang berada di Mall of Indonesia yang siap menemani hari-harimu dengan kopi
                                       yang berkualitas serta varian minuman lainnya.</p>
                               </div>
                               <div class="col-lg-6 my-3">
                                   <img class="img-default" src="img/ambience.JPG" alt="about_img">
                               </div>
                           </div>
                       </div>
                   
                       <!-- Gallery -->
                       <div class="shadow-sm" style="background-color: black; color: white;">
                           <div class="container">
                               <hr class="mt-2 mb-5">
                               <h1 class="text-center font-weight-bold text-black" id="gallery">Gallery</h1>
                               <hr class="mt-2 mb-5">
                               <div class="row text-center text-lg-left">
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/1.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/2.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/3.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/4.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/5.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/6.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/7.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-8">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/bottle1.jpg">
                                       </a>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-6">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/bottle2.jpg">
                                       </a>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-6">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/bottle3.jpg">
                                       </a>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-6">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/bottle5.jpg">
                                       </a>
                                   </div>
                               </div>
                               <hr class="mt-2 mb-5">
                   
                               <h1 class="text-center font-weight-bold text-black">Our Store</h1>
                               <hr class="mt-2 mb-5">
                               <div class="row text-center mb-5">
                                   <div class="col-lg-6 col-md-6 col-2">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/ambience1.jpg">
                                       </a>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-2">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/ambience2.jpg">
                                       </a>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-2">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/ambience3.jpeg">
                                       </a>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-2">
                                       <a class="d-block mb-4 h-80">
                                           <img class="img-fluid" src="img/ambience4.jpeg">
                                       </a>
                                   </div>
                               </div>
                   
                           </div>
                       </div>
                   
                       <!-- Product -->
                       <div class="shadow-sm">
                           <div class="container">
                               <h1 class="text-center font-weight-bold text-black mt-5" id="product">Product</h1>
                               <hr class="mt-2 mb-5">
                               <div class="row text-center">
                                   <!-- Coffee -->
                                   <h2>Coffee</h2>
                                   <div class="row text-center">
                                       <div class="col-lg-2 col-md-2 col-10">
                                           <div class="margin-b-20">
                                               <img class="img-fluid" src="img/Korudo.png">
                                           </div>
                                           <div class="text-center">
                                               <h6 class="font-weight-bold">Kopi Susu Korudo</h6>
                                               <h6 class="font-weight">Hot 24000</h6>
                                               <h6 class="font-weight">Esu 22000</h6>
                                               <h6 class="font-weight">Emu 25000</h6>
                                               <h6 class="font-weight">Eru 28000</h6>
                                           </div>
                                       </div>
                                       <div class="col-lg-2 col-md-2 col-10">
                                           <div class="margin-b-20">
                                               <img class="img-fluid" src="img/Avocadosprou.png">
                                           </div>
                                           <div class="text-center">
                                               <h6h6 class="font-weight-bold">Avocado Spro</h6h6>
                                               <h6 class="font-weight">Esu 24000</h6>
                                               <h6 class="font-weight">Emu 26000</h6>
                                               <h6 class="font-weight">Eru 28000</h6>
                                           </div>
                                       </div>
                                       <div class="col-lg-2 col-md-2 col-10">
                                           <div class="margin-b-20">
                                               <img class="img-fluid" src="img/ChocoIrish.png">
                                           </div>
                                           <div class="text-center">
                                               <h6 class="font-weight-bold">Choco Irish Cream</h6>
                                               <h6 class="font-weight">Esu 26000</h6>
                                               <h6 class="font-weight">Emu 28000</h6>
                                               <h6 class="font-weight">Eru 30000</h6>
                                           </div>
                                       </div>
                                       <div class="col-lg-2 col-md-2 col-10">
                                           <div class="margin-b-20">
                                               <img class="img-fluid" src="img/StrawberryMachiato.png">
                                           </div>
                                           <div class="text-center">
                                               <h6 class="font-weight-bold">Strawberry Machiato</h6>
                                               <h6 class="font-weight">Esu 25000</h6>
                                               <h6 class="font-weight">Emu 28000</h6>
                                               <h6 class="font-weight">Eru 30000</h6>
                                           </div>
                                       </div>
                                       <div class="col-lg-2 col-md-2 col-10">
                                           <div class="margin-b-20">
                                               <img class="img-fluid" src="img/Korudo.png">
                                           </div>
                                           <div class="text-center">
                                               <h6 class="font-weight-bold">Aren Latte</h6>
                                               <h6 class="font-weight">Hot 20000</h6>
                                               <h6 class="font-weight">Esu 18000</h6>
                                               <h6 class="font-weight">Emu 20000</h6>
                                               <h6 class="font-weight">Eru 22000</h6>
                                           </div>
                                       </div>
                                       <div class="col-lg-2 col-md-2 col-10">
                                           <div class="margin-b-20">
                                               <img class="img-fluid" src="img/BiscuitCrumblle.png">
                                           </div>
                                           <div class="text-center">
                                               <h6 class="font-weight-bold">Vanilla Biscuit Crumblle</h6>
                                               <h6 class="font-weight">Esu 24000</h6>
                                               <h6 class="font-weight">Emu 26000</h6>
                                               <h6 class="font-weight">Eru 28000</h6>
                                           </div>
                                       </div>
                   
                                       <!-- Flavoured Latte -->
                                       <h2>Flavoured Latte</h2>
                                       <div class="row text-center">
                                           <div class="col-lg-2 col-md-2 col-10">
                                               <div class="margin-b-20">
                                                   <img class="img-fluid" src="img/Avocado.png">
                                               </div>
                                               <div class="text-center">
                                                   <h6 class="font-weight-bold">Avocado Latte</h6>
                                                   <h6 class="font-weight">Hot 25000</h6>
                                                   <h6 class="font-weight">Esu 23000</h6>
                                                   <h6 class="font-weight">Emu 25000</h6>
                                                   <h6 class="font-weight">Eru 28000</h6>
                                               </div>
                                           </div>
                                           <div class="col-lg-2 col-md-2 col-10">
                                               <div class="margin-b-20">
                                                   <img class="img-fluid" src="img/RedVelvet.png">
                                               </div>
                                               <div class="text-center">
                                                   <h6 class="font-weight-bold">Red Velvet Latte</h6>
                                                   <h6 class="font-weight">Hot 25000</h6>
                                                   <h6 class="font-weight">Esu 23000</h6>
                                                   <h6 class="font-weight">Emu 25000</h6>
                                                   <h6 class="font-weight">Eru 28000</h6>
                                               </div>
                                           </div>
                                           <div class="col-lg-2 col-md-2 col-10">
                                               <div class="margin-b-20">
                                                   <img class="img-fluid" src="img/Greentea.png">
                                               </div>
                                               <div class="text-center">
                                                   <h6 class="font-weight-bold">Greentea Latte</h6>
                                                   <h6 class="font-weight">Hot 25000</h6>
                                                   <h6 class="font-weight">Esu 23000</h6>
                                                   <h6 class="font-weight">Emu 25000</h6>
                                                   <h6 class="font-weight">Eru 28000</h6>
                                               </div>
                                           </div>
                                           <div class="col-lg-2 col-md-2 col-10">
                                               <div class="margin-b-20">
                                                   <img class="img-fluid" src="img/Korudo.png">
                                               </div>
                                               <div class="text-center">
                                                   <h6 class="font-weight-bold">Korudo Latte</h6>
                                                   <h6 class="font-weight">Hot 25000</h6>
                                                   <h6 class="font-weight">Esu 23000</h6>
                                                   <h6 class="font-weight">Emu 25000</h6>
                                                   <h6 class="font-weight">Eru 28000</h6>
                                               </div>
                                           </div>
                                           <div class="col-lg-2 col-md-2 col-10">
                                               <div class="margin-b-20">
                                                   <img class="img-fluid" src="img/Taro.png">
                                               </div>
                                               <div class="text-center">
                                                   <h6 class="font-weight-bold">Taro Latte</h6>
                                                   <h6 class="font-weight">Hot 25000</h6>
                                                   <h6 class="font-weight">Esu 23000</h6>
                                                   <h6 class="font-weight">Emu 25000</h6>
                                                   <h6 class="font-weight">Eru 28000</h6>
                                               </div>
                                           </div>
                                           <div class="col-lg-2 col-md-2 col-10">
                                               <div class="margin-b-20">
                                                   <img class="img-fluid" src="img/ChocoIrish.png">
                                               </div>
                                               <div class="text-center">
                                                   <h6 class="font-weight-bold">Chocolate Latte</h6>
                                                   <h6 class="font-weight">Hot 25000</h6>
                                                   <h6 class="font-weight">Esu 23000</h6>
                                                   <h6 class="font-weight">Emu 25000</h6>
                                                   <h6 class="font-weight">Eru 28000</h6>
                                               </div>
                                           </div>
                   
                                           <!-- Non Coffee -->
                                           <h2>Non Coffee</h2>
                                           <div class="row text-center">
                                               <div class="col-lg-2 col-md-2 col-10">
                                                   <div class="margin-b-20">
                                                       <img class="img-fluid" src="img/BlueSparkilng.png">
                                                   </div>
                                                   <div class="text-center">
                                                       <h6 class="font-weight-bold">Blue Sparkilng Lemonade</h6>
                                                       <h6 class="font-weight">Esu 22000</h6>
                                                       <h6 class="font-weight">Emu 25000</h6>
                                                       <h6 class="font-weight">Eru 28000</h6>
                                                   </div>
                                               </div>
                                               <div class="col-lg-2 col-md-2 col-10">
                                                   <div class="margin-b-20">
                                                       <img class="img-fluid" src="img/Halowwen1.png">
                                                   </div>
                                                   <div class="text-center">
                                                       <h6 class="font-weight-bold">Grim Reaper</h6>
                                                       <h6 class="font-weight">Esu 24000</h6>
                                                       <h6 class="font-weight">Emu 26000</h6>
                                                       <h6 class="font-weight">Eru 28000</h6>
                                                   </div>
                                               </div>
                                               <div class="col-lg-2 col-md-2 col-10">
                                                   <div class="margin-b-20">
                                                       <img class="img-fluid" src="img/Halowwen2.png">
                                                   </div>
                                                   <div class="text-center">
                                                       <h6 class="font-weight-bold">Bloody Mary</h6>
                                                       <h6 class="font-weight">Esu 26000</h6>
                                                       <h6 class="font-weight">Emu 28000</h6>
                                                       <h6 class="font-weight">Eru 30000</h6>
                                                   </div>
                                               </div>
                                               <div class="col-lg-2 col-md-2 col-10">
                                                   <div class="margin-b-20">
                                                       <img class="img-fluid" src="img/ChocoIrish.png">
                                                   </div>
                                                   <div class="text-center">
                                                       <h6 class="font-weight-bold">Choco Hazelnut Milk Tea</h6>
                                                       <h6 class="font-weight">Esu 25000</h6>
                                                       <h6 class="font-weight">Emu 28000</h6>
                                                       <h6 class="font-weight">Eru 30000</h6>
                                                   </div>
                                               </div>
                                               <div class="col-lg-2 col-md-2 col-10">
                                                   <div class="margin-b-20">
                                                       <img class="img-fluid" src="img/BlueSparkilng.png">
                                                   </div>
                                                   <div class="text-center">
                                                       <h6 class="font-weight-bold">Butterfly Magic Tea</h6>
                                                       <h6 class="font-weight">Esu 24000</h6>
                                                       <h6 class="font-weight">Emu 26000</h6>
                                                       <h6 class="font-weight">Eru 28000</h6>
                                                   </div>
                                               </div>
                                               <div class="col-lg-2 col-md-2 col-10">
                                                   <div class="margin-b-20">
                                                       <img class="img-fluid" src="img/BiscuitCrumblle.png">
                                                   </div>
                                                   <div class="text-center">
                                                       <h6 class="font-weight-bold">Vanilla Biscuit Crumblle</h6>
                                                       <h6 class="font-weight">Esu 18000</h6>
                                                       <h6 class="font-weight">Emu 20000</h6>
                                                       <h6 class="font-weight">Eru 22000</h6>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>';
                    }
                ?>

        </div>
    </div>

    <?php
    include 'View/footer.php';
    ?>

</body>

</html>