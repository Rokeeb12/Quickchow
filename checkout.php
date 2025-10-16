<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout | Crunchies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f9f9f9;
    }
    .navbar {
      background-color: #fff;
      border-bottom: 1px solid #eee;
      padding: 0.5rem 1rem;
    }
    .navbar-brand img {
      height: 40px;
    }
    .search-input {
      max-width: 450px;
      width: 100%;
    }
    .form-select {
      border: none;
      box-shadow: none;
      font-size: 14px;
    }
    .order-card img {
      width: 70px;
      height: 70px;
      object-fit: cover;
      border-radius: 8px;
    }
    .order-card {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 10px;
      padding: 1rem;
      margin-bottom: 1rem;
    }
    .summary-card {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 10px;
      padding: 1.5rem;
    }
    .btn-orange {
      background: orange;
      border: none;
      color: black;
    }

    /* Plus/Minus Button Design */
    .counter-btn {
      width: 28px;
      height: 28px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      transition: 0.3s;
      line-height: 1;
    }
    .btn-plus {
      background: #ff9800;
      color: white;
    }
    .btn-plus:hover {
      background: #e68900;
    }
    .btn-minus {
      border: 1px solid #b71c1c;
      color: #b71c1c;
      background: white;
      right:-5px;
      position: relative;
    }
    .btn-minus:hover {
      background: #b71c1c;
      color: white;
    }
    .item-badge {
      position: absolute;
      top: -12px;
      right: 27px;
      background: #6c757d;
      color: white;
      border-radius: 50%;
      width: 22px;
      height: 22px;
      font-size: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .counter-btn {
        width: 26px;
        height: 26px;
        font-size: 14px;
      }
      .item-badge {
        width: 20px;
        height: 20px;
        font-size: 11px;
        top: -10px;
        right: 20px;
      }
    }
  </style>
</head>

<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://cttaste.com/assets/img/logo.png" alt="Crunchies Logo">
    </a>

    

  
    
    </div>
  </div>
</nav>
<!-- END HEADER -->

   <?php
	  include "connect_to_mysqli.php";
	  
$dur=$_SESSION['ider'];


?>
<!-- MAIN CONTENT -->
<div class="container my-4">
  <div class="row g-4">

    <!-- LEFT COLUMN: Order Details -->
    <div class="col-lg-8">
      <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
             <form action='faad3.php' method='post'>
               <input type='hidden' value="<?php echo $dur; ?>" class='form-control' name='hod'    />

            <button class="btn btn-orange btn-sm me-2">Back</button>
  </form>
            <h5 class="fw-bold mb-0">Order Details</h5>
          </div>
        </div>
      </div>

      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h6 class="fw-bold mb-3">Pack 1</h6>

          <?php 

$dur=$_SESSION['ider'];



include "connect_to_mysqli.php";
$x=1;


				


$sqli = "SELECT * from enter where code='$dur'    
   
     ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
			 
            $p2 = $row["item"];   
         
          
          }



        

$sqli = "SELECT * from enter where code='$dur'    
   
     ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $n1 = $row["price"];   
            $n2 = $row["item"];   
             $n3 = $row["status"];  					
					$wee =  $row['file'];
          
 




          

$q1 = $con->prepare("SELECT SUM(quantity) AS item_qty
                             FROM enter WHERE code = ? AND item = ?");
        $q1->bind_param("ss", $dur, $n2);
        $q1->execute();
        $tot2 = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();



        

          

             if($n3==='pending'){

              echo"
          <div class='order-card d-flex align-items-center justify-content-between'>
            <div class='d-flex align-items-center'>
             <img src='$wee'/>
              <div class='ms-3'>
                <h6 class='fw-bold mb-1'>$n2</h6>
                <p class='text-muted mb-0'>₦$n1</p>
              </div>
            </div>
             
          
            <div class='position-relative'>
              <div class='d-flex align-items-center'>
                <form class='del_form me-2'>
                 
                  <button type='submit' class='counter-btn btn-minus'>-</button>
           

               <span class='item-badge'>$tot2</span>

               
                  <button type='submit' class='counter-btn btn-plus'>+</button>

                </form>
                           </div>
            </div>
          </div>
  ";
             }
            }
       
       
  ?>


