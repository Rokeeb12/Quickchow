<?php
include "connect_to_mysqli.php";
	        if (isset( $_POST['user'])){
			$user=$_POST['user'];
		   $changepass =$_POST['made'];
			$npass = $_POST['age'];
		
			  
	  
	 $sql = "SELECT * from kod where code= '".$user."'" ;
		  $sql2 = mysqli_query($con,$sql);
	  
		       while ($row = mysqli_fetch_array($sql2))
		          {
			         $d_pass = $row['code'];
			         if($user != $d_pass)
			            {  
        				   $err='<center>item not found<br>Try Again</center>
						   ';
							
		            	}
						
		        	 else
					 
					 
					
            			{
			                $insert = mysqli_query($con,"UPDATE kod SET name= '$changepass' where  code='$d_pass'") or die ('Could not connect: ' .mysqli_error($con)); 
	
                     	 $insert = mysqli_query($con,"UPDATE kod SET age= '$npass' where  code='$d_pass'") or die ('Could not connect: ' .mysqli_error($con)); 
						
                           	$dod='Updated successfully';
						 echo header("location:view.php");	 	
			            }
		          }
		  
			}
			 
		   
	  
	  
	  ?>