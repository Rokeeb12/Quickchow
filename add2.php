<?php
session_start();
$fall=$_SESSION['ider'];
?>

<?php 
include "connect_to_mysqli.php";
if (isset( $_POST['gos'])){
$code= $_POST['gos'];
session_start();
$_SESSION['ider']=$code;
header("location:order2.php");
}
?>
