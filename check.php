<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
 <main>
         
		  <style>
		  body{
		  background-color:#000000;
		  }
		  .btn-buya {
  display: inline-block;
  padding:5px;
  border:none;
  color: #fff;
  text-align:center;
  font-size: 14px;
  text-transform:uppercase;
  font-family: 'Poppins', Open sans;
  font-weight: 800;
  background:#FFC700;
  margin-bottom:20px;
  width:300px;
  height:30px;
  border-radius:5px;
  
}
input[type=text]{
width:500px;
height:40px;
box-sizing:border-box;
border-radius:5px;
 text-transform:uppercase;
  font-family: 'Poppins', Open sans;
  font-weight: 800;
}

.btn-buya:hover {
  display: inline-block;
  padding:10px;
  border:none;
  color:#FFFFFF;
  text-align:center;
  font-size: 14px;
  text-transform:uppercase;
  font-family: 'Poppins', Open sans;
  font-weight: 800;
  background-color:#0000FF;
  margin-bottom:20px;
  width:300px;
  
  
}</style>
</head>

<body>

<?php
include "connect_to_mysqli.php";
session_start();
$dur=$_SESSION['ider'];id

     $sqli ="SELECT * from kod where code='$col' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  $id = $row["id"];   					
					  $name = $row['name'];
					  $user= $row['age'];
					  $email = $row['code'];
					  $all = $row['price'];
					  $tall = $row['date'];
					  $wee='lists/'.$row['filename'];
					  }
					
					   
					 ?>
 
		  <div style="margin-top:100px; color:#FFFFFF;">
		<div class="justify-content-center" align="center">
      <form method="post" action="form.php">
		<p><b>PERSONAL DETAILS</b></p>
		<div class="col-lg-4">
	<p><input type="text" class="form-control" name="name" placeholder="Your Name.." /></p>
	<p><input type="text" class="form-control" name="email" placeholder="Your Email.."/></p>
	<p><input type="text" class="form-control" name="mob" placeholder="Your Phone Number.." ></p>
	<input type="text" class="form-control" name="ran" value="<?php echo $col ; ?>"   /><br>
	<input type="text" class="form-control" name="dan" value="<?php echo $dur ; ?>"  /><br>
	<input type="text" class="form-control" name="can" value="<?php echo $dod ; ?>"  />
	<input type="text" class="form-control" name="man" value="<?php echo $god ; ?>"   />
	<input type="text" class="form-control" name="zan" value="<?php echo $tol ; ?>"  />
	<input type="text" class="form-control" name="fan" value="<?php echo $ol ; ?>"  />
    <input type="text" class="form-control" name="kan" value="<?php echo $dox ; ?>"  />
<input type="text" class="form-control" name="ola" value="<?php echo $mon ; ?>"   />



	<input type="text" name="dear" class="form-control" class="form-control" value="<?php echo $tall ; ?>"  />
	<p><input type="submit" value="SUBMIT" name="submit" class=" btn-buya"/></p>
	</div></form></div></div>
		  

 		  
		  
		
  
		  
		  
		  
		  
		  
		  </div>
		   
        </main>
        <!-- End #main -->

</body>
</html>
