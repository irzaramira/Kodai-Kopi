<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodai Kopi</title>
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS  and JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>

<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
        <div class="container my-2">
            <a href="https://kodaikopimoi.000webhostapp.com/">
            <img class="logo-kodai mr-3" src="../img/logo3.jpeg">
            </a>
            <div class="collapse navbar-collapse navbar-align-right" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item mx-3"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="">About</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="">News</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="">Gallery</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="">Product</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="">Product</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="https://kodaikopimoi.000webhostapp.com/View/promo.php">Promos</a></li>
                    <?php
                    if (!isset($_SESSION['email'])) {
                        echo "<li class='nav-item mx-3'><a class='nav-link active' href='../login.php'>Login</a></li>";
                    } else {
                        if($_SESSION['isAdmin'] == 1){
                            echo "<li class='nav-item mx-3'><a class='nav-link active' href='../createPromo.php'>Create Promo</a></li>";
                        }
                        echo '<li class="nav-item mx-3">
                        <a class="nav-link" href="../Logic/logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right mt-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                        </a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>