<h6 class="fw-bold mb-3">Pack 2</h6>

          <?php 

$dur=$_SESSION['ider'];



include "connect_to_mysqli.php";
$x=1;


				





        

$sqli = "SELECT * from pak where cod='$dur'  AND num='2'    
   
     ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $n1 = $row["price"];   
            $n2 = $row["item"];   
             $n3 = $row["status"];  					
					$wee =  $row['file'];
          
 $p4=2;

$q1 = $con->prepare("SELECT SUM(quantity) AS item_qty
                             FROM pak WHERE cod = ? AND item = ? AND num =?");
        $q1->bind_param("sss", $dur, $n2,$p4);
        $q1->execute();
        $tot3 = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();


          





        

          

             if($n3==='pending'){

              echo"
          <div class='order-card d-flex align-items-center justify-content-between'>
            <div class='d-flex align-items-center'>
             <img src='$wee'/>
              <div class='ms-3'>
                <h6 class='fw-bold mb-1'>$n2</h6>
                <p class='text-muted mb-0'>₦$n1</p>
              </div>
            </div>
             
          
            <div class='position-relative'>
              <div class='d-flex align-items-center'>
                <form class='del_form me-2'>
                 
                  <button type='submit' class='counter-btn btn-minus'>-</button>
           

               <span class='item-badge'>$tot3</span>

               
                  <button type='submit' class='counter-btn btn-plus'>+</button>

                </form>
                           </div>
            </div>
          </div>
  ";
             }
            }
       
       
  ?>

  <h6 class="fw-bold mb-3">Pack 3</h6>

          <?php 

$dur=$_SESSION['ider'];



include "connect_to_mysqli.php";
$x=1;


				





        

$sqli = "SELECT * from pak where cod='$dur'  AND num='3'    
   
     ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $n1 = $row["price"];   
            $n2 = $row["item"];   
             $n3 = $row["status"];  					
					$wee =  $row['file'];
          
 $p5=3;

$q1 = $con->prepare("SELECT SUM(quantity) AS item_qty
                             FROM pak WHERE cod = ? AND item = ? AND num =?");
        $q1->bind_param("sss", $dur, $n2,$p5);
        $q1->execute();
        $tot4 = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();


          





        

          

             if($n3==='pending'){

              echo"
          <div class='order-card d-flex align-items-center justify-content-between'>
            <div class='d-flex align-items-center'>
             <img src='$wee'/>
              <div class='ms-3'>
                <h6 class='fw-bold mb-1'>$n2</h6>
                <p class='text-muted mb-0'>₦$n1</p>
              </div>
            </div>
             
          
            <div class='position-relative'>
              <div class='d-flex align-items-center'>
                <form class='del_form me-2'>
                 
                  <button type='submit' class='counter-btn btn-minus'>-</button>
           

               <span class='item-badge'>$tot4</span>

               
                  <button type='submit' class='counter-btn btn-plus'>+</button>

                </form>
                           </div>
            </div>
          </div>
  ";
             }
            }
       
       
  ?>


<h6 class="fw-bold mb-3">Pack 4</h6>

          <?php 

$dur=$_SESSION['ider'];



include "connect_to_mysqli.php";
$x=1;


				





        

$sqli = "SELECT * from pak where cod='$dur'  AND num='4'    
   
     ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $n1 = $row["price"];   
            $n2 = $row["item"];   
             $n3 = $row["status"];  					
					$wee =  $row['file'];
          
 $p6=4;

