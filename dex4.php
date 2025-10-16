<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f5f5f5;
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
  </style>
</head>
<body>

  <!-- Header -->
  <div class="vendor-header text-center">
    <h3>Vendors in <span class="text-danger fw-bold">FUNAAB</span></h3>
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
          <img src="https://via.placeholder.com/250x150.png?text=Hand+of+God" class="vendor-logo" alt="Hand of God">
          <div class="vendor-body">
            <h6 class="vendor-name">Hand of God</h6>
            <p class="vendor-desc">Best Jollof, Waakye, Ewa Agoyin</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="rating">⭐⭐⭐☆☆</div>
              <button class="arrow-btn">➜</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="vendor-card">
          <div class="status-badge closed-badge">CLOSED</div>
          <button class="fav-btn">🤍</button>
          <img src="https://via.placeholder.com/250x150.png?text=Boripe+Foods" class="vendor-logo" alt="Boripe Foods">
          <div class="vendor-body">
            <h6 class="vendor-name">Boripe Foods</h6>
            <p class="vendor-desc">Rice, bread, beans and swallow</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="rating">☆☆☆☆☆</div>
              <button class="arrow-btn">➜</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="vendor-card">
          <div class="status-badge open-badge">OPEN</div>
          <button class="fav-btn">🤍</button>
          <img src="https://via.placeholder.com/250x150.png?text=Mega+Spicy" class="vendor-logo" alt="Mega Spicy">
          <div class="vendor-body">
            <h6 class="vendor-name">Mega Spicy</h6>
            <p class="vendor-desc">Tasty Meals</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="rating">⭐⭐⭐☆☆</div>
              <button class="arrow-btn">➜</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="vendor-card">
          <div class="status-badge open-badge">OPEN</div>
          <button class="fav-btn">🤍</button>
          <img src="https://via.placeholder.com/250x150.png?text=Delightsome" class="vendor-logo" alt="Delightsome Foodville">
          <div class="vendor-body">
            <h6 class="vendor-name">Delightsome Foodville and More</h6>
            <p class="vendor-desc">Fresh meals, cakes and Delight</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="rating">⭐⭐⭐☆☆</div>
              <button class="arrow-btn">➜</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
