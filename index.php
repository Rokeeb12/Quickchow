<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quickchow index</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f5f5f5;
    }

    /* Top navigation bar */
    .top-header {
      background: #fff;
      padding: 0.8rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #e0e0e0;
      flex-wrap: wrap;
    }

    .logo img {
      height: 38px;
    }

    .location-dropdown {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 0.95rem;
      font-weight: 500;
    }

    .location-dropdown select {
      border: none;
      font-weight: bold;
      font-size: 0.95rem;
      color: #333;
      background: transparent;
      outline: none;
    }

    /* Search bar styling */
    .search-bar {
      flex: 1;
      max-width: 300px;
      margin: 0 1.5rem;
      position: relative;
    }

    .search-bar input {
      width: 100%;
      border: 1px solid #ddd;
      border-radius: 20px;
      padding: 0.4rem 1rem;
      padding-right: 2.5rem;
      font-size: 0.9rem;
    }

    .search-bar i {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
      font-size: 1rem;
    }

    .auth-links a {
      margin-left: 1.2rem;
      font-size: 0.9rem;
      color: #555;
      text-decoration: none;
    }

    .auth-links a:hover {
      color: #ff6b00;
    }

    /* Carousel styling */
    .header-carousel {
      background: #fff;
      border-bottom: 1px solid #e0e0e0;
    }

    .header-carousel .carousel-inner {
      display: flex;
      align-items: center;
    }

    .header-carousel .carousel-item img {
      height: 160px;
      width: 100%;
      object-fit: cover;
      border-radius: 8px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0,0,0,0.4);
      border-radius: 50%;
      background-size: 50%;
      width: 32px;
      height: 32px;
    }

    @media (max-width: 992px) {
      .search-bar {
        max-width: 220px;
      }
      .header-carousel .carousel-item img {
        height: 130px;
      }
    }

    @media (max-width: 576px) {
      .top-header {
        flex-direction: column;
        align-items: stretch;
      }

      .search-bar {
        max-width: 100%;
        margin: 0.5rem 0;
      }

      .header-carousel .carousel-item img {
        height: 120px;
      }

      .auth-links {
        display: flex;
        justify-content: flex-end;
        width: 100%;
      }
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
    .navbar .nav-link {
      font-size: 14px;
      color: #333;
    }
    /* Header Section */
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

    /* Vendor Card */
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

    /* Status Badge */
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

    .closed-badge {
      background: #444;
    }

    /* Favorite Heart Button */
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

    /* Ratings */
    .rating {
      color: #ff9800;
      font-size: 0.85rem;
      margin-top: 0.3rem;
    }

    /* Arrow Button */
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

    /* Responsive adjustments */
    @media (max-width: 576px) {
      .vendor-logo {
        height: 120px;
      }
    }
    
    footer {
      background: linear-gradient(to right, rgba(139,69,19,0.6), #1e3a5f, rgba(139,69,19,0.6));
      color: #fff;
      padding: 3rem 2rem 1rem;
      margin-top: 3rem;
    }
    footer h5 {
      font-weight: 700;
      margin-bottom: 1rem;
    }
    footer a {
      color: #fff;
      text-decoration: none;
      font-size: 0.9rem;
    }
    footer a:hover {
      text-decoration: underline;
    }
    .social-icons a {
      display: inline-block;
      width: 35px;
      height: 35px;
      border: 1px solid #fff;
      border-radius: 5px;
      text-align: center;
      line-height: 33px;
      margin-right: 8px;
      transition: all 0.3s ease;
    }
    .social-icons a:hover {
      background: #fff;
      color: #1e3a5f;
    }
    .footer-bottom {
      background: #f8f9fa;
      color: #000;
      padding: 1rem 2rem;
      font-size: 0.9rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    .footer-bottom img {
      height: 40px;
      margin-left: 10px;
    }

    /* Responsive */
    @media (max-width: 991px) {
      .left-content h1 { font-size: 2rem; }
      .phone-img { max-width: 180px; }
      .food-img { max-width: 120px; }
    }

    @media (max-width: 767px) {
      .left-section, .right-section { min-height: auto; padding: 2rem 1rem; }
      .left-content h1 { font-size: 1.8rem; }
      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
      .footer-bottom div {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

<header>
  <!-- Top bar -->
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://cttaste.com/assets/img/logo.png" alt="">
    </a>

    <!-- Location Selector -->
    <div class="d-none d-lg-flex align-items-center ms-3">
      <i class="bi bi-geo-alt me-1"></i>
      <div>
        <small class="text-muted">Select Locations</small><br>
        <select class="form-select form-select-sm border-0 p-0">
          <option selected>iworoad</option>
          <option>challenge</option>
          <option>Ul</option>
          <option>Gbagii</option>
        </select>
      </div>
    </div>

    <!-- Toggle for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCTTaste">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Center Search + Right Menu -->
    <div class="collapse navbar-collapse" id="navbarCTTaste">
      <div class="mx-auto d-flex justify-content-center my-2 my-lg-0">
        <input class="form-control search-input" type="search" placeholder="Search food or vendor">
      </div>

      <ul class="navbar-nav ms-auto d-flex align-items-center">
        <li class="nav-item me-3">
          <a class="nav-link" href="register2.php"><i class="bi bi-person"></i> Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-cart"></i> Cart</a>
        </li>
      </ul>
    </div>
  </div>

  
    </div>
  </div>
</header>

 <!-- Header -->
  <div class="vendor-header text-center">
    <h3>Resturant in <span class="text-danger fw-bold">Ibadan</span></h3>
    <div class="search-bar">
      <input type="text" class="form-control" placeholder="Search food or vendor">
      <button><i class="bi bi-search"></i> 🔍</button>
    </div>
  </div>

  <!-- Vendor Cards -->
  <div class="container my-4">
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="vendor-card">
          <div class="status-badge open-badge">OPEN</div>
          <button class="fav-btn">🤍</button>
          <img src="item7.jpeg" class="vendor-logo" alt="Hand of God">
          <div class="vendor-body">
            <h6 class="vendor-name">Crunchies</h6>
            <p class="vendor-desc">Best Jollof, Waakye, Ewa Agoyin</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="rating">⭐⭐⭐☆☆</div>
  <form action="faad.php" method=""><button class="arrow-btn">➜</button></form>
            </div>
          </div>
        </div>
      </div>

    

     

    

    </div>
  </div>
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-4">
        <img src="https://cttaste.com/assets/img/logo.png" alt="Quickchow" class="mb-3" style="height:40px;">
        <h5>About Us</h5>
        <p>We prioritize the needs of every student and increase the sales of every food vendor across each institution.</p>
      </div>

      <div class="col-md-3 mb-4">
        <h5>OTHER PRODUCTS</h5>
        <a href="#">Who We Are</a><br>
        <a href="#">Privacy Policy</a><br>
        <a href="#">Terms Of Service</a>
      </div>

      <div class="col-md-3 mb-4">
        <h5>FOR RESTAURANTS</h5>
        <a href="#">Add Restaurant</a><br>
        <a href="#">Join the community</a><br>
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
  <div>© 2024 Quickchow. A product of CTHostel.</div>
  <div>
    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
