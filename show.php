<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body{
background-color:#000000;
}
.lol{
margin-left:70px;
margin-top:50px;
color:#FFFFFF;
}
.los{
margin-top:30px;
margin-left:70px;
box
}

</style>
</head>

<body>
<!-- ======= Pricing Section ======= -->
<div class="container">
<div class="row"
<div class="col-lg-12, col-md-12, col-xs-12">
   <form method="post">
   <input type="text" name="kay" placeholder="search here" class="los" />
   </form>
   </div>
   </div>
   </div>
      <div class="container" margin:auto;">
	  <div class="lol">
          <h2 ><b>Customer information</b></h2>
          <p><b>View orders</b></p>
      </div>
  <div class="container-fluid mt-5">
  <div class="row">
            <div class="d-flex" style="overflow: auto;">
                <div class="col-md-12">
				<center><table border="" cellpadding="15" cellspacing="0" width="90%" height="50px" class="table-bordered text-center" style="color:white;">
				 <thead style="background: #FFC700; color: white; border-style: 1px solid #FFC700; ">
<tr>
<td>S/N</td>
<td style="border-right-color:yellow;">Name</td>
<td style="border-right-style: hidden;">Email</td>
<td style="border-right-style: hidden;">mobile no</td>
<td>Customer id</td>
<td>item</td>
<td>quatity</td>
<td>Total price</td>
<td>Date</td>
<td>payment status</td>
<td>Approved payment</td>






 </thead>
                        <tbody>
						 

</tr><?php 
error_reporting(0);

$do=$_SESSION['hola'];
$x=1;
$hold = $_SESSION['nod'];
$cold=$_SESSION['dat'];
$dur=$_SESSION['ider'];
$tola=$_SESSION['dola'];
$rod=$_SESSION['coda'];
$foda=$_SESSION['dop'];
$doa=$_SESSION['boda'];
$day=$_POST['kay'];
include "connect_to_mysqli.php";

if ($day=="")
{

     $sqli = "SELECT * from kod  ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
				        $id = $row["id"];   					
					  $name = $row['name'];
					  $user= $row['age'];
					  $email = $row['code'];
					   $all = $row['price'];
					  $wee='lists/'.$row['filename'];
					  
					  
							
					 
					  
		
				
						
					  
				
			 $sqli = "SELECT * from kol";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
				       $p1= $row['id']; 				
					  $p2=$row['name']; 
					  $p3=$row['mob'];
					   $p4=$row['email'];
					   $p5=$row['code'];
					   $p6=$row['item'];
					   $p7=$row['quatity'];
					   $p8=$row['price'];
					    $p9=$row['date'];
						 $p0=$row['status'];
				
				
				if($p1!=""){
				
			 $sqla = "SELECT * from dos where code='$p5' ";
			
		   $sqli2a = mysqli_query($con,$sqla);
			  
			   while($row = mysqli_fetch_array($sqli2a))
				    
					{
				       $mon= $row['id']; 
				
			
					   }}
					   
                            echo"
							
	<tr>
	<td>".$x++."</td>
	
	<td>".$p2."</td>
	<td>".$p4."</td>
	<td>".$p3."</td>
	<td>".$p5."</td>

	<td>".$p6."</td>
	<td>".$p7."</td>
	<td>&#8358;".$p8.".00</td>
	<td>".$p9."</td>
	<td>".$p0."</td>
	<td><form method='post' action='prove.php'><input type='text' name='doc' value='$p1' hidden  /><input type='text' name='ol' value='$dola ' hidden  />
	<input type='text' name='p2' value='$p2'   hidden/><input type='text' name='p3' value='$p3'   hidden/><input type='text' name='p4' value='$p4'   hidden/><input type='text' name='p5' value='$p5'   hidden/><input type='text' name='p6' value='$p6'   hidden/><input type='text' name='p7' value='$p7'   hidden/><input type='text' name='p8' value='$p8'   hidden/><input type='text' name='p9' value='$p9'   hidden/><input type='text' name='p0' value='$p0'   hidden/><input type='text' name='do' value='$mon' hidden  /><input type='text' name='kod' value='$fod'   hidden/><button type='submit' name='submit'  >Approve payment</button></form></td>
	
	

	</tr>
	";
	}
	}
	}
	
	else{
	$sqli = "SELECT * from kod  ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
				        $id = $row["id"];   					
					  $name = $row['name'];
					  $user= $row['age'];
					  $email = $row['code'];
					   $all = $row['price'];
					  $wee='lists/'.$row['filename'];
					  
					  
							
					 
					  
		
				
						
					  
				
			 $sqli = "SELECT * from kol where email='$day'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
				       $p1= $row['id']; 				
					  $p2=$row['name']; 
					  $p3=$row['mob'];
					   $p4=$row['email'];
					   $p5=$row['code'];
					   $p6=$row['item'];
					   $p7=$row['quatity'];
					   $p8=$row['price'];
					    $p9=$row['date'];
						 $p0=$row['status'];
				
				
				if($p1!=""){
				
			 $sqla = "SELECT * from dos where code='$p5' ";
			
		   $sqli2a = mysqli_query($con,$sqla);
			  
			   while($row = mysqli_fetch_array($sqli2a))
				    
					{
				       $mon= $row['id']; 
				
			
					   }}
					   
                            echo"
							
	<tr>
	<td>".$x++."</td>
	
	<td>".$p2."</td>
	<td>".$p4."</td>
	<td>".$p3."</td>
	<td>".$p5."</td>

	<td>".$p6."</td>
	<td>".$p7."</td>
	<td>".$p8."</td>
	<td>".$p9."</td>
	<td>".$p0."</td>
	<td><form method='post' action='prove.php'><input type='text' name='doc' value='$p1' hidden   /><input type='text' name='ol' value='$dola ' hidden  />
	<input type='text' name='p2' value='$p2'   hidden/><input type='text' name='p3' value='$p3'   hidden/><input type='text' name='p4' value='$p4'   hidden/><input type='text' name='p5' value='$p5'   hidden/><input type='text' name='p6' value='$p6'   hidden/><input type='text' name='p7' value='$p7'   hidden/><input type='text' name='p8' value='$p8'   hidden/><input type='text' name='p9' value='$p9'   hidden/><input type='text' name='p0' value='$p0'   hidden/><input type='text' name='do' value='$mon' hidden /><input type='text' name='kod' value='$fod'   hidden/><button type='submit' name='submit'  >Approve payment</button></form></td>
	
	

	</tr>
	";
	}
	}
	
	
	}






















	session_start();
	$_SESSION['ider']=$dur;
	$_SESSION['id']=$id;
	?>

				</thead>
                        <tbody>
						</table>
						</center>
               </div>
			   </div>
			   </div>
			   </div>
			   </div>
			   </div>
						<br><br><br><br>
						

				  
						
</body>
</html>
