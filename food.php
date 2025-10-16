<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Ordering UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
  /* ---------- Page Centering ---------- */
  html, body {
    height: 100%;
    margin: 0;
  }

  body {
    display: flex;
    align-items: center;       /* Vertical center */
    justify-content: center;   /* Horizontal center */
    background: #f8f9fa;
  }

  .container-wrapper {
    max-width: 1200px;
    width: 95%;                /* Adjust for smaller screens */
    margin: auto;
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
    content: "▪ ";
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

  /* ---------- Bottom Buttons ---------- */
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

  /* ---------- RESPONSIVENESS ---------- */
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

  @media (max-width: 576px) {
    .menu-card {
      flex-direction: column;
      align-items: flex-start;
      text-align: center;
    }
    .menu-card img {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
    }
    .menu-actions {
      justify-content: center;
      width: 100%;
      margin-top: 0.5rem;
    }
    .top-actions {
      flex-direction: row;
      justify-content: space-between;
    }
    .btn-remove-pack {
      width: 100%;
      margin-top: 10px;
    }
  }
  </style>
</head>
<body>
    
<div class="container-wrapper">
  <div class="container-fluid mt-3">
    <div class="row p-3">
      <!-- Left Column -->
      <div class="col-lg-7 col-md-7 col-12">
        <div class="category-nav d-flex mb-3">
          <button class="category-btn active">Rice</button>
          <button class="category-btn">Moi-Moi & Salad</button>
          <button class="category-btn">Meat & Fish</button>
          <button class="category-btn">Porridge</button>
          <button class="category-btn">Swallows</button>
          <button class="category-btn">Swallow, Rice & Soup</button>
        </div>

        <h5 class="menu-title">Menu List</h5>

        <!-- Menu Items -->
        <div class="menu-card">
          <img src="https://via.placeholder.com/90" alt="Fried Rice">
          <div class="menu-info">
            <h6>Fried rice</h6>
            <p>₦500</p>
          </div>
          <div class="menu-actions">
            <button class="counter-btn btn-minus">−</button>
            <button class="counter-btn btn-plus">+</button>
          </div>
        </div>

        <div class="menu-card">
          <img src="https://via.placeholder.com/90" alt="Jollof Rice">
          <div class="menu-info">
            <h6>Jollof Rice</h6>
            <p>₦500</p>
          </div>
          <div class="menu-actions">
            <button class="counter-btn btn-minus">−</button>
            <button class="counter-btn btn-plus">+</button>
          </div>
        </div>

        <div class="menu-card">
          <img src="https://via.placeholder.com/90" alt="White rice and chicken">
          <div class="menu-info">
            <h6>White rice and chicken pepper soup</h6>
            <p>₦6,300</p>
          </div>
          <div class="menu-actions">
            <button class="counter-btn btn-minus">−</button>
            <button class="counter-btn btn-plus">+</button>
          </div>
        </div>
      </div>

      <!-- Right Column: Orders Panel -->
      <div class="col-lg-4 col-md-5 col-12">
        <div class="orders-panel">
          <h5>Your Orders</h5>
          <p class="text-muted small">Manage your meal selections</p>

          <!-- Top Buttons -->
          <div class="top-actions">
            <button class="btn btn-sm btn-add-pack">+ Add Pack</button>
            <button class="btn btn-sm btn-duplicate">Duplicate</button>
          </div>

          <!-- Pack 1 & 2 -->
          <div class="order-pack">
            <div class="d-flex justify-content-between align-items-center">
              <span>Pack 1</span>
              <span class="badge bg-warning text-dark">2 items</span>
            </div>
          </div>

          <div class="order-pack">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span>Pack 2</span>
              <span class="badge bg-secondary text-white">3 items</span>
            </div>
            <div class="d-grid">
              <button class="btn btn-sm btn-remove-pack">X Remove Pack</button>
            </div>
          </div>

          <!-- Pack 3–5 Simple -->
          <div class="simple-pack">Pack 3( 0 )</div>
          <div class="simple-pack">Pack 4( 0 )</div>
          <div class="simple-pack">Pack 5( 0 )</div>
          <div class="simple-pack">
            <span class="remove-pack-link">Remove pack</span>
          </div>

          <!-- Bottom Buttons -->
          <div class="d-flex justify-content-between gap-2 mt-5">
            <button class="btn btn-sm btn-top">↑ Top</button>
            <button class="btn btn-sm btn-empty">Empty Cart</button>
            <button class="btn btn-sm btn-checkout">Checkout →</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
