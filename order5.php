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
#packCountt::before {
  content: "(";
}
#packCountt::after {
  content: ")";
}
#packCounttt::before {
  content: "(";
}
#packCounttt::after {
  content: ")";
}
#packCountttt::before {
  content: "(";
}
#packCountttt::after {
  content: ")";
}
#packCounttttt::before {
  content: "(";
}
#packCounttttt::after {
  content: ")";
}









.btn-wrapper {
  position: relative;
  display: inline-block;
}

.btn-wrapper .counter-btn.btn-plus {
  width: 34px;
  height: 34px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 6px;
  background: #ff9800;
  color: #fff;
  border: none;
  transition: 0.3s;
}

.btn-wrapper .counter-btn.btn-plus:hover {
  background: #e68a00;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(255,152,0,0.3);
}

.btn-wrapper .badge {
  position: absolute;
  top: -10px;
  right: 20px;
  background-color: #666;
  color: #fff;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 12px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

/* Responsive adjustment for small screens */
@media (max-width: 600px) {
  .btn-wrapper .counter-btn.btn-plus {
    width: 30px;
    height: 30px;
    font-size: 15px;
  }

  .btn-wrapper .badge {
    width: 20px;
    height: 20px;
    font-size: 11px;
    top: -8px;
    right: 20px;
  }
}


.minus-container {
  position: relative;
  display: inline-block;
}

.minus-container .counter-btn.btn-minus {
  width: 34px;           /* same width as + button */
  height: 34px;          /* same height as + button */
  font-size: 16px;       /* same font size */
  font-weight: 600;
  border-radius: 6px;
  border: 1px solid #f44336;
  color: #f44336;
  background: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.minus-container .counter-btn.btn-minus:hover {
  background: #f44336;
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(244,67,54,0.3);
}

/* Responsive */
@media (max-width: 600px) {
  .minus-container .counter-btn.btn-minus {
    width: 30px;
    height: 30px;
    font-size: 15px;
  }
}

.minus-containerr {
  position: relative;
  display: inline-block;
}

.minus-containerr .counter-btn.btn-minus {
  width: 34px;           /* same width as + button */
  height: 34px;          /* same height as + button */
  font-size: 16px;       /* same font size */
  font-weight: 600;
  border-radius: 6px;
  border: 1px solid #f44336;
  color: #f44336;
  background: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.minus-containerr .counter-btn.btn-minus:hover {
  background: #f44336;
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(244,67,54,0.3);
}

/* Responsive */
@media (max-width: 600px) {
  .minus-containerr .counter-btn.btn-minus {
    width: 30px;
    height: 30px;
    font-size: 15px;
  }
}


.minus-containerr3 {
  position: relative;
  display: inline-block;
}

.minus-containerr3 .counter-btn.btn-minus {
  width: 34px;           /* same width as + button */
  height: 34px;          /* same height as + button */
  font-size: 16px;       /* same font size */
  font-weight: 600;
  border-radius: 6px;
  border: 1px solid #f44336;
  color: #f44336;
  background: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.minus-containerr3 .counter-btn.btn-minus:hover {
  background: #f44336;
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(244,67,54,0.3);
}

/* Responsive */
@media (max-width: 600px) {
  .minus-containerr3 .counter-btn.btn-minus {
    width: 30px;
    height: 30px;
    font-size: 15px;
  }
}

.minus-containerr4 {
  position: relative;
  display: inline-block;
}

.minus-containerr4 .counter-btn.btn-minus {
  width: 34px;           /* same width as + button */
  height: 34px;          /* same height as + button */
  font-size: 16px;       /* same font size */
  font-weight: 600;
  border-radius: 6px;
  border: 1px solid #f44336;
  color: #f44336;
  background: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.minus-containerr4 .counter-btn.btn-minus:hover {
  background: #f44336;
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(244,67,54,0.3);
}

/* Responsive */
@media (max-width: 600px) {
  .minus-containerr34 .counter-btn.btn-minus {
    width: 30px;
    height: 30px;
    font-size: 15px;
  }
}



.minus-containerr5 {
  position: relative;
  display: inline-block;
}

.minus-containerr5 .counter-btn.btn-minus {
  width: 34px;           /* same width as + button */
  height: 34px;          /* same height as + button */
  font-size: 16px;       /* same font size */
  font-weight: 600;
  border-radius: 6px;
  border: 1px solid #f44336;
  color: #f44336;
  background: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.minus-containerr5 .counter-btn.btn-minus:hover {
  background: #f44336;
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(244,67,54,0.3);
}

/* Responsive */
@media (max-width: 600px) {
  .minus-containerr5 .counter-btn.btn-minus {
    width: 30px;
    height: 30px;
    font-size: 15px;
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

         <?php 
$dur=$_SESSION['ider'];

include "connect_to_mysqli.php";

$x=2;
$ba=0;
$ta=2;
  $ca=3;
  $fa=4;
  $ga=5;
  $lo=0;







 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM enter WHERE  code = ? ");
$stmt->bind_param("s", $dur);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();


 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$ta);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tom = $row['total_quantity'] ?? 0; 
$stmt->close();



 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$ca);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$ton = $row['total_quantity'] ?? 0; 
$stmt->close();


 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$fa);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$toj = $row['total_quantity'] ?? 0; 
$stmt->close();


 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$ga);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$toj2 = $row['total_quantity'] ?? 0; 
$stmt->close();







$dam='burger';
  

 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM enter WHERE  code = ? AND item=? ");
$stmt->bind_param("ss", $dur,$nam);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot2 = $row['total_quantity'] ?? 0; 
$stmt->close();


 $stmt = $con->prepare("SELECT * FROM plan WHERE code = ?  ");

if ($stmt) {
   
    $stmt->bind_param("s", $dur); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bon = $row['status'];
    
    }
  }
 $stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("si", $dur, $ta); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $don = $row['status'];
      $don2 = $row['quantity'];
    }
  }
 $stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("si", $dur, $ca); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $pon = $row['status'];
    
    }
  }


   $stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("si", $dur, $fa); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $poj = $row['status'];
    
    }
  }

  
   $stmt = $con->prepare("SELECT * FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("si", $dur, $ga); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $poj2 = $row['status'];
    
    }
  }

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
    <div class='menu-card' data-item='$name'>
          <img src='$wee' />
          <div class='menu-info'>
            <h6>$name</h6>
            <p>₦$all</p>
          </div>
        ";
           
 echo "
  <div class='menu-actions'>
      <div class='minus-container'>
