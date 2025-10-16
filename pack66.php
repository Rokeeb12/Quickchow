<?php 
include "connect_to_mysqli.php";
if(isset($_POST['pod'])){
$kol=$_POST['pod'];
$kod=$_POST['dod'];


$bat='inactive';
 $kad='active';








     $sqli = "SELECT * from dat where stat='$kol' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $sod = $row["id"];   					
					 
                    }
                    
$insert = mysqli_query($con,"UPDATE plan SET status='$kad' where  code='$kol'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bat' where  stat='$kol'  ") or die ('Could not connect: ' .mysqli_error($con)); 
			 
			 header("location:order6.php");


}


?>
