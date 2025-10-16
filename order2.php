<?php
session_start(); 
?>
<?php include 'rod.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yummy Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>
<style type="text/css">
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
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Yummy<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
         <li><a href="#hero">available meals</a></li>
          <li><a href="#hero">sign up</a></li>
   
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  

   
<div class="container-fluid mt-5 py-5 px-5 p-5">
  <div class="row p-5 ">
 
    <div class="col-lg-8 col-md-8 col-12">
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
    <div class='product-card'>
      <div class='product-info'>
        <img src='$wee' />
        <div>
          <h6 class='mb-0'>$name</h6>
          <div class='price'>₦$all</div>
        </div>
      </div>
    ";

    $res2 = $con->query("SELECT id FROM enter WHERE code='$dur' AND item='$name' ORDER BY id DESC LIMIT 1");

    if ($row = $res2->fetch_assoc()) {
        $so = $row["id"];

        if ($tom >= $ba && $bof==='active'  ) {
            echo "
            <div style='display:flex; '> 
              <form action='del7.php' method='POST'>
                <input type='text' name='pox' value='$dur' hidden/>
                <input type='text' name='tox' value='$so' hidden/>
                   
                   <input type='text' name='cox' value='$name' hidden/>
                <button class='add-btn' style='position:relative; left:-90px;'>-</button>
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
            <div style='display:flex; '> 
              <form action='del7.php' method='POST'>
                <input type='text' name='pox' value='$dur' hidden/>
                <input type='text' name='n2' value='$so1' hidden />
                   
                   <input type='text' name='n3' value='$name' hidden/>
                <button class='add-btn' style='position:relative; left:-90px;'>-</button>
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
            <div style='display:flex; '> 
              <form action='del7.php' method='POST'>
                <input type='text' name='pox' value='$dur' hidden/>
                <input type='text' name='n4' value='$so2' hidden  />
                   
                   <input type='text' name='n5' value='$name' hidden />
                <button class='add-btn' style='position:relative; left:-90px;'>-</button>
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
            <div style='display:flex; '> 
              <form action='del7.php' method='POST'>
                <input type='text' name='pox' value='$dur' hidden/>
                <input type='text' name='n6' value='$so3' hidden  />
                   
                   <input type='text' name='n7' value='$name' hidden />
                <button class='add-btn' style='position:relative; left:-90px;'>-</button>
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
            <div style='display:flex; '> 
              <form action='del7.php' method='POST'>
                <input type='text' name='pox' value='$dur' hidden/>
                <input type='text' name='n8' value='$so4' hidden  />
                   
                   <input type='text' name='n9' value='$name' hidden />
                <button class='add-btn' style='position:relative; left:-90px;'>-</button>
              </form>
            </div>
            ";
        }
    
      }  
    
    echo "
    <div style='display:flex; '>
      <form action='' method='POST'>
        <input type='hidden' name='nub' value='1' />
        <input type='hidden' name='pop' value='2' />
        <input type='hidden' name='cod' value='$dur' />
        <input type='hidden' name='code' value='$email' />
        <input type='hidden' name='dod' value='$name' />
       <input type='text' name='tod' value='$dear' hidden />
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
$x=1;
     $sqli = "SELECT * from enter where code='$dur' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $sod = $row["item"];   					
					 
                    }
                    ?>
    <!-- RIGHT: Cart -->
    <div class="col-lg-4 col-md-4 col-12">
      <div class="cart-box">
        <div class="cart-header">
          <h6 class="mb-0">Your Orders</h6>
          <div>
      


 
            <form action='pak2.php' method='post'>
              <input type='number' value='1' max='15' class='form-control' name='cot' readonly hidden   />
                 <input type='text' value='pack' max='15' class='form-control' name='kot' readonly hidden   />
                         
                    <input type='text' value='<?php echo $dur; ?>' max='15' class='form-control' name='fad' readonly hidden    />
            <button class='btn btn-add-pack'>Add Pack</button><br>
                </form>
               
            <button class="btn btn-duplicate">Duplicate</button>
          </div>
        </div>
        <p class="text-muted mb-2">Manage your meal selections</p>
        <hr>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <span><strong><form action="pack4.php" method="post">   
          <input type='text' value="<?php echo $dur; ?>" class='form-control' name='pod' hidden    />
 
         
          <button style='border:none; background-color:white; color: '><b>Pack 1</b></button>
          </form>
          </strong></span>
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
                       



include "connect_to_mysqli.php";

$x=2;
$bop=15;
$cop='pack';
 
       
          


    

				  
             $sqli = "SELECT * from dat where stat='$dur' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $n1 = $row["id"];   					
					  $n2 = $row['poz'];
                    
       $sqli = "SELECT * from dat  where stat ='$dur' ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $tod = $row["quantity"];  					
						 $toz = $row["code"];  	
      	 $top = $row["cod"];  
          	 $tov = $row["status"];  
            $tob = $row["poz"];

            if($tob==='pack'){
                      echo"
                      
                             
         <div class='d-flex justify-content-between align-items-center mb-3 '>
     <form action='pack3.php'  method='POST'>
          <input type='text' value=".$dur." class='form-control' name='cod' hidden   />
         <input type='text' value=".$toz." class='form-control' name='dod'  hidden  />
            <input type='text' value=".$top." class='form-control' name='pop' hidden    />  
              <input type='text' value=".$tov." class='form-control' name='zop' hidden    />       
          <span><strong><button  style='border:none; background-color:white;'>$tob".$x++."</button>($tod)</strong></span>
                
     </form>
   
       </div>
                    ";
          } 
                }
              }
         ?>
            
               
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
      <form action='del9.php'  method='POST'>
       <input type='text' value='pack' class='form-control' name='dod'  hidden  />
        <input type='text' value=".$dur." class='form-control' name='zod' hidden   />
    <center><button  style='border:none; background-color:white;'>delete pack</button></center><br>  
              
    </form>             
         ";
                    }         
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

    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

   
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>