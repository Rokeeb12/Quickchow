<?php
session_start(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crunchies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  body {
    background: #f8f9fa;
  align-items: center;    
    justify-content: center;
     display: block;
  }
   .container-wrapper {
    max-width: 1200px;
    width: 95%;                
    margin: auto;
  }


  .store-header {
    position: relative;
    width: 100%;
    height: 260px;
    background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0)),
                url("https://via.placeholder.com/1366x400") no-repeat center/cover;
    overflow: hidden;
  }

  .header-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: linear-gradient(to right, rgba(250,180,90,0.9), rgba(240,140,60,0.95));
    color: white;
    padding: 1.5rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  .header-left h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.3rem;
  }

  .header-left p {
    font-size: 0.95rem;
    margin-bottom: 0.3rem;
  }

  .rating-stars {
    font-size: 1rem;
    color: black;
  }

  .btn-leave-review {
    background: #f57c00;
    color: white;
    border: none;
    padding: 0.6rem 1rem;
    font-size: 0.9rem;
    border-radius: 6px;
    transition: 0.3s;
    margin-top: 10px;
  }

  .btn-leave-review:hover {
    background: #e76c00;
    transform: translateY(-2px);
  }
  /* ---------- Category Buttons ---------- */
  .category-nav {
    overflow-x: auto;
    white-space: nowrap;
    padding: 0.5rem 0;
  }
  .category-btn {
    border: none;
    background: #fff;
    border-radius: 25px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 0.4rem 1rem;
    margin-right: 0.5rem;
    font-weight: 500;
    transition: all 0.3s ease;
    flex-shrink: 0;
  }
  .category-btn:hover,
  .category-btn.active {
    background: #ff9800;
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.2);
  }

  /* ---------- Menu List ---------- */
  .menu-title {
    font-weight: 700;
    margin: 1rem 0;
  }

  .menu-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.05);
    padding: 0.75rem;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
  }
  .menu-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
  }
  .menu-card img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
  }
  .menu-info {
    flex: 1;
    margin-left: 0.8rem;
  }
  .menu-info h6 {
    margin: 0;
    font-weight: 600;
  }
  .menu-info p {
    color: #ff9800;
    font-weight: 600;
    margin: 0.3rem 0 0 0;
  }

  /* ---------- Counter Buttons ---------- */
  .menu-actions {
    display: flex;
    align-items: center;
    gap: 0.3rem;
  }
  .counter-btn {
    width: 30px;
    height: 30px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 6px;
    line-height: 1;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .btn-minus {
    border: 1px solid #f44336;
    color: #f44336;
    background: #fff;
  }
  .btn-minus:hover {
    background: #f44336;
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(244,67,54,0.3);
  }
  .btn-plus {
    background: #ff9800;
    color: #fff;
  }
  .btn-plus:hover {
    background: #e68a00;
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(255,152,0,0.3);
  }

  /* ---------- Orders Panel ---------- */
  .orders-panel {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.05);
    padding: 1rem;
  }
  .orders-panel h5 {
    font-weight: 700;
  }

  /* ---------- Top Buttons ---------- */
  .top-actions {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 0.5rem;
    margin-bottom: 1rem;
  }
  .btn-add-pack {
    background: #2f3640;
    color: white;
    font-weight: 500;
    border-radius: 10px;
    transition: all 0.3s ease;
  }
  .btn-add-pack:hover {
    background: #23272e;
    transform: translateY(-3px);
    color: white;
  }
  .btn-duplicate {
    background: #00b894;
    color: white;
    font-weight: 500;
    border-radius: 10px;
    transition: all 0.3s ease;
  }
  .btn-duplicate:hover {
    background: #019875;
    transform: translateY(-3px);
  }

  /* ---------- Order Packs ---------- */
  .order-pack {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    margin-bottom: 1rem;
    padding: 0.8rem 1rem;
    transition: all 0.3s ease;
  }
  .order-pack:hover {
    transform: translateY(-3px);
  }
  .order-pack span {
    font-weight: 500;
  }
  .order-pack .badge {
    font-weight: 500;
    font-size: 0.85rem;
    padding: 0.35rem 0.7rem;
    border-radius: 20px;
  }

  /* ---------- Pack 3–5 ---------- */
  .simple-pack {
    font-size: 0.95rem;
    font-weight: 500;
    color: #222;
    padding: 4px 0;
    cursor: pointer;
    transition: transform 0.2s ease;
  }
  .simple-pack:first-child::before {

    color: red;
  }
  .simple-pack:active {
    transform: translateX(-5px);
  }

  .remove-pack-link {
    float: right;
    color: red;
    font-size: 0.85rem;
    cursor: pointer;
    transition: transform 0.2s ease;
  }
  .remove-pack-link:active {
    transform: translateX(-5px);
  }


  .orders-panel .btn {
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.3s ease;
  }
  .btn-top {
    background: #4a5a70;
    color: white;
  }
  .btn-top:hover {
    transform: translateY(-3px);
  }
  .btn-empty {
    background: #000;
    color: white;
  }
  .btn-empty:hover {
    transform: translateY(-3px);
  }
  .btn-checkout {
    background: #1a73e8;
    color: white;
  }
  .btn-checkout:hover {
    background: #1558b0;
    transform: translateY(-3px);
  }

  .btn-remove-pack {
    background: #f44336;
    color: white;
    font-weight: 500;
    border-radius: 10px;
    transition: all 0.3s ease;
    width: 100%;
  }
  .btn-remove-pack:hover {
    background: #d32f2f;
    transform: translateY(-3px);
  }

 
  @media (max-width: 992px) {
    .row {
      flex-direction: column;
    }
    .col-lg-7, .col-lg-4 {
      width: 100%;
    }
    .orders-panel {
      margin-top: 2rem;
    }
  }


  </style>