";  


$res2 = $con->query("SELECT id FROM enter WHERE code='$dur' AND item='$name' ORDER BY id DESC LIMIT 1");

if ($row = $res2->fetch_assoc()) {
    $so = $row["id"];


    if ($tot > 0 && $bon ==='active' ) {
        echo "
          <form class='del_form'>
              <input type='hidden' name='id' value='$so' />
              <input type='hidden' name='code' value='$dur' />
              <input type='hidden' name='item' value='$name' />
               <input type='hidden' name='status' value='$bon' />
              <button type='submit' class='counter-btn btn-minus'>-</button>
          </form>
        ";
    }
}

echo "
      </div> 
  </div>     
";
           
      

   
   echo "
  <div class='menu-actions'>

      <div class='minus-containerr'>
";  
    
   


$res2 = $con->query("SELECT id FROM pak WHERE cod ='$dur' AND item='$name' and num='$ta'  ORDER BY id DESC LIMIT 1");

if ($row = $res2->fetch_assoc()) {
    $so1 = $row["id"];


    if ($tom > 0 && $don ==='active' ) {
        echo "
       
          <form class='del_form2'>
              <input type='hidden' name='id' value='$so1' />
              <input type='hidden' name='code' value='$dur' />
              <input type='hidden' name='item' value='$name' />
              <button type='submit' class='counter-btn btn-minus'>-</button>
          </form>
       
  
        ";
    }
}

