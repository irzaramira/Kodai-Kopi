<?php
session_start();

echo "Selamat anda mendapat diskon sebesar " . $_SESSION['discount'] . " dari promo " . $_SESSION['promoName'];

?>