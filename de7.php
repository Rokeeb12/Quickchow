<?php
include "connect_to_mysqli.php";
if(isset($_POST['pox'])){
$das =$_POST['pox'];
	$dak = $_POST['tox'];
   $pap='pack';
   $for='active';

$sqli = "SELECT * from plan where code='$das' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
		               
					  $cap= $row['status'];

					 
					}

					 

			$sqli = "SELECT * from dat where stat='$das' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					   $dap = $row["status"];   					
				 }

				 if($cap===$for){
$query = "DELETE FROM enter WHERE id ='$das'  "; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: order5.php"); 
}
					  


}
?>