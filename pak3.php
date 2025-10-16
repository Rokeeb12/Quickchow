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

$cok=$tob+1;
                    


$cod = "BC".$randomString = substr(md5(microtime()), 0, 7);	



if($tob<=$tot){
$sql = "SELECT COUNT(*) AS pack_count FROM dat WHERE stat = '$cob'";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $pack_number = $row['pack_count'] + 1;
    $pack_name = "pack" . $pack_number;
}
     $submit = mysqli_query($con,"insert into dat(num,poz,code,stat,status,quantity,cod) values ('$kol',' $pack_name','$cod','$cob','$baz','0','$cok')") or die ('Could not connect: ' .mysqli_error($con));

$submit = mysqli_query($con,"insert into pak(code,quantity,item,cod,pod,num) values ('$cod','0','','$cob','$kat','$tob')") or die ('Could not connect: ' .mysqli_error($con));
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



if($tok==='3'){
    $co=1;
        $insert = mysqli_query($con,"UPDATE dat SET status ='$bat' where  cod ='2' and status ='active' ") or die ('Could not connect: ' .mysqli_error($con)); 
}
if($tok==='4'){
    $co=1;
        $insert = mysqli_query($con,"UPDATE dat SET status ='$bat' where  cod ='3' and status ='active' ") or die ('Could not connect: ' .mysqli_error($con)); 
}
            if($tok ==='5'){
    $co=1;
        $insert = mysqli_query($con,"UPDATE dat SET status ='$bat' where  cod ='4' and status ='active' ") or die ('Could not connect: ' .mysqli_error($con)); 
}



 } 



?>
