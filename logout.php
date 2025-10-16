<?php
session_start();
$_SESSION["codd"]="";
session_destroy();
header("location:register2.php");
?>