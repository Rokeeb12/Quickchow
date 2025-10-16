<?php 

include "connect_to_mysqli.php";
if (isset( $_POST['hod'])){
$code= $_POST['hod'];

$va='1';
$p1=2;
$p2=3;
$p3=4;
$p4=5;

$res = $con->query("SELECT SUM(quantity) AS total FROM pak WHERE cod = '$code'    ");
$row = $res->fetch_assoc();
$tod = $row['total'] ?? 0;


$res = $con->query("SELECT SUM(quantity) AS total FROM enter WHERE code = '$code'  ");
$row = $res->fetch_assoc();
$tok = $row['total'] ?? 0;


$res = $con->query("SELECT SUM(price) AS total FROM enter WHERE code = '$code'  ");
$row = $res->fetch_assoc();
$tok2 = $row['total'] ?? 0;


$res = $con->query("SELECT SUM(pack) AS total FROM enter WHERE code = '$code'  ");
$row = $res->fetch_assoc();
$tok3 = $row['total'] ?? 0;




$res = $con->query("SELECT SUM(price) AS total FROM pak WHERE cod = '$code'AND num='$p1'    ");
$row = $res->fetch_assoc();
$tod2 = $row['total'] ?? 0;

$res = $con->query("SELECT SUM(price) AS total FROM pak WHERE cod = '$code'AND num='$p2'    ");
$row = $res->fetch_assoc();
$tod3 = $row['total'] ?? 0;


$res = $con->query("SELECT SUM(price) AS total FROM pak WHERE cod = '$code'AND num='$p3'    ");
$row = $res->fetch_assoc();
$tod4 = $row['total'] ?? 0;

$res = $con->query("SELECT SUM(price) AS total FROM pak WHERE cod = '$code'AND num='$p4'    ");
$row = $res->fetch_assoc();
$tod5 = $row['total'] ?? 0;

$cad=$tok2+$tod2+$tod3+$tod4+$tod5;



$res = $con->query("SELECT SUM(pack) AS total FROM pak WHERE cod = '$code'AND num='$p1'    ");
$row = $res->fetch_assoc();
$tob2 = $row['total'] ?? 0;

$res = $con->query("SELECT SUM(pack) AS total FROM pak WHERE cod = '$code'AND num='$p2'    ");
$row = $res->fetch_assoc();
$tob3 = $row['total'] ?? 0;


$res = $con->query("SELECT SUM(pack) AS total FROM pak WHERE cod = '$code'AND num='$p3'    ");
$row = $res->fetch_assoc();
$tob4 = $row['total'] ?? 0;

$res = $con->query("SELECT SUM(pack) AS total FROM pak WHERE cod = '$code'AND num='$p4'    ");
$row = $res->fetch_assoc();
$tob5 = $row['total'] ?? 0;

$cab=$tok3+$tob2+$tob3+$tob4+$tob5;


$bot=200;
$bot2=500;

$gad=$cab+$cad+$bot+$bot2;








         $stmtUpdate = $con->prepare("UPDATE total SET tot = ? WHERE code = ? ");
        $stmtUpdate->bind_param("is", $cad,$code);
        $stmtUpdate->execute();
        $stmtUpdate->close();


        
         $stmtUpdate = $con->prepare("UPDATE total SET fee = ? WHERE code = ? ");
        $stmtUpdate->bind_param("is", $cab,$code);
        $stmtUpdate->execute();
        $stmtUpdate->close();


         $stmtUpdate = $con->prepare("UPDATE total SET charges = ? WHERE code = ? ");
        $stmtUpdate->bind_param("is", $bot,$code);
        $stmtUpdate->execute();
        $stmtUpdate->close();

        
         $stmtUpdate = $con->prepare("UPDATE total SET pack = ? WHERE code = ? ");
        $stmtUpdate->bind_param("is", $bot2,$code);
        $stmtUpdate->execute();
        $stmtUpdate->close();

   $stmtUpdate = $con->prepare("UPDATE total SET grand = ? WHERE code = ? ");
        $stmtUpdate->bind_param("is", $gad,$code);
        $stmtUpdate->execute();
        $stmtUpdate->close();



session_start();
$_SESSION['ider']=$code;

if($tod>=$va || $tok>=$va)
{
echo header("location:checkout.php");
}
else{
       echo '<script>alert("You need to pick atleast one item");window.location.href = "order5.php";</script>';
}
}
?>
