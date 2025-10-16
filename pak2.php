<?php 
session_start();
include "connect_to_mysqli.php";
if(isset($_POST['cot'])){
$kol=$_POST['cot'];
$kat=$_POST['kot'];
$cob=$_POST['fad'];


$tot=4;



$baz='active';
$bat='inactive';
 $sqli = "SELECT sum(num) from dat where stat='$cob'  ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tob=$k;
					
                    }



  $sqli = "SELECT * FROM dat WHERE stat='$cob' ";
        $sqli2 = mysqli_query($con, $sqli);
 $i = 2;
        while ($row = mysqli_fetch_array($sqli2)) {
            $packNum = $row['cod'];
            
            $i++;
        }






$cok=$tob+2;
                    
$boc=5;

$x=2;
$do=$x++;
$cod = "BC".$randomString = substr(md5(microtime()), 0, 7);	



if($cok<=$boc){
   
     $submit = mysqli_query($con,"insert into dat(num,poz,stat,status,quantity,cod) values ('$kol','$kat','$cob','$baz','0','$i')") or die ('Could not connect: ' .mysqli_error($con));

$submit = mysqli_query($con,"insert into pak(code,quantity,item,cod,pod,num,status,pack) values ('$cod','0','','$cob','$kat','$tob','active','0')") or die ('Could not connect: ' .mysqli_error($con));
$insert = mysqli_query($con,"UPDATE plan SET status='$bat' where  code='$cob'  ") or die ('Could not connect: ' .mysqli_error($con));

 header("location:order5.php");
}

else{
      echo '<script>alert("You cannot add more than 4 extra plate");window.location.href = "order5.php";</script>';
}

 $sqli = "SELECT sum(num) from dat where stat='$cob'  ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tok=$k;
					
                    }



if($tok==='2'){
    $co=1;
        $insert = mysqli_query($con,"UPDATE dat SET status ='$bat' where  cod ='2'  AND status ='active' AND stat ='$cob'  ") or die ('Could not connect: ' .mysqli_error($con)); 
}
if($tok==='3'){
    $co=1;
        $insert = mysqli_query($con,"UPDATE dat SET status ='$bat' where  cod ='3' and status ='active' ") or die ('Could not connect: ' .mysqli_error($con)); 
}
            if($tok ==='4'){
    $co=1;
        $insert = mysqli_query($con,"UPDATE dat SET status ='$bat' where  cod ='4' and status ='active' ") or die ('Could not connect: ' .mysqli_error($con)); 
}



}



?>