echo "
      </div> 
  </div>     
";
    
    

   
   echo "
  <div class='menu-actions'>

      <div class='minus-containerr3'>
";  


$res2 = $con->query("SELECT id FROM pak WHERE cod ='$dur' AND item='$name' and num='$ca'  ORDER BY id DESC LIMIT 1");

if ($row = $res2->fetch_assoc()) {
    $so2 = $row["id"];


    if ($ton > 0 && $pon ==='active' ) {
        echo "
          <form class='del_form3'>
              <input type='hidden' name='id' value='$so2' />
              <input type='hidden' name='code' value='$dur' />
              <input type='hidden' name='item' value='$name' />
              <button type='submit' class='counter-btn btn-minus'>-</button>
          </form>
        ";
    }
}

echo "
      </div> 
  </div>     
";

     echo "
  <div class='menu-actions'>

      <div class='minus-containerr4'>
";  


$res2 = $con->query("SELECT id FROM pak WHERE cod ='$dur' AND item='$name' and num='$fa'  ORDER BY id DESC LIMIT 1");

if ($row = $res2->fetch_assoc()) {
    $so3 = $row["id"];


    if ($toj > 0 && $poj ==='active' ) {
        echo "
          <form class='del_form4'>
              <input type='hidden' name='id' value='$so3' />
              <input type='hidden' name='code' value='$dur' />
              <input type='hidden' name='item' value='$name' />
              <button type='submit' class='counter-btn btn-minus'>-</button>
          </form>
        ";
    }
}

echo "
      </div> 
  </div>     
";


 echo "
  <div class='menu-actions'>

      <div class='minus-containerr5'>
";  


$res2 = $con->query("SELECT id FROM pak WHERE cod ='$dur' AND item='$name' and num='$ga'  ORDER BY id DESC LIMIT 1");

if ($row = $res2->fetch_assoc()) {
    $so4 = $row["id"];


    if ($toj2 > 0 && $poj2 ==='active' ) {
        echo "
          <form class='del_form5'>
              <input type='hidden' name='id' value='$so4' />
              <input type='hidden' name='code' value='$dur' />
              <input type='hidden' name='item' value='$name' />
              <button type='submit' class='counter-btn btn-minus'>-</button>
          </form>
        ";
    }
}

echo "
      </div> 
  </div>     
";


    



 $q1 = $con->prepare("SELECT SUM(quantity) AS item_qty
                             FROM enter WHERE code = ? AND item = ?");
        $q1->bind_param("ss", $dur, $name);
        $q1->execute();
        $tot2 = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();



$q3= $con->prepare("SELECT SUM(quantity) AS item_qtyy FROM pak WHERE cod = ? AND num = ? AND item=? ");
        $q3->bind_param("sis", $dur, $ta,$name);
        $q3->execute();
        $tot3 = (int)$q3->get_result()->fetch_assoc()['item_qtyy'];
        $q3->close();

        







  
   
    echo"
     <div class='menu-actions'>
     <form  class='sample_form'>
        <input type='hidden' name='nub' value='1' />
        <input type='hidden' name='pop' value='$id'  />
        <input type='hidden' name='cod' value='$dur' />
        <input type='hidden' name='code' value='$email'/>
        <input type='hidden' name='dod' value='$name'/>
          <input type='hidden' name='vop' value='$wee'  />
       <input type='hidden' name='tod' value='$dear'  />
  <div class='btn-wrapper'>
  

      <button type='submit' class='counter-btn btn-plus'>+</button>
      <span  class='badge item-badge'>0</span>
    
    </div>

    
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
  
      <div class="col-lg-4 col-md-5 col-12">
        <div class="orders-panel">
          <h5>Your Orders</h5>
          <p class="text-muted small">Manage your meal selections</p>

   
          <div class="top-actions">
             <form action="pak2.php" method="post">
              <input type='number' value='1' max='15' class='form-control' name='cot' readonly hidden   />
                 <input type='text' value='pack' max='15' class='form-control' name='kot' readonly  hidden  />
                         
                    <input type='text' value='<?php echo $dur; ?>' max='15' class='form-control' name='fad' readonly  hidden  />
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
  <input type='text' value="<?php echo $sow; ?>" class='form-control' name='dod' hidden  />

         
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

       
					  
					  
					
            
       <?php

  echo"
  <div class='minus-containerp'></div>
";
         
?>

  
        <?php 
                       



include "connect_to_mysqli.php";

$xo=2;
$co=3;
$mo=4;
$no=5;
$bop=15;
$cop='pack';
 
       
          


 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$xo);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tom = $row['total_quantity'] ?? 0; 
