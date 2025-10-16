<?php
session_start(); 
?>

<?php include 'rod.php'; ?>
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
      display: block;
    }

    .container-wrapper {
      max-width: 1200px;
      width: 95%;
      margin: auto;
    }

    /* ---------- HEADER ---------- */
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

    /* ---------- CATEGORY NAV ---------- */
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

    /* ---------- MENU LIST ---------- */
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

    .menu-card img {
      width: 90px;
      height: 90px;
      object-fit: cover;
      border-radius: 10px;
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

    .menu-actions {
      display: flex;
      align-items: center;
      gap: 0.3rem;
    }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 768px) {
      .store-header {
        height: 180px;
      }
      .header-left h1 {
        font-size: 1.5rem;
      }
      .menu-card {
        flex-direction: row;
        text-align: left;
      }
      .menu-card img {
        width: 70px;
        height: 70px;
      }
    }

    @media (max-width: 576px) {
      .header-overlay {
        flex-direction: column;
        align-items: flex-start;
      }
      .btn-leave-review {
        margin-top: 0.8rem;
      }
      .menu-card {
        flex-direction: row;
        align-items: center;
      }
      .menu-actions {
        justify-content: center;
        margin-top: 0.5rem;
      }
    }
    
  </style>
</head>

<body>

  <!-- HEADER -->
  <div class="store-header">
    <div class="header-overlay">
      <div class="header-left">
        <h1>Crunchies food</h1>
        <div class="rating-stars">⭐⭐⭐⭐⭐</div>
      </div>
      <button class="btn-leave-review">+ Leave A Review</button>
    </div>
  </div>

  <div class="container-wrapper">
    <div class="container-fluid mt-3">
      <div class="row p-3">
        <!-- LEFT COLUMN -->
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
  $ca=2;
  $fa=3;
  $ga=4;
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
   
    $stmt->bind_param("ss", $dur, $ba); 

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

        if ($tom >= $ba && $bof==='active'  ) {
            echo "
         <div class='menu-actions'>
           <form action='del7.php' method='POST'>
          <input type='text' name='pox' value='$dur' hidden/>
              <input type='text' name='tox' value='$so' hidden/>
              <input type='text' name='cox' value='$name' hidden/>
            <button class='counter-btn btn-minus'>-</button>
       </form>
            </div>
            ";
        }
    

    }
    $res2 = $con->query("SELECT id FROM pak WHERE cod='$dur' AND item='$name' AND num='$ba' ORDER BY id DESC LIMIT 1");

    if ($row = $res2->fetch_assoc()) {
        $so1 = $row["id"];
        if ($bon2 >= $ba && $bon ==='active'  ) {
            echo "
    <div class='menu-actions'>
           <form action='del7.php' method='POST'>
          <input type='text' name='pox' value='$dur' hidden/>
              <input type='text' name='n2' value='$so1' hidden/>
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
              <input type='text' name='n4' value='$so2' hidden />
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
              <input type='text' name='n8' value='$so4' hidden/>
              <input type='text' name='n9' value='$name' hidden/>
            <button class='counter-btn btn-minus'>-</button>
       </form>
            </div>
            ";
        }
    

    }
     echo "
           <div class='menu-actions'>
     <form action='' method='POST'>
        <input type='hidden' name='nub' value='1' />
        <input type='hidden' name='pop' value='2' />
        <input type='hidden' name='cod' value='$dur' />
        <input type='hidden' name='code' value='$email' />
        <input type='hidden' name='dod' value='$name' />
       <input type='text' name='tod' value='$dear' hidden />
            <button class='counter-btn btn-plus'>+</button>
               </form>
          </div>
    
        
        
        
        
        
    
          </div>

          
         ";
}
?>

          </div>

          <h5 class="menu-title">Menu List</h5>

          <!-- MENU CARDS -->
          <?php 
            // your PHP menu code remains unchanged here...
          ?>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-lg-4 col-md-5 col-12">
          <div class="orders-panel">
            <h5>Your Orders</h5>
            <p class="text-muted small">Manage your meal selections</p>
            <!-- Your orders panel PHP here... -->
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
