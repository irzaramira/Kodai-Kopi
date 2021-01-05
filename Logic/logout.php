<?php
// Initialize the session
if (!isset($_SESSION)) {
	session_start();
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