</head>
<body>

  <!-- HEADER AT TOP -->
  <div class="store-header">
    <div class="header-overlay">
      <div class="header-left">
        <h1>Crunchies food</h1>
        <p></p>
        <div class="rating-stars">⭐⭐⭐⭐⭐</div>
      </div>
      <button class="btn-leave-review">+ Leave A Review</button>
    </div>
  </div>
<div class="container-wrapper">
  <div class="container-fluid mt-3">
    <div class="row p-3">
      <!-- Left Column -->
      <div class="col-lg-7 col-md-7 col-12">
        <div class="category-nav d-flex mb-3">
          
   <?php 


include "connect_to_mysqli.php";
  


$sqli = "SELECT * from kod ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					     					
					  $name = $row['name'];
					
					 
            

echo"
        <button class='category-btn active'>$name</button>
"
;
}
?>

           
        </div>

        <h5 class="menu-title">Menu List</h5>

        <!-- Menu Items -->
         <?php 
$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";

$x=2;
$ba=1;
$ta=2;
  $ca=3;
  $fa=4;
  $ga=5;
$stmt = $con->prepare("SELECT status FROM plan WHERE code = ?");

if ($stmt) {
   
    $stmt->bind_param("s", $dur); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bof = $row['status'];
  
    }
  }


  $stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $dur, $ta); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bon = $row['status'];
      $bon2 = $row['quantity'];
    }
  }

 $stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $dur, $ca); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $don = $row['status'];
      $don2 = $row['quantity'];
    }
  }
 $stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $dur, $fa); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $fon = $row['status'];
      $fon2 = $row['quantity'];
    }
  }
$stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $dur, $ga); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $gon = $row['status'];
      $gon2 = $row['quantity'];
    }
  }

$res = $con->query("SELECT SUM(quantity) AS total FROM enter WHERE code='$dur'");
$row = $res->fetch_assoc();
$tom = $row['total'] ?? 0;


$res = $con->query("SELECT SUM(quantity) AS total FROM pak WHERE cod = '$dur' AND num = '1' ");
$row = $res->fetch_assoc();
$tod = $row['total'] ?? 0;


$stmt = $con->prepare("SELECT * FROM kod ");


  
 

   
    $stmt->execute();

   
    $result = $stmt->get_result();


    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row['name'];
        $user = $row['age'];
        $email = $row['code'];
        $all = $row['price'];
        $wee = 'lists/' . $row['filename'];
    $wee2 =  $row['filename'];
     		
    $dear=date("Y-m-d");
    
    echo "
        <div class='menu-card'>
          <img src='$wee' />
          <div class='menu-info'>
            <h6>$name</h6>
            <p>₦$all</p>
          </div>
          ";
 
         
         
         
         
            $res2 = $con->query("SELECT id FROM enter WHERE code='$dur' AND item='$name' ORDER BY id DESC LIMIT 1");
