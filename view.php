<form method="post" action="mod.php" enctype="multipart/form-data" > 
<p><input type="text" name="name" placeholder="Enter Name"  /></p>
<p><input type="text" name="quan" placeholder="Enter quanity" /></p>
<p><input type="text" name="amount" placeholder="Enter price" /></p>
<p><input type="text" name="amon" placeholder="Pack price" /></p>

<p> UPLOAD FILE <input type="file" name="file1" /></p>
<p> UPLOAD FILE <input type="file" name="file2" /></p>
  <p> UPLOAD FILE <input type="file" name="file3" /></p>
  
						 



<p><input name="submit" type="submit" value="submit" /></p>
</form>
 <table border="1px" cellpadding="15" cellspacing="0" width="200px" height="10px">
<tr>
<td>S/N</td>
<td>food</td>
<td>quantity</td>
<td>price</td>
<td>Pack price</td>
<td>code</td>
<td>order</td>
<td>edit</td>
<td>delete</td>
<td>view order</td>
<td>payment proof</td>
<td>picture</td>


</tr><?php 
error_reporting(0);
$x=1;
session_start();
$dos=$_SESSION['code'];

include "connect_to_mysqli.php";

     $sqli = "SELECT * from kod  ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
										  $id = $row["id"];   					
					  $name = $row['name'];
					  $user= $row['age'];
					  $email = $row['code'];
					   $all = $row['price'];
					      $all2 = $row['pack'];
					  $wee='lists/'.$row['filename'];
					   $dee='lists/'.$row['file1'];
					    $see='lists/'.$row['file2'];
					  
			
					echo"
					
<tr>
<td> ".$x++." </td>
<td>".$name." </td>
<td> ".$user."</td>
<td> ".$all."</td>
<td> ".$all2."</td>
<td>".$email."</td>
<td><a href='picform.php'>edit picture</a></td>
<td><form method='post' action='edit.php'>
<input type='text' name='dad' value=".$email."  >
<button type='submit' name='' >edit</button>
</form>
</td>
<td><form method='post' action='delete.php'><input type='text' name='dat' value=".$id." hidden ><button type='submit' name='' onclick='deleteProfile()'>delete</button></form></td>
<td><form method='post' action='show.php'><input type='text' name='dat' value=".$id." hidden ><button type='submit' name='' >view orders</button></form></td>
<td><form method='post' action='los.php'><input type='text' name='dat' value=".$id." hidden ><button type='submit' name='' >view payments</button></form></td>
<td><img src=".$wee." /></td>



</tr>
"; 
					 
					 
					 
					  }
					  
					
					  
					
					 
	?>				  
					  
				      

</table>

<script type="text/javascript">
function confirmDel(anchor){
var conf= confirm("Are you sure you want to delete this record? ");
if (conf){
window.location= anchor.attr("href");
}


}

</script>
<script>
  //show a confirmation and redirect to the delete profile script
  function deleteProfile() {
    if (confirm("Do you really want to delete your records?")) {
        location.href = '/view.php';
    }
}
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#table").DataTable();
});
</script>
