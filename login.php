<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CTTaste Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    /* Animations */
    @keyframes fadeInLeft {
      0% { opacity: 0; transform: translateX(-50px); }
      100% { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeInRight {
      0% { opacity: 0; transform: translateX(50px); }
      100% { opacity: 1; transform: translateX(0); }
    }
    .fade-in-left { animation: fadeInLeft 1s ease forwards; }
    .fade-in-right { animation: fadeInRight 1s ease forwards; }

    /* Left Section */
    .left-section {
      background: url('pattern.png') repeat, #7b0e0e;
      color: #ffcc33;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      min-height: 100vh;
      opacity: 0;
      padding: 2rem 1rem;
    }

    .left-content h1 {
      font-weight: 700;
      font-size: 2.8rem;
      line-height: 1.2;
      margin-bottom: 2rem;
    }

    .phone-img {
      max-width: 220px;
      margin-top: 1rem;
      transition: transform 0.4s ease;
    }
    .phone-img:hover { transform: scale(1.05); }

    .food-img {
      max-width: 160px;
      margin-top: 1.5rem;
      transition: transform 0.4s ease;
    }
    .food-img:hover { transform: scale(1.08); }

    /* Right Section */
    .right-section {
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      opacity: 0;
      padding: 2rem 1rem;
    }

    .right-content h2 { font-weight: bold; margin-bottom: .5rem; }
    .right-content p { font-size: 1rem; color: #6c757d; }

    /* Buttons */
    .login-btn {
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 1rem;
      border-radius: 8px;
      width: 100%;
      border: none;
      transition: all 0.3s ease;
    }
    .vendor-login {
      background: linear-gradient(90deg, #ff7a00, #ff9900);
      color: #fff;
    }
    .customer-login {
      background: linear-gradient(90deg, #00b4d8, #48cae4);
      color: #fff;
    }
    .login-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0px 6px 15px rgba(0,0,0,0.2);
      opacity: 0.95;
    }

    .register-divider {
      display: flex;
      align-items: center;
      text-align: center;
      color: #6c757d;
      font-size: 0.9rem;
      margin: 1rem 0;
    }
    .register-divider::before,
    .register-divider::after {
      content: "";
      flex: 1;
      border-bottom: 1px solid #dee2e6;
    }
    .register-divider:not(:empty)::before { margin-right: .5em; }
    .register-divider:not(:empty)::after { margin-left: .5em; }

    .register-btn {
      border: 2px solid;
      background: #fff;
      padding: 0.7rem;
      font-weight: 500;
      border-radius: 8px;
      width: 100%;
      margin-bottom: 0.8rem;
      transition: all 0.3s ease;
    }
    .register-vendor { border-color: #ff7a00; color: #ff7a00; }
    .register-customer { border-color: #2ecc71; color: #2ecc71; }
    .register-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0px 6px 12px rgba(0,0,0,0.15);
      background-color: rgba(0,0,0,0.02);
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
          <a class="nav-link" href="#"><i class="bi bi-person"></i> Sign in</a>
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
  <div class="container-fluid">
    <div class="row g-0">
      <!-- Left Section -->
      <div class="col-lg-6 left-section fade-in-left">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-10 col-md-8 left-content">
              <img src="logo.png" alt="CTTaste Logo" class="mb-3" style="height:50px;">
              <h1>Order your<br>fav meal<br>from any<br>food vendor</h1>
              <img src="phone.png" alt="Phone Mockup" class="phone-img">
              <img src="food.png" alt="Food Plate" class="food-img">
            </div>
          </div>
        </div>
      </div>

      <!-- Right Section -->
      <div class="col-lg-6 right-section fade-in-right">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-10 col-md-8 right-content text-center">
              <h2>Welcome to CTTaste</h2>
              <p>No. 1 Food Ordering Platform For Students</p>
              <button class="login-btn vendor-login">
                <i class="bi bi-shop me-2"></i>Login as Vendor
              </button>
              <button class="login-btn customer-login">
                <i class="bi bi-person-circle me-2"></i>Login as Customer
              </button>
              <div class="register-divider">New to CTTaste?</div>
              <button class="register-btn register-vendor">
                <i class="bi bi-shop me-2"></i>Register as Vendor
              </button>
              <button class="register-btn register-customer">
                <i class="bi bi-person-plus me-2"></i>Register as Customer
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.addEventListener('load', () => {
      document.querySelector('.left-section').style.opacity = 1;
      document.querySelector('.right-section').style.opacity = 1;
    });
  </script>
</body>
</html>