if ($row = $res2->fetch_assoc()) {
        $so = $row["id"];

        if ($tom >= $ba ) {
            echo "
         <div class='menu-actions'>
           <form action='del7.php' method='POST'>
          <input type='text' name='pox' value='$dur' hidden/>
              <input type='text' name='tox' value='$so' hidden />
              <input type='text' name='cox' value='$name' hidden/>
                 
            <button class='counter-btn btn-minus'>-</button>
       </form>
            </div>
            ";
        }
    

    }
    $res2 = $con->query("SELECT id FROM pak WHERE cod='$dur' AND item='$name' AND num='$ta' ORDER BY id DESC LIMIT 1");

    if ($row = $res2->fetch_assoc()) {
        $so1 = $row["id"];
        if ($bon2 >= $ba && $bon ==='active'  ) {
            echo "
    <div class='menu-actions'>
           <form action='del7.php' method='POST'>
          <input type='text' name='pox' value='$dur' hidden/>
              <input type='text' name='n2' value='$so1' />
              <input type='text' name='n3' value='$name' hidden/>
            <button class='counter-btn btn-minus'>-</button>
       </form>
            </div>
            ";
        }
    

    }

     $res2 = $con->query("SELECT id FROM pak WHERE cod='$dur' AND item='$name' AND num ='$ca' ORDER BY id DESC LIMIT 1");

    if ($row = $res2->fetch_assoc()) {
        $so2 = $row["id"];
        if ($don2 >= $ba && $don ==='active'  ) {
            echo "
             <div class='menu-actions'>
           <form action='del7.php' method='POST'>
          <input type='text' name='pox' value='$dur' hidden/>
              <input type='text' name='n4' value='$so2' hidden  />
              <input type='text' name='n5' value='$name' hidden/>
            <button class='counter-btn btn-minus'>-</button>
       </form>
            </div>
            ";
        }
    

    }


        
  $res2 = $con->query("SELECT id FROM pak WHERE cod='$dur' AND item='$name' AND num ='$fa' ORDER BY id DESC LIMIT 1");

    if ($row = $res2->fetch_assoc()) {
        $so3 = $row["id"];
        if ($fon2 >= $ba && $fon ==='active'  ) {
            echo "

             <div class='menu-actions'>
           <form action='del7.php' method='POST'>
          <input type='text' name='pox' value='$dur' hidden/>
              <input type='text' name='n6' value='$so3' hidden />
              <input type='text' name='n7' value='$name' hidden/>
            <button class='counter-btn btn-minus'>-</button>
       </form>
            </div>
            ";
        }
    

    }


    $res2 = $con->query("SELECT id FROM pak WHERE cod='$dur' AND item='$name' AND num ='$ga' ORDER BY id DESC LIMIT 1");

    if ($row = $res2->fetch_assoc()) {
        $so4 = $row["id"];
        if ($gon2 >= $ba && $gon ==='active'  ) {
            echo "
            <div class='menu-actions'>
           <form action='del7.php' method='POST'>
          <input type='text' name='pox' value='$dur' hidden/>
              <input type='text' name='n8' value='$so4' hidden />
              <input type='text' name='n9' value='$name' hidden/>
            <button class='counter-btn btn-minus'>-</button>
       </form>
            </div>
            ";
        }
    

    }
     echo "
           <div class='menu-actions'>
     <form  class='sample_form'>
        <input type='hidden' name='nub' value='1' />
        <input type='hidden' name='pop' value='2'  />
        <input type='hidden' name='cod' value='$dur' />
        <input type='hidden' name='code' value='$email'/>
        <input type='hidden' name='dod' value='$name'/>
          <input type='hidden' name='vop' value='$wee'  />
       <input type='hidden' name='tod' value='$dear'  />

            <button type='submit'  class='counter-btn btn-plus'  >+</button>
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
$x=1;
     $sqli = "SELECT * from enter where code='$dur' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $sod = $row["item"];   					
					 
                    }
                    ?>
      <!-- Right Column: Orders Panel -->
      <div class="col-lg-4 col-md-5 col-12">
        <div class="orders-panel">
          <h5>Your Orders</h5>
          <p class="text-muted small">Manage your meal selections</p>

          <!-- Top Buttons -->
          <div class="top-actions">
             <form action='pak2.php' method='post'>
              <input type='number' value='1' max='15' class='form-control' name='cot' readonly hidden   />
                 <input type='text' value='pack' max='15' class='form-control' name='kot' readonly  hidden  />
                         
                    <input type='text' value='<?php echo $dur; ?>' max='15' class='form-control' name='fad' readonly   hidden />
            <button class="btn btn-sm btn-add-pack">+ Add Pack</button>
                  </form>
                  <form action='pak2.php' method='post'>
              <input type='number' value='1' max='15' class='form-control' name='cot' readonly hidden   />
                 <input type='text' value='pack' max='15' class='form-control' name='kot' readonly hidden   />
                         
                    <input type='text' value='<?php echo $dur; ?>' max='15' class='form-control' name='fad' readonly hidden    />
            <button class="btn btn-sm btn-duplicate">Duplicate</button>
                  </form>
          </div>
 <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";
