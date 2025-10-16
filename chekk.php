<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CTTaste Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
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

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://cttaste.com/assets/img/logo.png" alt="CTTaste Logo">
    </a>

    <!-- Location Selector -->
    <div class="d-none d-lg-flex align-items-center ms-3">
      <i class="bi bi-geo-alt me-1"></i>
      <div>
        <small class="text-muted">Select Locations</small><br>
        <select class="form-select form-select-sm border-0 p-0">
          <option selected>FUNAAB</option>
          <option>UI</option>
          <option>OAU</option>
          <option>UNILAG</option>
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
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
