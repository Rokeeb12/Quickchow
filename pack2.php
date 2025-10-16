<?php 
session_start();
include "connect_to_mysqli.php";
if(isset($_POST['cot'])){
$kol=$_POST['cot'];
$kat=$_POST['kot'];
$cob=$_POST['fad'];
$cov=$_POST['pot'];

$tot=4;

$mom = "pack".$nextnum;

$baz='active';
$bat='inactive';
 $sqli = "SELECT sum(num) from dat ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tok=$k;
					
                    }





                    


$cod = "BC".$randomString = substr(md5(microtime()), 0, 7);	


//$submit = mysqli_query($con,"insert into enter(quantity,code,date,item,price ,status, stat, pack2) values ('0','$cod', '', '','','', '','$kol')") or die ('Could not connect: ' .mysqli_error($con));
if($tok<=$tot){
$submit = mysqli_query($con,"insert into dat(num,poz,code,stat,status,quantity,cod) values ('$kol','$kat','$cod','$cob','$baz','0','$tok')") or die ('Could not connect: ' .mysqli_error($con));
header("location:order5.php");
$submit = mysqli_query($con,"insert into pak(code,quantity,item,cod,pod,num) values ('$cod','0','','$cob','$kat','$tok')") or die ('Could not connect: ' .mysqli_error($con));
$insert = mysqli_query($con,"UPDATE plan SET status='$bat' where  code='$cob'  ") or die ('Could not connect: ' .mysqli_error($con)); 
//$insert = mysqli_query($con,"UPDATE dat SET status='$bat' where  stat='$cot' AND code='$cod' AND status='$bad' ") or die ('Could not connect: ' .mysqli_error($con)); 
header("location:order5.php");
}
else{
     echo '<script>alert("sorry you cannot add more than 5 plate");window.location.href = "order5.php";</script>';
}

$_SESSION['cof']=$cod;

}

?>