$x=1;
     $sqli = "SELECT * from plan where code='$dur' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $sow = $row["status"];   					
					 
                    }
                    ?>
          <!-- Pack 1 & 2 -->
          <div class="order-pack">
            <div class="d-flex justify-content-between align-items-center">
              <span>
                <form action="pack4.php" method="post">   
            
          <input type='text' value="<?php echo $dur; ?>" class='form-control' name='pod' hidden    />
  <input type='text' value="<?php echo $sow; ?>" class='form-control' name='dod'  hidden  />

         
          <button style='border:none; background-color:white; color: '><b>Pack 1</b></button>
          </form>
        </span>
              <span class="badge bg-warning text-dark"><?php 
					 $sqli = "SELECT sum(quantity) from enter where code='$dur'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tot=$k;
					
					}  

						 ?><span id="packCount"><?php echo $tot; ?>items</span>
</span>
            </div>
          </div>

        

          <!-- Pack 3–5 Simple -->
        <?php 
                       



include "connect_to_mysqli.php";

$x=2;
$bop=15;
$cop='pack';
 
       
          


    

				  
					  

                    
       $sqli = "SELECT * from dat  where stat ='$dur'  ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $tod = $row["quantity"];  					
						 $toz = $row["code"];  	
      	 $top = $row["cod"];  
          	 $tov = $row["status"];  
            $tob = $row["poz"];
            
            
    
            if($tob!=''){
                      echo"
                      
          <div class='simple-pack'> <form action='pack3.php'  method='POST'>
          <input type='text' value=".$dur." class='form-control' name='cod' hidden    />
         <input type='text' value=".$toz." class='form-control' name='dod'  hidden  />
            <input type='text' value=".$top." class='form-control' name='pop' hidden />  
            
              <input type='text' value=".$tov." class='form-control' name='zop' hidden    />       
          <span><strong><button  style='border:none; background-color:white;'>$tob".$x++."</button>( $tod )
</form>
          </div>
    
                    ";
          } 
                }
              
         ?>
          <div class="simple-pack">
            <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";

ini_set('display_errors',0);

$pad='pack';

     $sqli = "SELECT poz from dat  where stat ='$dur' ORDER BY id DESC LIMIT 1 ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					    $sov = $row["poz"];   					
					 
                    }
                    if($sov === 'pack'){
                echo"
            <span class='remove-pack-link'> <form action='del9.php'  method='POST'>
                  
        <input type='text' value=".$dur." class='form-control' name='zod' hidden   />
    <center><button style='border:none; background-color:white;'>Remove pack</button></center></span>
    </form>             
         ";
                    }         
 ?>
          </div>

          <!-- Bottom Buttons -->
          <div class="d-flex justify-content-between gap-2 mt-5">
            <button class="btn btn-sm btn-top">↑ Top</button>
             <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";





              ?>
                <form action='faad4.php' method='post'>
                  <input type='text' value="<?php echo $dur; ?>" class='form-control' name='hot' hidden   />  
            <button class="btn btn-sm btn-empty">Empty Cart</button>
                  </form>
             <?php 

$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";





              ?>    
                
            <form action='faad2.php' method='post'>

               <input type='text' value="<?php echo $dur; ?>" class='form-control' name='hod' hidden   />
            <button class="btn btn-sm btn-checkout">Checkout →</button>
                  </form>
                    

                    
                
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('submit', '.sample_form', function (e) {
    e.preventDefault(); // stop reload

    let formData = $(this).serialize();

    $.ajax({
        url: 'rod5.php',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(res) {
            if (res.success) {
                // ✅ Update the badge immediately
                $('#packCount').text(res.total + ' items');
            }
            // no alert, no success message on page
        },
        error: function(xhr) {
            console.log('AJAX Error:', xhr.responseText);
        }
    });
});
</script>



</body>

</html>
