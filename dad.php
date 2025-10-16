<?php
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body{
background-color:black;
}
.lol{
margin-left:70px;
margin-top:50px;
color:#FFFFFF;
}
.lov{
color:#FFFFFF;
}

</style>
</head>

<body>
<!-- ======= Pricing Section ======= -->
 <?php $pok=$_SESSION['dog']; ?>
    <a class="lov" href="bod.php">view order</a>
      <div class="container" margin:auto;">
	  <div class="lol">
          <h2 ><b>CART CHECKOUT - PAYMENT</b></h2>
          <p><b>Pay with card. we make things flexible!</b></p>
      </div>
  <div class="container-fluid mt-5">
            <div class="d-flex" style="overflow: auto;">
                <div class="col-md-12">
				<center><table border="" cellpadding="15" cellspacing="0" width="90%" height="50px" class="table-bordered text-center" style="">
				 <thead style="background: #FFC700; color: white; border-style: 1px solid #FFC700; ">
<tr>
	<td>txd</td>
<td>Delete item</td>
<td style="border-right-color:yellow;">name</td>
<td style="border-right-style: hidden;">quantity</td>
<td>Total price</td>

<td>Add order</td>

 </thead>
                        <tbody>
						 

</tr><?php 

include "connect_to_mysqli.php";
$x=1;

$hold = $_SESSION['nod'];
$cold=$_SESSION['fola'];
$dur=$_SESSION['ider'];
$tola=$_SESSION['dola'];
$rod=$_SESSION['coda'];
$pod=$_SESSION['foxy'];
$pok=$_SESSION['dog'];

include "connect_to_mysqli.php";


					  
     $sqli = "SELECT * from kod where code='$pok' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					
					  $email = $row['code'];
					
					   
		
			
			 $sqli = "SELECT * from enter where code='$dur'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
				       $k1= $row['id']; 				
					  $p2=$row['name']; 
					  $p3=$row['mob'];
					   $p4=$row['email'];
					   $p5=$row['code'];
					   $p6=$row['item'];
					   $p7=$row['quantity'];
					   $p8=$row['price'];
					    $p9=$row['date'];
						 $p0=$row['status'];
						    $f9=$row['dat'];
						
				
				if($p1!=""){
				
			 $sqla = "SELECT * from dos where code='$p5' ";
			
		   $sqli2a = mysqli_query($con,$sqla);
			  
			   while($row = mysqli_fetch_array($sqli2a))
				    
					{
				       $n1= $row['id']; 
				
			
					   }}
			
                            echo"
							 <thead style='background:; color: white; border: 1px solid white;'>
	<tr>
	<td> ".$x++." </td>
	<td>
	<form action='fold.php' method='post' >
	
	
	
	<input type='text' value='$dur' name='go'   /><br>
	
	
	<input type='text' name='bof' value='$f9'  /><br>
	<input type='text' name='so' value='$p7'  /><br>
 <input type='text' name='dot' value='$k1'  /><br>
	<button type='submit' name='submit'  >delete</button>
	</form>
	</td>

	<td> ".$p6."</td>
	<td>  $p7 </td>
	<td> &#8358;$p8.00 </td>

	
	

<td><form method='post' action='add2.php'><input type='text' value='$cold'/><input type='text' name=goc value='$dod' hidden /><input type='text' value='$dur' name='gos'  /><button type='submit' name='submit'  >Add order</button></form></td>

	</tr>
	";
	}
	}
	
	
	
	
	
	?>

				
               </div>
			   </div>
			   </div>
			   </div>
						</thead>
                        <tbody>
						</table>
						</center>
						<br><br><br><br>
						<div class="container border p-0">
						
					<center><table border="1px" cellpadding="15" cellspacing="0" width="90%" height="50px" class="table-bordered text-center" style=" color:white;">
 <thead style="background: #FFC700; color: white; border-style: 1px solid #FFC700; ">
<tr>
<td>Cart Total</td>
<td>product Total</td>
<td>Check out</td>

</tr>
</thead>
                        <tbody>
 <thead style="background: #FFC700; color: white; border-style: 1px solid #FFC700; ">						 
<tr>
<?php 

include "connect_to_mysqli.php";
$x=1;

$hold = $_SESSION['nod'];
$cold=$_SESSION['fola'];
$dur=$_SESSION['ider'];
$tola=$_SESSION['dola'];
$rod=$_SESSION['coda'];
include "connect_to_mysqli.php";

     $sqli = "SELECT * from kod ";
			
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
			 $sqli = "SELECT sum(price) from kol where code='$rod'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tot=$k;
					
					}  
					
					$_SESSION['cob']=$tot;
				      
					
				$sqli = "SELECT sum(quantity) from kol where code='$rod'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tod=$k;
					
					}  
					
					$_SESSION['cob']=$tot;
					   ?>
					  
					
</tr>
</thead>
                        <tbody>
<td>TOTAL:&#8358;<?php echo $tot; ?>.00</td>
<td>TOTAL:<?php echo $tod; ?></td>
<td><form method="post" action="dolo.php"><button type="submit" name="">procceed to payment</button> </form></td>
</table>	
</center>
<br />

				  
						
</body>
</html>
