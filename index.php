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
                <h3 class="font-weight-bold">Want to know more promo?</h3>
                <a href="register.html" class="text-reset font-weight-bold">Register now!</a>
            </div>
        </div>
    </div>

    <?php
    include 'View/footer.php';
    ?>

</body>

</html>