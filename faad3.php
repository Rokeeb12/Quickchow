<?php 

include "connect_to_mysqli.php";
if (isset( $_POST['hod'])){
$code= $_POST['hod'];
session_start();
$_SESSION['ider']=$code;
header("location:order5.php");
}
?>
