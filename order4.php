<?php
session_start(); 
?>
<?php include 'rod.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cake City</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f9f9f9;
    }
    .product-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #fff;
      border-radius: 12px;
      padding: 10px;
      margin-bottom: 12px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      flex-wrap: wrap;
    }
    .product-info {
      display: flex;
      align-items: center;
      gap: 15px;
      flex: 1;
    }
    .product-info img {
      width: 60px;
      height: 60px;
      border-radius: 10px;
      object-fit: cover;
    }
    .price {
      font-weight: bold;
      color: #009444;
      margin-top: 3px;
    }
    .add-btn {
      background: #ff9800;
      color: white;
      border: none;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      font-weight: bold;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
      flex-shrink: 0;
    }
    .cart-box {
      background: white;
      border-radius: 15px;
      padding: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }
    .cart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 5px;
      margin-bottom: 10px;
    }
    .btn-add-pack {
      background-color: #0d6efd;
      color: white;
      border-radius: 8px;
      padding: 4px 12px;
      font-size: 14px;
    }
     .btn-add-packk {
      background-color: #0d6efd;
      color: white;
      border-radius: 8px;
      padding: 4px 12px;
      font-size: 14px;
    }
    .btn-duplicate {
      background-color: #198754;
      color: white;
      border-radius: 8px;
      padding: 4px 12px;
      font-size: 14px;
    }
    .badge-orange {
      background-color: #ff9800;
      border-radius: 15px;
      font-size: 12px;
      padding: 4px 8px;
    }
    .btn-top {
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    .btn-empty {
      background-color: #212529;
      color: white;
      font-size: 14px;
    }
    .btn-checkout {
      background-color: #0d6efd;
      color: white;
      font-size: 14px;
    }
    @media (max-width: 768px) {
      .cart-box {
        margin-top: 20px;
      }
      .product-info img {
        width: 50px;
        height: 50px;
      }
      .add-btn {
        width: 30px;
        height: 30px;
        font-size: 16px;
      }
     .add-btn2 {
        width: 30px;
        height: 30px;
        font-size:16px;
        position: relative;
        left: 50px;
      } 
      .bc{
        border:none;

      }

    
  </style>
</head>
<body>

<div class="container-fluid mt-4">
  <div class="row p-4">
 
    <div class="col-lg-6 col-md-6 col-12">
         <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";
$x=2;

				  
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
					   $dee='lists/'.$row['File1'];
					    $see='lists/'.$row['file2'];
						$fod=$row['status'];
			 
            
             
         
					
			$deat=date("Y-m-d");
		
					echo"
		
      <div class='product-card'>
        <div class='product-info'>
          <img src=".$wee." />
          <div>
            <h6 class='mb-0'>$name</h6>
            <div class='price'>₦$all</div>
          </div>
        </div>
        <div style='display:flex; gap:10px;'>
     
        <form action='del7.php'  method='POST'>
      
       
     
        <input type='text' value=".$dur." class='form-control' name='pox'  hidden  />
          <input type='text' value=".$name." class='form-control' name='tox'  hidden />

	<input type='text' value=".$email." class='form-control' name='cop'  hidden />
	
        <button class='add-btn' style='postion:relative; left:-90px;'>-</button>
        </form>
                  

        <form action='' method='post'>
       <input class='form-control' type='number' max=".$user." min='1' name='nub' value='1' readonly hidden />
       <input class='form-control' type='number'  name='pop' value='2' readonly hidden />
        <input type='text' value=".$dur." class='form-control' name='cod'  hidden   />
	<input type='text' value=".$email." class='form-control' name='code' hidden  />
	<input type='text' value=".$name." class='form-control' name='dod' hidden  />
	<input type='date' name='bod' value=".$deat."  class='form-control' hidden    />
        <button class='add-btn'>+</button>
        </form>
        </div>
      </div>
      ";
                    }
                
                
                
      ?>

      
    </div>
 <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";

     $sqli = "SELECT * from enter where code='$dur' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $sod = $row["item"];   					
					 
                    }
                    ?>
    <!-- RIGHT: Cart -->
    <div class="col-lg-3 col-md-5 col-12">
      <div class="cart-box">
        <div class="cart-header">
          <h6 class="mb-0">Your Orders</h6>
          <div>
      




            <form action="pack2.php" method="post">
              <input type="number" value="1" max='15' class='form-control' name='cot' readonly hidden   />
                 <input type="text" value="pack" max='15' class='form-control' name='kot' readonly hidden   />
            <button class="btn btn-add-pack">Add Pack</button><br>
                </form>
            <button class="btn btn-duplicate">Duplicate</button>
          </div>
        </div>
        <p class="text-muted mb-2">Manage your meal selections</p>
        <hr>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <span><strong>Pack 1</strong></span>
          <span class="badge-orange"><?php 
					 $sqli = "SELECT sum(quantity) from enter where code='$dur'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tot=$k;
					
					}  

						 ?><?php echo $tot; ?>items</span>
                         
        </div>
      
                       <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";

$x=2;
$bop=15;
$cop='pack';

            $sqli = "SELECT sum(num) from dat ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tok=$k;
					
                    }







				  
             $sqli = "SELECT * from dat ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $n1 = $row["id"];   					
					  $n2 = $row['poz'];
                    
    
                      echo"
                      
                               
         <div class='d-flex justify-content-between align-items-center mb-3 '>
     <form action=''  method='POST'>
          <input type='text' value=".$dur." class='form-control' name='cod'  hidden  />
          <span><strong><button  style='border:none; background-color:white;'  >$n2".$x++."</button>(0)</strong></span>
                
     </form>
   
       </div>
                    ";
                    
                }
         ?>
            
               
            <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";

$pad='pack';

     $sqli = "SELECT * from dat ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $sod = $row["poz"];   					
					 
                    }
                    if($sod == $pad)
                echo"
      <form action='del9.php'  method='POST'>
       <input type='text' value='pack' class='form-control' name='dod'  hidden  />
    <center><button  style='border:none; background-color:white;'>delete pack</button></center><br>  
              
    </form>             
         ";         
 ?>

        <div class="d-flex flex-wrap gap-2 justify-content-between">
          <button class="btn btn-top">↑ Top</button>
          <button class="btn btn-empty">Empty Cart</button>
          <button class="btn btn-checkout">Checkout →</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>