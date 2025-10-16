<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CTTaste Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #ffffff;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .navbar {
      background: #ffffff !important;
      border-bottom: 1px solid #eee;
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
      text-align: center;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
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
      padding: 2rem 1rem;
    }

    .form-container {
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }

    .btn-submit {
      background: linear-gradient(90deg, #f39c12, #00b4d8);
      color: white;
      font-weight: 600;
      border: none;
      padding: 0.75rem;
      border-radius: 8px;
      width: 100%;
      transition: 0.3s;
    }

    .btn-submit:hover {
      opacity: 0.9;
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
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://cttaste.com/assets/img/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCTTaste">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCTTaste">
      <div class="mx-auto d-flex justify-content-center my-2 my-lg-0">
        <input class="form-control search-input" type="search" placeholder="Search food or vendor">
      </div>
      <ul class="navbar-nav ms-auto d-flex align-items-center">
        <li class="nav-item me-3">
          <a class="nav-link" href="register2.php"><i class="bi bi-person"></i> Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dex5.php"><i class="bi bi-cart"></i> Cart</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid d-flex align-items-center p-4 justify-content-center" style="min-height: 100vh;">
  <div class="row g-0 w-100" style="max-width:1200px;">
    <!-- Left Section -->
    <div class="col-lg-6 left-section fade-in-left">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-md-8 left-content">
            <img src="logo.png" alt="Logo" class="mb-3" style="height:50px;">
            <h1>Order your<br>fav meal<br>from any<br>food vendor</h1>
            <img src="phone.png" alt="Phone Mockup" class="phone-img">
            <img src="food.png" alt="Food Plate" class="food-img">
          </div>
        </div>
      </div>
    </div>

    <!-- Right Form -->
    <div class="col-lg-6 right-section fade-in-right">
      <div class="form-container">
        <h2 class="text-center mb-3">Create Account</h2>
        <p class="text-center text-muted">Join our food community today!</p>
        <form action="reg.php" method="POST">
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" placeholder="Enter your full name" name="kod">
          </div>
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
            <input type="number" class="form-control" placeholder="Enter your mobile number"  name="kot">
          </div>
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Enter your email"  name="mail" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address">
          </div>
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-building"></i></span>
            <select class="form-select"  name="area">
              <option selected>Choose your area</option>
              <option>iworoad</option>
              <option>challenge</option>
               <option>Gbagii</option>
            </select>
          </div>
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" placeholder="Create a password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
          </div>
          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input type="password" class="form-control" placeholder="Confirm your password" name="mass">
          </div>
           <div class="mb-3 input-group">
           
            <input type="text" class="form-control" value="member"  name="stat" readonly hidden>
          </div>
          <button type="submit" class="btn-submit mb-3">
            <i class="bi bi-person-plus me-2"></i> Create Account
          </button>
          <p class="text-center">Already have an account? <a href="login3.php" class="text-decoration-none">Sign in</a></p>
        </form>
      </div>
    </div>
  </div>
</div>

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
  <div>© 2024 CTTaste. A product of CTHostel.</div>
  <div>
    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
