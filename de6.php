<?php
include "connect_to_mysqli.php";
if(isset($_POST['zod'])){
$sad =$_POST['zod'];

 

        


		 $sqli = "SELECT * from dat WHERE stat ='$sad' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					  					
					   
						$saf= $row["id"];  
						$saz= $row["cod"];  
							 	 
                    }


	 

				

if($saz==='2'){

$query = "DELETE FROM dat WHERE id ='$saf' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

$insert = mysqli_query($con,"UPDATE plan SET status='active' where  code='$sad'  ") or die ('Could not connect: ' .mysqli_error($con)); 

	$query = "DELETE FROM pak WHERE cod ='$sad' AND num ='2' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

	 header("location:order6.php");
}

    

if($saz==='3'){

$query = "DELETE FROM dat WHERE id ='$saf' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

	$insert = mysqli_query($con,"UPDATE dat SET status='active' where  stat='$sad' and cod='2'  ") or die ('Could not connect: ' .mysqli_error($con)); 
	
	$query = "DELETE FROM pak WHERE cod ='$sad' AND num ='3' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

	 header("location:order6.php");

				}




if($saz==='4'){

$query = "DELETE FROM dat WHERE id ='$saf' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
	
	 $insert = mysqli_query($con,"UPDATE dat SET status='active' where  stat='$sad' and cod='3'  ") or die ('Could not connect: ' .mysqli_error($con));  

$query = "DELETE FROM pak WHERE cod ='$sad' AND num ='4' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

 header("location:order6.php");

				}


if($saz==='5'){

$query = "DELETE FROM dat WHERE id ='$saf' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
	
$insert = mysqli_query($con,"UPDATE dat SET status='active' where  stat='$sad' and cod='4'  ") or die ('Could not connect: ' .mysqli_error($con));

$query = "DELETE FROM pak WHERE cod ='$sad' AND num ='5' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
 header("location:order6.php");
				}


else{
		 header("location:order6.php");
}



			}






                    
?>
