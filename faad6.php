<?php 
session_start();


include "connect_to_mysqli.php";
 if (isset( $_POST['hod'])){
$code= $_POST['hod'];

$cod = "BP".$randomString = substr(md5(microtime()), 0, 7);
  
$_SESSION['ider']=$code;

$box='active';
$d1='';
$d2=0;
$d3=1;
$stmt = $con->prepare("INSERT INTO enter (quantity,code,date,item,price ,status, stat, quan2) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $d2,$code, $d1, $d1,$d1,$d1, $d1,$box);
    $stmt->execute();
    $stmt->close();

     $stmt = $con->prepare("INSERT INTO plan (code,status) VALUES (?, ?)");
    $stmt->bind_param("ss",  $code, $box);
    $stmt->execute();
    $stmt->close();




header("location:order6.php");
 }
?>
 