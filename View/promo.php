<?php
require_once '../Controller/PromoController.php';
session_start();
?>
<html lang="en">
<?php
include 'header.php';
?>

<body data-spy="scroll">
    <div id="top" class="jumbotron text-center" style="margin-top: 5rem;">
        <h1 class="font-weight-bold">PROMOS</h1>
    </div>

    <?php
    $promoController = new PromoController();
    $promoList = $promoController->getAllPromo();
    $index = 1;
    echo "<div class='container mb-5'>";
    foreach ($promoList as $promo) {
        echo "<div class='accordion' id='accordionExample'>
            <div class='card'>
                <div class='card-header text-center' type='button' id='headingOne' data-toggle='collapse'
                    data-target='#collapse" . $index . "' aria-expanded='false' aria-controls='collapseOne'>
                    " . strtoupper($promo->name) . "
                </div>

                <div id='collapse" . $index . "' class='collapse' aria-labelledby='headingOne'
                    data-parent='#accordionExample'>
                    <div class='card-body'>
                        <div class='row'>
                                <div class='col-lg-6'>
                                    " . $promo->description . "
                                </div>
                                <div class='col-lg-6'>
                                    Discount: " . $promo->discount . " Rupiah
                                    <br>
                                    <img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https://kodaikopimoi.000webhostapp.com/Logic/processPromo.php?name=". $promo->name . "discount=" . $promo->discount . "&choe=UTF-8'
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>";
        $index++;
    }
    ?>
</body>
<?php
include 'footer.php';
?>
</html>