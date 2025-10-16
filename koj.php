
<?php
error_reporting(0);
include "connect_to_mysqli.php"; 
if(isset($_POST['s1'])){
$f1=$_POST['s1'];
$f2=$_POST['s2'];
$f3=$_POST['s3'];
$f4=$_POST['s4']; 
$f7=$_POST['s5'];
$fod=$_POST['n8'];
$van=$_POST['fan'];
$van=$_POST['can'];
}

 
 $sqli = "SELECT * from kol where code='$fod'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  $do = $row["code"];   					
					  $name = $row['bank'];
					  $user= $row['bit'];
					  $email = $row['about'];
					  $all = $row['add'];
					  $dee=$row['img'];
					   $tim=$row['time'];
					 
					  }
					  
					  
					  
			
			
			$insert = mysqli_query($con,"UPDATE kol SET bank='$f1' where  code='$do'") or die ('Could not connect: ' .mysqli_error($con));  
			$insert = mysqli_query($con,"UPDATE kol SET bit='$f2' where  code='$do'") or die ('Could not connect: ' .mysqli_error($con)); 
			$insert = mysqli_query($con,"UPDATE kol SET about='$f3' where  code='$do'") or die ('Could not connect: ' .mysqli_error($con)); 
		$insert = mysqli_query($con,"UPDATE kol SET img='$f4' where  code='$do'") or die ('Could not connect: ' .mysqli_error($con));  
				$insert = mysqli_query($con,"UPDATE kol SET time='$f7' where  code='$do'") or die ('Could not connect: ' .mysqli_error($con)); 
							 
			$submit = mysqli_query($con,"insert into pos(item,price,quan,code,dat,status) values ('$first',)") or die ('Could not connect: ' .mysqli_error($con));

						     			  
					  {
					 echo  '<script>alert("Details submitted succesfully");window.location.href = "order2.php";</script>';
					  }
					  
					   
					  
					                                                                                                           
					
					  
					  ?>