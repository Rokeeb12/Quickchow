<?php
session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quickchow index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f5f5f5;
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
      border-radius: 20px;
      padding-left: 15px;
    }
    .form-select {
      border: none;
      box-shadow: none;
      font-size: 14px;
      font-weight: 500;
    }
    .navbar .nav-link {
      font-size: 14px;
      color: #333;
    }

    /* Dropdown Profile Menu */
    .dropdown-menu {
      border-radius: 10px;
      padding: 0.5rem 0;
      border: 1px solid #eee;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
      font-size: 14px;
      padding: 0.6rem 1rem;
    }

    .dropdown-item:hover {
      background-color: #f5f5f5;
      color: #ff6b00;
    }

    .profile-pic {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 5px;
    }

    /* Vendor Header */
    .vendor-header {
      background: linear-gradient(to bottom right, #fde6d2, #fff);
      padding: 2rem 1rem;
      border-radius: 15px;
      max-width: 1200px;
      margin: 1rem auto;
    }

    .vendor-header h3 {
      font-weight: 700;
    }

    .search-bar {
      margin-top: 1rem;
      display: flex;
      justify-content: center;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .search-bar input {
      border-radius: 30px 0 0 30px;
      border: 1px solid #ddd;
      padding: 0.7rem 1rem;
      flex: 1;
    }

    .search-bar button {
      border-radius: 0 30px 30px 0;
      background-color: #ff6b00;
      color: #fff;
      border: none;
      padding: 0 1rem;
    }

    /* Vendor Cards */
    .vendor-card {
      position: relative;
      border-radius: 15px;
      background: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .vendor-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.15);
    }

    .vendor-logo {
      width: 100%;
      height: 150px;
      object-fit: cover;
      background: #f0f0f0;
    }

    .vendor-body {
      padding: 0.8rem 1rem;
    }

    .vendor-name {
      font-weight: 600;
      font-size: 1rem;
    }

    .vendor-desc {
      font-size: 0.9rem;
      color: #666;
    }

    .status-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      padding: 0.3rem 0.7rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 500;
      color: #fff;
    }

    .open-badge {
      background: #00c853;
    }

    .fav-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #fff;
      border: none;
      border-radius: 50%;
      width: 34px;
      height: 34px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .fav-btn:hover {
      transform: scale(1.1);
    }

    .rating {
      color: #ff9800;
      font-size: 0.85rem;
      margin-top: 0.3rem;
    }

    .arrow-btn {
      width: 34px;
      height: 34px;
      background: #ff6b00;
      color: #fff;
      border-radius: 50%;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease;
    }

    .arrow-btn:hover {
      transform: scale(1.1);
    }

    @media (max-width: 576px) {
      .vendor-logo {
        height: 120px;
      }
      .search-input {
        max-width: 250px;
      }
    }
  </style>
</head>
<body>
<?php
	  include "connect_to_mysqli.php";
	  
$code = $_SESSION['ider'];

$stmt = $con->prepare("SELECT * FROM reg WHERE code = ?");
$stmt->bind_param("s", $code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
echo  '<script>alert;window.location.href = "register.php";</script>';
 
} else {
    $stmt2 = $con->prepare("SELECT * FROM reg WHERE code = ?");
    $stmt2->bind_param("s", $code);
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    while ($row = $result2->fetch_array()) {
        $sp = $row['name'];
        $sp2 = $row['email'];
        $sp3 = $row['number'];
        $sp5 = $row['area'];
           $sp6 = $row['status'];
    }
    
}

					
?>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="https://cttaste.com/assets/img/logo.png" alt="Logo">
      </a>

      <!-- Location Selector -->
      

      <!-- Toggle for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCTTaste">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Content -->
      <div class="collapse navbar-collapse" id="navbarCTTaste">
        <!-- Search bar -->
        <div class="mx-auto d-flex justify-content-center my-2 my-lg-0">
          <input class="form-control search-input" type="search" placeholder="Search food or vendor">
        </div>

        <!-- Right-side menu -->
        <ul class="navbar-nav ms-auto d-flex align-items-center">
          <!-- Dropdown Profile -->
          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             
            <?php echo $sp; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
              <li><a class="dropdown-item" href="#">My Favourites</a></li>
              <li><a class="dropdown-item" href="#">My Orders</a></li>
              <li><a class="dropdown-item" href="#">Contact us</a></li>
              <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-cart"></i> Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Header Section -->
<div class="vendor-header text-center">
  <h3>Restaurant in <span class="text-danger fw-bold">Ibadan</span></h3>
  <div class="search-bar">
    <input type="text" class="form-control" placeholder="Search food or vendor">
    <button><i class="bi bi-search"></i></button>
  </div>
</div>

<!-- Vendor Cards -->
<div class="container my-4">
  <div class="row g-4">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="vendor-card">
        <div class="status-badge open-badge">OPEN</div>
        <button class="fav-btn">🤍</button>
        <img src="item7.jpeg" class="vendor-logo" alt="Crunchies">
        <div class="vendor-body">
          <h6 class="vendor-name">Crunchies</h6>
          <p class="vendor-desc">Best Jollof, Waakye, Ewa Agoyin</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="rating">⭐⭐⭐☆☆</div>
            <form action="faad6.php" method="POST">
                <input type='text' value='<?php echo $code; ?>'  class='form-control' name='hod' readonly  hidden />
            <button class="arrow-btn">➜</button>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
