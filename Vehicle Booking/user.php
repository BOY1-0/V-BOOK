<?php
session_start();

// 1. Check if user is logged in
if (!isset($_SESSION['email'])) { 
    header("Location: login.php");
    exit();
}

// 2. Check if user is NOT admin
if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
    header("Location: login.php");
    exit();
}

// 3. Connect to database
$conn = mysqli_connect("localhost", "root", "", "car booking");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// 4. Delete logic if a request ID is passed
if (isset($_GET['d'])) {
    $ID = intval($_GET['d']);
    mysqli_query($conn, "DELETE FROM request WHERE ID = $ID");
    header("Location: user.php");
    exit();
}

$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard - VBook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", sans-serif; }
    body { display: flex; min-height: 100vh; background: #f9f9f9; }

    .sidebar {
      width: 220px;
      background: #c100fb;
      color: white;
      padding: 20px 15px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .sidebar h2 { text-align: center; font-size: 1.3rem; margin-bottom: 30px; }

    .nav-link {
      color: white;
      text-decoration: none;
      padding: 10px 14px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.95rem;
    }

    .nav-link:hover { background-color: rgba(255, 255, 255, 0.15); }

    .main-content {
      flex: 1;
      padding: 20px;
    }

    header {
      background: linear-gradient(to right, #c100fb, #ffcc33);
      padding: 16px 24px;
      color: white;
      border-radius: 12px;
      margin-bottom: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 { font-size: 1.4rem; }

    h2.section-title {
      color: #c100fb;
      margin: 24px 0 12px;
      font-size: 1.2rem;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      background: white;
      width: 300px;
      border-radius: 16px;
      box-shadow: 0 0 12px rgba(0,0,0,0.06);
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .card-body {
      padding: 16px;
    }

    .card-body h3 {
      font-size: 1.1rem;
      margin-bottom: 8px;
      color: #333;
    }

    .card-body p {
      font-size: 0.85rem;
      color: #555;
      margin-bottom: 6px;
    }

    .card-actions {
      margin-top: 12px;
      display: flex;
      gap: 10px;
    }

    .btn {
      padding: 6px 12px;
      font-size: 0.85rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: background 0.3s;
    }

    .update-btn { background-color: #ffcc33; color: #333; }
    .delete-btn { background-color: #ff4d4d; color: white; }
    .btn:hover { opacity: 0.85; }

    @media screen and (max-width: 768px) {
      .sidebar { display: none; }
      .main-content { padding: 10px; }
      .card { width: 100%; }
    }

    a { text-decoration: none; }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>🚘 VBook</h2>
    <a href="#requests" class="nav-link"><i class="fas fa-tools"></i> Service Requests</a>
    <a href="#cars" class="nav-link"><i class="fas fa-car-side"></i> Available Cars</a>
    <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <header>
      <h1> 👤 User Dashboard</h1>
    </header>

    <!-- Service Requests -->
    <h2 class="section-title" id="requests">Your Service Requests</h2>

    <!-- Make Request Button -->
    <a href="userrequest.php" class="btn update-btn" style="margin-bottom: 16px; display: inline-block;">
      <i class="fas fa-plus-circle"></i> Make New Request
    </a>

    <div class="card-container">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM request");
        while ($r = mysqli_fetch_assoc($result)) {
      ?>
        <div class="card">
          <img src="<?= $r["carimage"] ?>" alt="Request Image" />
          <div class="card-body">
            <h3><?= $r["cartype"] ?></h3>
            <p><strong>Plate:</strong> <?= $r["carplate"] ?></p>
            <p><strong>Service:</strong> <?= $r["carservice"] ?></p>
            <p><strong>Date:</strong> <?= $r["cardate"] ?></p>
            <div class="card-actions">
              <a href="useredit.php?i=<?= $r['ID'] ?>" class="btn update-btn"><i class="fas fa-edit"></i> Update</a>
              <a href="user.php?d=<?= $r['ID'] ?>" class="btn delete-btn" onclick="return confirm('Are you sure you want to delete this request?');">
                <i class="fas fa-trash"></i> Delete
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Available Cars -->
    <h2 class="section-title" id="cars">Available Cars</h2>
    <div class="card-container">
      <?php
        $result = mysqli_query($conn, "SELECT * FROM carsinfo");
        while ($r = mysqli_fetch_assoc($result)) {
      ?>
        <div class="card">
          <img src="<?= $r["carimage"] ?>" alt="Car Image" />
          <div class="card-body">
            <h3><?= $r["carname"] ?></h3>
            <p><strong>Price:</strong> <?= $r["carprice"] ?></p>
            <p><?= $r["cardes"] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</body>
</html>
