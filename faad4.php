<?php
include "connect_to_mysqli.php";
if(isset($_POST['hot'])){
$sad =$_POST['hot'];

 $ba=1;
$res = $con->query("SELECT SUM(quantity) AS total FROM pak WHERE cod = '$sad'  ");
$row = $res->fetch_assoc();
$tod = $row['total'] ?? 0;


$res = $con->query("SELECT SUM(quantity) AS total FROM enter WHERE code = '$sad'  ");
$row = $res->fetch_assoc();
$tok = $row['total'] ?? 0;
        

	 

				
$fo=0;


if($tod>=$ba || $tok>=$ba){
$query = "DELETE FROM enter WHERE code ='$sad' AND quantity > '$fo' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
$query = "DELETE FROM pak WHERE cod ='$sad' and  quantity > '$fo' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
$insert = mysqli_query($con,"UPDATE dat SET quantity='$fo' where  stat='$sad'  ") or die ('Could not connect: ' .mysqli_error($con)); 
 header("location:order5.php");
}

else{
             
            header("location:order5.php");
        }
}



			






                    
?>
