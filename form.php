<?php 

include "connect_to_mysqli.php";
$first=$_POST['name'];
$real=$_POST['email'];
$dear=$_POST['mob'];
$idea=$_POST['ran']; 
$deal=$_POST['dan']; 
$eat=$_POST['can']; 
$bot=$_POST['man']; 
$hot=$_POST['san']; 
$sot=$_POST['fan']; 
$lot=$_POST['kan']; 
$kot=$_POST['ola']; 


$status="pending";
    
	 $sqli = "SELECT all* FROM kod where code='$idea' ";
			
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
					  $sqli = "SELECT all* FROM enter where id='$kot' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
		               $mot = $row["s"];   					
					 
					 
					  }
					  
					 $success="order taken"; 


			$submit = mysqli_query($con,"insert into kol(name,mob,email,code,item,quantity,price,date,status,dat,bank,bit,about,img,time) values ('$first','$dear', '$real','$eat','$bot','$hot','$sot','$lot','$status','$idea','','','','','')") or die ('Could not connect: ' .mysqli_error($con));
					 
			$submit = mysqli_query($con,"insert into dos(name,mob,email,code,item,quatity,price,date,status) values ('$first','$dear', '$real','$eat','$bot','$hot','$sot','$lot','$status')") or die ('Could not connect: ' .mysqli_error($con));

			
			{
			 echo header("location:dad.php");
			}
			session_start();
			$_SESSION['coda']=$_POST['can'];
			$_SESSION['dog']=$_POST['ran']; 
			$_SESSION['fola']= $_POST['dan']; 
			$_SESSION['hola']=$_POST['name'];
			$_SESSION['foxy']=$_POST['fan'];
			$_SESSION['foxy']=$mot;
					 ?>