$stmt->close();

				  

 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$co);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tox = $row['total_quantity'] ?? 0; 
$stmt->close();



 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$mo);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tol = $row['total_quantity'] ?? 0; 
$stmt->close();
					  
					  

 $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE  cod = ? AND num=?");
$stmt->bind_param("si", $dur,$no);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$toj = $row['total_quantity'] ?? 0; 
$stmt->close();
					  

                    
       $sqli = "SELECT * from dat  where stat ='$dur'   ";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  
					  
					 $tod = $row["quantity"];  					
				
      	 $top = $row["cod"];  
          	 $tov = $row["status"];  
            $tob = $row["poz"];
            
            
    
            if($tob!='' && $top==='2' ){
                      echo"
                    
                   
           <div class='simple-pack'> <form action='pack3.php' method='post'>
          <input type='hidden' value=".$dur." class='form-control' name='cod'   />
   
            <input type='hidden' value=".$top." class='form-control' name='pop' />  
            
              <input type='hidden' value=".$tov." class='form-control' name='zop'   />       
          <span><strong><button  style='border:none; background-color:white;'>$tob".$xo++."</button>     <span id='packCountt'>$tom</span>
         
</form>
</div>


      
    
                    ";

          } 

            if($tob!='' && $top==='3' ){
                      echo"
                        
          <div class='simple-pack'> <form action='pack3.php' method='post'>
          <input type='hidden' value=".$dur." class='form-control' name='cod'   />
   
            <input type='hidden' value=".$top." class='form-control' name='pop' />  
            
              <input type='hidden' value=".$tov." class='form-control' name='zop'   />       
          <span><strong><button  style='border:none; background-color:white;'>$tob".$xo++."</button>     <span id='packCounttt'>$tox</span>
         
</form>

          </div>

                    ";
          } 


          
            if($tob!='' && $top==='4' ){
                      echo"
                      
          <div class='simple-pack'> <form action='pack3.php' method='post'>
          <input type='hidden' value=".$dur." class='form-control' name='cod'    />
   
            <input type='hidden' value=".$top." class='form-control' name='pop' />  
            
              <input type='hidden' value=".$tov." class='form-control' name='zop'   />       
          <span><strong><button  style='border:none; background-color:white;'>$tob".$xo++."</button>     <span id='packCountttt'>$tol</span>
         
</form>

          </div>
    
                    ";
          } 


          
            if($tob!='' && $top==='5' ){
                      echo"
                      
          <div class='simple-pack'> <form action='pack3.php' method='post'>
          <input type='hidden' value=".$dur." class='form-control' name='cod'     />
   
            <input type='hidden' value=".$top." class='form-control' name='pop' />  
            
              <input type='hidden' value=".$tov." class='form-control' name='zop'   />       
          <span><strong><button  style='border:none; background-color:white;'>$tob".$xo++."</button>     <span id='packCounttttt'>$toj</span>
         
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
$(function () {


  $(document).on('submit', '.sample_form', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

    $.ajax({
      url: 'rod5.php',
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('PLUS response', res);

        if (res.success) {
    
          $('#packCount').text(res.total + ' items');

   const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantity);

      
        if (res.item_quantity > 0) {
          $badge.show();
        } else {
          $badge.hide();
        }

      
          if (res.item_quantity > 0  ) {
            const minusHtml = `
              <form class="del_form">
                  <input type="hidden" name="id" value="${res.item_quantity}">
                  <input type="hidden" name="status" value="${res.item_verify}">
                  <input type="hidden" name="code" value="${res.item_code}">
                  <input type="hidden" name="item" value="${res.item_name}">
                  <button type="submit" class="counter-btn btn-minus">-</button>
              </form>`;


              
            $card.find('.minus-container').html(minusHtml);
          }
        } else {
          console.log('Add failed:', res.message || res);
        }
        


        
      },
      
      error: function (xhr) {
        console.log('AJAX add error:', xhr.responseText);
      }
    });
  });


  $(document).on('submit', '.del_form', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

console.log('Data sent:', $form.serialize());


    $.ajax({
      url: 'del2.php',    
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('MINUS response', res);

        if (res.success) {
        
          $('#packCount').text(res.total + ' items');

           const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantity);

      
        if (res.item_quantity <= 0) {
          $badge.hide();
        } else {
          $badge.show();
        }


        if ( res.item_quantity <= 0 ) {
      
          $card.find('.minus-container').empty();
        } else {
         
          const minusHtml = `
            <form class="del_form">
                <input type="hidden" name="id" value="${res.item_quantity}">
                 <input type="hidden" name="status" value="${res.item_verify}">
                <input type="hidden" name="code" value="${res.item_code}">
                <input type="hidden" name="item" value="${res.item_name}">
                <button type="submit" class="counter-btn btn-minus">-</button>
            </form>`;
          $card.find('.minus-container').html(minusHtml);
        }
      } else {
          console.log('Delete failed:', res.message || res);
        }
      },
      error: function (xhr) {
        console.log('AJAX delete error:', xhr.responseText);
      }
    });
  });

});




