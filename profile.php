<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Profile Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    /* Navbar */
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .navbar-brand img {
      height: 40px;
    }

    .search-input {
      width: 250px;
      max-width: 100%;
    }

    .profile-pic {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      margin-right: 8px;
    }

    /* Sidebar */
    .sidebar-card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .sidebar-header {
      padding: 1rem;
      border-bottom: 1px solid #eee;
    }

    .sidebar-header h5 {
      margin: 0;
      font-weight: bold;
      color: #c9302c;
    }

    .sidebar-header small {
      color: #6c757d;
      font-size: 0.9rem;
    }

    .wallet-section {
      padding: 1rem;
      border-bottom: 1px solid #eee;
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .menu-list .list-group-item {
      border: none;
      padding: 0.9rem 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-weight: 500;
      font-size: 0.95rem;
    }

    .menu-list .list-group-item span i {
      background: orange;
      color: white;
      padding: 0.5rem;
      border-radius: 50%;
      margin-right: 10px;
    }

    .menu-list .list-group-item i.bi-chevron-right {
      background: none;
      color: #6c757d;
      padding: 0;
      font-size: 1rem;
    }

    .menu-list .list-group-item:hover {
      background: #f8f9fa;
      cursor: pointer;
    }

    /* Profile Card */
    .profile-form-card {
      background: #fff;
      border-radius: 8px;
      padding: 1.5rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .btn-save {
      background: linear-gradient(90deg, #ff9500, #ff6b00);
      color: #fff;
      font-weight: 600;
      border: none;
      width: 100%;
      padding: 0.7rem;
      border-radius: 6px;
      margin-top: 1rem;
    }

    .action-card {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 6px;
      padding: 1rem 1.2rem;
      margin-top: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .action-card:hover {
      background: #f8f9fa;
    }

    /* Footer */
    footer {
      background: linear-gradient(90deg, #1f3c5c, #2b4a6f);
      color: white;
      padding: 2rem 0;
      margin-top: 2rem;
    }

    footer h5 {
      font-weight: bold;
      margin-bottom: 1rem;
    }

    footer a {
      color: #ddd;
      text-decoration: none;
      display: block;
      margin-bottom: 0.5rem;
    }

    footer a:hover {
      color: #fff;
    }

    footer .social-icons i {
      font-size: 1.2rem;
      margin-right: 10px;
      background: #fff;
      color: #1f3c5c;
      padding: 6px;
      border-radius: 50%;
      transition: 0.3s;
    }

    footer .social-icons i:hover {
      background: #ff6b00;
      color: white;
    }

    .footer-bottom {
      background: #f1f1f1;
      padding: 1rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      text-align: center;
    }

    .footer-bottom img {
      height: 35px;
      margin: 5px;
    }

    @media (max-width: 991px) {
      .sidebar-card {
        margin-bottom: 1.5rem;
      }
    }

    @media (max-width: 576px) {
      .search-input {
        width: 100%;
      }

      .footer-bottom {
        flex-direction: column;
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
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="https://cttaste.com/assets/img/logo.png" alt="Logo">
      </a>

      <!-- Location Selector -->
      <div class="d-none d-lg-flex align-items-center ms-3">
        <i class="bi bi-geo-alt me-1"></i>
        <div>
          <small class="text-muted">Select Location</small><br>
          <select class="form-select form-select-sm border-0 p-0">
            <option selected>FUNAAB</option>
            <option>UI</option>
            <option>Gbagii</option>
          </select>
        </div>
      </div>

      <!-- Toggle for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCTTaste">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Content -->
      <div class="collapse navbar-collapse" id="navbarCTTaste">
        <div class="mx-auto d-flex justify-content-center my-2 my-lg-0">
          <input class="form-control search-input" type="search" placeholder="Search food or vendor">
        </div>

        <ul class="navbar-nav ms-auto d-flex align-items-center">
          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
             <?php echo $sp ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">My Profile</a></li>
              <li><a class="dropdown-item" href="#">My Favourites</a></li>
              <li><a class="dropdown-item" href="#">My Orders</a></li>
              <li><a class="dropdown-item" href="#">Contact us</a></li>
              <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dex6.php"><i class="bi bi-cart"></i> Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Profile Section -->
<div class="container my-4">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-lg-4 col-md-5">
      <div class="sidebar-card">
        <div class="sidebar-header">
          <h5>Adebisi Rokeeb Tomiwa <i class="bi bi-patch-check-fill text-success"></i></h5>
          <small>tomiwadeji35@gmail.com</small>
        </div>
        <div class="wallet-section">
          <span>Fund Wallet</span>
          <span class="fw-bold">N0.00</span>
        </div>
        <div class="menu-list list-group list-group-flush">
          <a class="list-group-item">
            <span><i class="bi bi-heart-fill"></i> Favourites</span>
            <i class="bi bi-chevron-right"></i>
          </a>
          <a class="list-group-item">
            <span><i class="bi bi-list-ul"></i> My Orders</span>
            <i class="bi bi-chevron-right"></i>
          </a>
          <a class="list-group-item">
            <span><i class="bi bi-box-arrow-right"></i> Log Out</span>
            <i class="bi bi-chevron-right"></i>
          </a>
          <a class="list-group-item">
            <span><i class="bi bi-trash3-fill"></i> Delete Account</span>
            <i class="bi bi-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Profile Form -->
    <div class="col-lg-8 col-md-7">
      <div class="profile-form-card">
        <h4 class="mb-4">My Profile</h4>
        <form>
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="<?php echo $sp ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" class="form-control" value="<?php echo $sp5 ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="text" class="form-control" value="<?php echo $sp2 ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="<?php echo $sp3 ?>">
          </div>
          <button class="btn-save">Save Changes</button>
        </form>

        <div class="action-card">
          <span>Change Password</span>
          <i class="bi bi-chevron-right"></i>
        </div>
        <div class="action-card">
          <span>Deactivate Account</span>
          <i class="bi bi-chevron-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-4">
        <img src="https://cttaste.com/assets/img/logo.png" alt="CTTaste" class="mb-3" style="height:40px;">
        <h5>About Us</h5>
        <p>We prioritize the needs of every student and increase the sales of every food vendor across each institution.</p>
      </div>
      <div class="col-md-3 mb-4">
        <h5>OTHER PRODUCTS</h5>
        <a href="#">Who We Are</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms Of Service</a>
      </div>
      <div class="col-md-3 mb-4">
        <h5>FOR RESTAURANTS</h5>
        <a href="#">Add Restaurant</a>
        <a href="#">Join the community</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="col-md-3 mb-4">
        <h5>SOCIAL MEDIA LINKS</h5>
        <div class="social-icons">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="footer-bottom">
  <div>© 2024 CTTaste. A product of CTHostel.</div>
  <div>
    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
