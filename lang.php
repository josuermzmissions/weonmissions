<?php 
session_start();
$_SESSION['lang'] = $_GET['l'] ?? 'en';
/*header("Location: index.php")*/

$referer = $_SERVER['HTTP_REFERER'] ?? '/';
header( "Location: $referer" );
?>