</script>

<script>


  $(function () {

 $(document).on('submit', '.sample_form', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

    $.ajax({
      url: 'rod7.php',
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
          if (res.success) {
    
          $('#packCountt').text(res.total );
      
         const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);

      
        if (res.item_quantityy > 0) {
          $badge.show();
        } else {
          $badge.hide();
        }
      
          if (res.item_quantity> 0  ) {
            const minusHtml = `
              <form class="del_form2">
                  <input type="hidden" name="id" value="${res.item_id}">
                  <input type="hidden" name="status" value="${res.item_status}">
                <input type="hidden" name="code" value="${res.item_code}">
                  <input type="hidden" name="item" value="${res.item_name}">
                  <button type="submit" class="counter-btn btn-minus">-</button>
              </form>`;


              
            $card.find('.minus-containerr').html(minusHtml);
          }
        } else {
          console.log('Add failed:', res.message || res);
        }
        


        
      },
      
      error: function (xhr) {
        console.log('AJAX add error:', xhr.responseText);
      }
    });
  });


$(document).on('submit', '.del_form2', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

console.log('Data sent:', $form.serialize());


    $.ajax({
      url: 'delp2.php',    
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('MINUS response', res);

        if (res.success) {
        
          $('#packCountt').text(res.total);

        const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);

      
        if (res.item_quantityy <= 0) {
          $badge.hide();
        } else {
          $badge.show();
        }

    
        if (res.item_quantity <= 0 ) {
      
          $card.find('.minus-containerr').empty();
        } else {
         
          const minusHtml = `
            <form class="del_form2">
                <input type="hidden" name="id" value="${res.item_id}">
                <input type="hidden" name="status" value="${res.item_status}">
                <input type="hidden" name="code" value="${res.item_code}">
                <input type="hidden" name="item" value="${res.item_name}">
                <button type="submit" class="counter-btn btn-minus">-</button>
            </form>`;
          $card.find('.minus-containerr').html(minusHtml);
        }
      } else {
          console.log('Delete failed:', res.message || res);
        }
      },
      error: function (xhr) {
        console.log('AJAX delete error:', xhr.responseText);
      }
    });
  });

});


</script>

