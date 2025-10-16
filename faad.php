<?php 
session_start();
 include "connect_to_mysqli.php";
$code = "DC".$randomString = substr(md5(microtime()), 0, 7);	
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

     $stmt = $con->prepare("INSERT INTO plan (code,status,verify) VALUES (?, ?,?)");
    $stmt->bind_param("ssi",  $code, $box,$d3);
    $stmt->execute();
    $stmt->close();

 $stmt = $con->prepare("INSERT INTO total (code,tot) VALUES (?, ?)");
    $stmt->bind_param("si",  $code, $d2);
    $stmt->execute();
    $stmt->close();




header("location:order5.php");
?>
 