$q1 = $con->prepare("SELECT SUM(quantity) AS item_qty
                             FROM pak WHERE cod = ? AND item = ? AND num =?");
        $q1->bind_param("sss", $dur, $n2,$p6);
        $q1->execute();
        $tot5 = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();


          





        

          

             if($n3==='pending'){

              echo"
          <div class='order-card d-flex align-items-center justify-content-between'>
            <div class='d-flex align-items-center'>
             <img src='$wee'/>
              <div class='ms-3'>
                <h6 class='fw-bold mb-1'>$n2</h6>
                <p class='text-muted mb-0'>₦$n1</p>
              </div>
            </div>
             
          
            <div class='position-relative'>
              <div class='d-flex align-items-center'>
                <form class='del_form me-2'>
                 
                  <button type='submit' class='counter-btn btn-minus'>-</button>
           

               <span class='item-badge'>$tot5</span>

               
                  <button type='submit' class='counter-btn btn-plus'>+</button>

                </form>
                           </div>
            </div>
          </div>
  ";
             }
            }
       
       
  ?>

  
<h6 class="fw-bold mb-3">Pack 5</h6>

          <?php 

$dur=$_SESSION['ider'];



include "connect_to_mysqli.php";



				





        

$sqli = "SELECT * from pak where cod='$dur' AND num='5'    
   
     ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $n1 = $row["price"];   
            $n2 = $row["item"];   
             $n3 = $row["status"];  					
					$wee =  $row['file'];
          
 $p7=5;

$q1 = $con->prepare("SELECT SUM(quantity) AS item_qty
                             FROM pak WHERE cod = ? AND item = ? AND num =?");
        $q1->bind_param("sss", $dur, $n2,$p7);
        $q1->execute();
        $tot6 = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();


          





        

          

             if($n3==='pending'){

              echo"
          <div class='order-card d-flex align-items-center justify-content-between'>
            <div class='d-flex align-items-center'>
             <img src='$wee'/>
              <div class='ms-3'>
                <h6 class='fw-bold mb-1'>$n2</h6>
                <p class='text-muted mb-0'>₦$n1</p>
              </div>
            </div>
             
          
            <div class='position-relative'>
              <div class='d-flex align-items-center'>
                <form class='del_form me-2'>
                 
                  <button type='submit' class='counter-btn btn-minus'>-</button>
           

               <span class='item-badge'>$tot6</span>

               
                  <button type='submit' class='counter-btn btn-plus'>+</button>

                </form>
                           </div>
            </div>
          </div>
  ";
             }
            }
       
       
  ?>
        </div>
      </div>
    </div>




    
          <?php 

$dur=$_SESSION['ider'];



include "connect_to_mysqli.php";



$sqli = "SELECT * from total where code ='$dur'     
   
     ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $p3 = $row["tot"];   
            $p2 = $row["charges"];  
              $p4 = $row["fee"];  
            $p5 = $row["grand"]; 
              $p6= $row["pack"]; 
          }




?>




    <!-- RIGHT COLUMN: Summary -->
    <div class="col-lg-4">
      <div class="summary-card">
        <h5 class="fw-bold mb-3">Delivery Details</h5>

        <input type="text" class="form-control mb-2" placeholder="Name">
        <input type="text" class="form-control mb-2" placeholder="Phone Number">
        <select class="form-select mb-2">
          <option>Select Location</option>
          <option>iworoad</option>
          <option>Alakia</option>
        </select>
        <input type="text" class="form-control mb-3" placeholder="Delivery Address">

        <div class="d-flex justify-content-between">
          <span>Subtotal</span>
          <span>₦<?php echo $p3 ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <span>Delivery</span>
          <span>₦<?php echo $p6 ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <span>Pack Fee</span>
          <span>₦<?php echo $p4 ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <span>Charges</span>
          <span>₦<?php echo $p2 ?></span>
        </div>
        <hr>
        <div class="d-flex justify-content-between fw-bold">
          <span>Grand Total</span>
          <span>₦<?php echo $p5 ?></span>
        </div>

        <div class="form-check mt-3">
          <input class="form-check-input" type="checkbox" id="saveOrder">
          <label class="form-check-label" for="saveOrder">
            Save this order combination
          </label>
        </div>

        <div class="d-flex justify-content-between mt-3">
          <button class="btn btn-outline-danger">Cancel Order</button>
          <button class="btn btn-success">Proceed To Whatsapp</button>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