<script>


  $(function () {

 $(document).on('submit', '.sample_form', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

    $.ajax({
      url: 'rod8.php',
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
          if (res.success) {
    
          $('#packCounttt').text(res.total );

      const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);


        if (res.item_quantityy > 0) {
          $badge.show();
        } else {
          $badge.hide();
        }




          if (res.item_quantity  > 0 ) {
            const minusHtml = `
              <form class="del_form3">
                  <input type="hidden" name="id" value="${res.item_id}">
                <input type="hidden" name="code" value="${res.item_code}">
                  <input type="hidden" name="item" value="${res.item_name}">
                  <button type="submit" class="counter-btn btn-minus">-</button>
              </form>`;


              
            $card.find('.minus-containerr3').html(minusHtml);
          }
        } else {
          console.log('Add failed:', res.message || res);
        }
        


        
      },
      
      error: function (xhr) {
        console.log('AJAX add error:', xhr.responseText);
      }
    });
  });


$(document).on('submit', '.del_form3', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

console.log('Data sent:', $form.serialize());


    $.ajax({
      url: 'delp3.php',    
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('MINUS response', res);

        if (res.success) {
        
          $('#packCounttt').text(res.total);
      
const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);

        if (res.item_quantityy <= 0) {
          $badge.hide();
        } else {
          $badge.show();
        }


        if (res.item_quantity <= 0 ) {
      
          $card.find('.minus-containerr3').empty();
        } else {
         
          const minusHtml = `
            <form class="del_form3">
                <input type="hidden" name="id" value="${res.item_id}">
                <input type="hidden" name="code" value="${res.item_code}">
                <input type="hidden" name="item" value="${res.item_name}">
                <button type="submit" class="counter-btn btn-minus">-</button>
            </form>`;
          $card.find('.minus-containerr3').html(minusHtml);
        }
      } else {
          console.log('Delete failed:', res.message || res);
        }
      },
      error: function (xhr) {
        console.log('AJAX delete error:', xhr.responseText);
      }
    });
  });

});


</script>



<script>


  $(function () {

 $(document).on('submit', '.sample_form', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

    $.ajax({
      url: 'rod6.php',
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
          if (res.success) {
    
          $('#packCountttt').text(res.total );



  const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);


        if (res.item_quantityy > 0) {
          $badge.show();
        } else {
          $badge.hide();
        }
      
          if (res.item_quantity  > 0 ) {
            const minusHtml = `
              <form class="del_form4">
                  <input type="hidden" name="id" value="${res.item_id}">
                <input type="hidden" name="code" value="${res.item_code}">
                  <input type="hidden" name="item" value="${res.item_name}">
                  <button type="submit" class="counter-btn btn-minus">-</button>
              </form>`;


              
            $card.find('.minus-containerr4').html(minusHtml);
          }
        } else {
          console.log('Add failed:', res.message || res);
        }
        


        
      },
      
      error: function (xhr) {
        console.log('AJAX add error:', xhr.responseText);
      }
    });
  });


$(document).on('submit', '.del_form4', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

console.log('Data sent:', $form.serialize());


    $.ajax({
      url: 'delp4.php',    
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('MINUS response', res);

        if (res.success) {
        
          $('#packCountttt').text(res.total);
      

            const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);


        if (res.item_quantityy <= 0) {
          $badge.hide();
        } else {
          $badge.show();
        }
        if (res.item_quantity <= 0 ) {
      
          $card.find('.minus-containerr4').empty();
        } else {
         
          const minusHtml = `
            <form class="del_form4">
                <input type="hidden" name="id" value="${res.item_id}">
                <input type="hidden" name="code" value="${res.item_code}">
                <input type="hidden" name="item" value="${res.item_name}">
                <button type="submit" class="counter-btn btn-minus">-</button>
            </form>`;
          $card.find('.minus-containerr4').html(minusHtml);
        }
      } else {
          console.log('Delete failed:', res.message || res);
        }
      },
      error: function (xhr) {
        console.log('AJAX delete error:', xhr.responseText);
      }
    });
  });

});


