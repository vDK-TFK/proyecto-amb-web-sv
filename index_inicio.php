<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['usuario'];

if($actualsesion == null || $actualsesion == ''){
header('location: \login.php');
}
else{
   header('location: \index.php');
}
?>
