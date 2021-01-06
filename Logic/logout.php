<?php
if (!isset($_SESSION)) {
	session_start();
}
include '../Controller/UserController.php';
$userController = new UserController();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$userController->logActivity($_SESSION['email'], "Logged out");

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
if (session_destroy()) {
	// Redirect to login page
	header("location: ../index.php");
	exit;
} else {
	echo $_SESSION['email'];
	echo 'session not destroyed';
}
