
<?php
include "connect_to_mysqli.php"; 
if(isset($_POST['nub'])){
$first=$_POST['nub'];
$name=$_POST['dod'];
$dear=$_POST['bod'];
$idea=$_POST['code']; 
$deal=$_POST['cod'];
	  
$status="pending";
 

 
 
 
 $sqli = "SELECT * from kod where code='$idea'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  $id = $row["id"];   					
					  $name = $row['name'];
					  $user= $row['age'];
					  $email = $row['code'];
					  $all = $row['price'];
					  $wee='lists/'.$row['filename'];
					  }

		

       $sqli = "SELECT * from enter where code='$deal'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					 					
					  $kos = $row['code'];
					
					  }
	       $pay=$user-$first;
			$ola=$first*$all;
			$deat=date("Y-m-d"); 
			
			if($user>$first){
                 echo '<script>alert("registered sucessfully");window.location.href = "log2.php";</script>';
            }
			
			$submit = mysqli_query($con,"insert into enter(quantity,code,date,item, price, status,stat,cot) values ('$first','$real', '$deat', '$name','$ola','$status', '$email','')") or die ('Could not connect: ' .mysqli_error($con));
			
			//$insert = mysqli_query($con,"UPDATE kod SET age='$pay' where  code='$idea'") or die ('Could not connect: ' .mysqli_error($con)); 
			 
			 header("location:order7.php");
		   			  
					 
					}	  
					   
					  
				
					  
					  ?>