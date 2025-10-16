
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="view.php">Dashboard</a> 
 <a href="view.php">Insert New Record</a> 

<h1>Update Record</h1>
<?php 
if(isset($_POST['dad'])){
$dak =$_POST['dad'];

include "connect_to_mysqli.php";

     $sqli = "SELECT * from kod where code='$dak' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
		               $id = $row["id"];   					
					  $nam = $row['name'];
					  $use= $row['age'];
					  $email = $row['code'];
					  $wee='lists/'.$row['filename'];
					 
					  }
					  }
					 ?>
<?php include"edi.php"; ?>

<form name="form" method="post" > 
<input type="text" name="user" value="<?php echo "$dak"; ?>" />
<p><input type="text" name="made" placeholder="food" value="<?php echo "$nam"; ?>"
 /></p>
<p><input type="text" name="age" placeholder="price"  value="<?php echo "$use"; ?>"
 /></p>

<?php global $dod; echo "$dod"; ?>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

</body>
</html>