</script>



<script>


  $(function () {

 $(document).on('submit', '.sample_form', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

    $.ajax({
      url: 'rod9.php',
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
          if (res.success) {
    
          $('#packCounttttt').text(res.total );

      


  const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);


        if (res.item_quantityy > 0) {
          $badge.show();
        } else {
          $badge.hide();
        }




          if (res.item_quantity  > 0 ) {
            const minusHtml = `
              <form class="del_form5">
                  <input type="hidden" name="id" value="${res.item_id}">
                <input type="hidden" name="code" value="${res.item_code}">
                  <input type="hidden" name="item" value="${res.item_name}">
                  <button type="submit" class="counter-btn btn-minus">-</button>
              </form>`;


              
            $card.find('.minus-containerr5').html(minusHtml);
          }
        } else {
          console.log('Add failed:', res.message || res);
        }
        


        
      },
      
      error: function (xhr) {
        console.log('AJAX add error:', xhr.responseText);
      }
    });
  });


$(document).on('submit', '.del_form5', function (e) {
    e.preventDefault();
    const $form = $(this);
    const $card = $form.closest('.menu-card');

console.log('Data sent:', $form.serialize());


    $.ajax({
      url: 'delp5.php',    
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('MINUS response', res);

        if (res.success) {
        
          $('#packCounttttt').text(res.total);




          

  const $badge = $card.find('.item-badge');
        $badge.text(res.item_quantityy);


        if (res.item_quantityy <= 0) {
          $badge.hide();
        } else {
          $badge.show();
        }
      
        if (res.item_quantity <= 0 ) {
      
          $card.find('.minus-containerr5').empty();
        } else {
         
          const minusHtml = `
            <form class="del_form5">
                <input type="hidden" name="id" value="${res.item_id}">
                <input type="hidden" name="code" value="${res.item_code}">
                <input type="hidden" name="item" value="${res.item_name}">
                <button type="submit" class="counter-btn btn-minus">-</button>
            </form>`;
          $card.find('.minus-containerr5').html(minusHtml);
        }
      } else {
          console.log('Delete failed:', res.message || res);
        }
      },
      error: function (xhr) {
        console.log('AJAX delete error:', xhr.responseText);
      }
    });
  });

});


</script>





<script>
$(function () {
  $(document).on('submit', '.sam', function (e) {
    e.preventDefault();

    const $form = $(this);

    $.ajax({
      url: 'pack3.php',
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('AJAX success:', res);


        
        if (res.success) {
         
          console.log('Pack activated:');
         
        }
         else {
        console.log('Delete failed:', res.message || res);
        }
      },
      error: function (xhr, status, error) {
        console.error('AJAX error:', error, xhr.responseText);
      }
    });
  });
});
</script>

<script>
$(function () {
  $(document).on('submit', '.sam_form', function (e) {
    e.preventDefault();

    const $form = $(this);

    $.ajax({
      url: 'pack4.php',
      type: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        console.log('AJAX success:', res);


        
        if (res.success) {
         
          console.log('Pack activated:');
         
        }
         else {
        console.log('Delete failed:', res.message || res);
        }
      },
      error: function (xhr, status, error) {
        console.error('AJAX error:', error, xhr.responseText);
      }
    });
  });
});
</script>






<script>
$(document).ready(function() {
  // ➕ Increment button
  $(document).on('click', '.btn-plus', function() {
    const badge = $(this).siblings('.item-badge');
    let count = parseInt(badge.text()) || 0;
    count++;
    badge.text(count);

    if (count > 0) {
      badge.show();
    }
  });

  // ➖ Decrement button
  $(document).on('click', '.btn-minus', function() {
    const badge = $(this).siblings('.item-badge');
    let count = parseInt(badge.text()) || 0;

    if (count > 0) count--;
    badge.text(count);

    if (count === 0) {
      badge.hide();
    }
  });
});
</script>







</body>

</html>
