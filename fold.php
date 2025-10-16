


<?php
include "connect_to_mysqli.php";

if(isset($_POST['dot'])){
$kol=$_POST['dot'];
$dola=$_POST['bof'];
$hold=$_POST['so'];
    
				$sqli = "SELECT * from kod where code='$dola' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
		               $id = $row["id"];   					
					  $nam = $row['name'];
					  $use= $row['age'];
					  $email = $row['code'];
					  $wee='lists/'.$row['filename'];
					 
					  }	
					  $cod=$use+$hold;
					
					$insert = mysqli_query($con,"DELETE FROM kol WHERE  id='$kol'") or die ('Could not connect: ' .mysqli_error($con)); 
					$insert = mysqli_query($con,"DELETE FROM dos WHERE  id='$kol' ") or die ('Could not connect: ' .mysqli_error($con)); 
			 //$insert = mysqli_query($con,"UPDATE kod SET age= '$cod' where  id='$id'") or die ('Could not connect: ' .mysqli_error($con)); 
	
					header("location:dad.php");
						
				
				}
					 ?>
