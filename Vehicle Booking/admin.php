<?php
session_start();

// 1. Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// 2. Check if user is an admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("Location: login.php");
    exit();
}

// 3. Get the email for use in the page
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard - VBook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", sans-serif; }
    body { background: #f5f5f5; display: flex; }

    .sidebar {
      width: 240px;
      background: #c100fb;
      color: white;
      min-height: 100vh;
      padding-top: 24px;
      position: fixed;
    }

    .sidebar h2 { text-align: center; margin-bottom: 30px; }

    .nav-link {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
      font-size: 1rem;
    }

    .nav-link:hover { background: rgba(255, 255, 255, 0.1); }

    .nav-link i { margin-right: 12px; }

    .main {
      margin-left: 240px;
      width: calc(100% - 240px);
    }

    header {
      background: linear-gradient(to right,rgb(251, 0, 167), #ffcc33);
      color: white;
      padding: 16px 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 { font-size: 1.4rem; }

    .dashboard {
      padding: 24px;
      max-width: 1200px;
      margin: auto;
    }

    .section-title {
      margin: 20px 0 10px;
      color: #c100fb;
      font-size: 1.3rem;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 10px;
    }

    .card {
      background: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 0 12px rgba(0,0,0,0.08);
      width: 280px;
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
      flex: 1;
    }

    .card-body h3 {
      font-size: 1.1rem;
      color: #333;
      margin-bottom: 6px;
    }

    .card-body p {
      font-size: 0.85rem;
      color: #555;
      margin-bottom: 4px;
    }

    .card-footer {
      display: flex;
      justify-content: space-between;
      padding: 12px 16px;
      border-top: 1px solid #eee;
    }

    .action-btn {
      padding: 8px 12px;
      border-radius: 12px;
      font-size: 0.8rem;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }

    .update { background-color: #28a745; color: white; }
    .delete { background-color: #dc3545; color: white; }

    .post-btn {
      background-color: #ffcc33;
      color: black;
      font-weight: bold;
      padding: 10px 16px;
      border-radius: 12px;
      border: none;
      margin-bottom: 16px;
      display: inline-block;
      text-decoration: none;
    }

    @media screen and (max-width: 768px) {
      .sidebar { width: 100px; }
      .main { margin-left: 100px; width: calc(100% - 100px); }
      .nav-link span { display: none; }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>🚗 VBook</h2>
    <a href="#car-info" class="nav-link"><i class="fas fa-car-side"></i><span> Car Info</span></a>
    <a href="#user-requests" class="nav-link"><i class="fas fa-users"></i><span> User Requests</span></a>
    <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <header>
      <h1>👤 Admin Dashboard</h1>
    </header>

    <div class="dashboard">

      <!-- Posted Cars -->
      <h2 class="section-title" id="car-info">Posted Cars</h2>

      <!-- Button to Post New Car -->
      <a href="adminpostinfo.php" class="post-btn"><i class="fas fa-plus-circle"></i> Post New Car</a>

      <div class="card-container">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "car booking");
        if (!$conn) {
          echo "<p style='color:red'>Database connection failed!</p>";
        } else {
          $q = "SELECT * FROM carsinfo";
          $result = mysqli_query($conn, $q);

          while ($r = mysqli_fetch_assoc($result)) {
            $ID = $r["ID"];
            $carimage = $r["carimage"];
            $cardes = $r["cardes"];
            $carname = $r["carname"];
            $carprice = $r["carprice"];
        ?>
          <div class="card">
            <img src="<?php echo $carimage; ?>" alt="Car Image" />
            <div class="card-body">
              <h3><?php echo $carname; ?></h3>
              <p><strong>Price:</strong> <?php echo $carprice; ?></p>
              <p><?php echo $cardes; ?></p>
            </div>
            <div class="card-footer">
              <a href="adminedit.php?i=<?php echo $ID; ?>">
                <button class="action-btn update"><i class="fas fa-edit"></i> Update</button>
              </a>
              <a href="admindelete.php?d=<?php echo $ID; ?>" onclick="return confirm('Are you sure you want to delete this car?');">
                <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
              </a>
            </div>
          </div>
        <?php
          }
        }
        ?>
      </div>

      <!-- User Requests -->
      <h2 class="section-title" id="user-requests">User Service Requests</h2>
      <div class="card-container">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "car booking");
        if (!$conn) {
          echo "<p style='color:red'>Database connection failed!</p>";
        } else {
          $q = "SELECT * FROM request";
          $result = mysqli_query($conn, $q);

          while ($r = mysqli_fetch_assoc($result)) {
            $carimage = $r["carimage"];
            $cartype = $r["cartype"];
            $carplate = $r["carplate"];
            $carservice = $r["carservice"];
            $cardate = $r["cardate"];
        ?>
          <div class="card">
            <img src="<?php echo $carimage; ?>" alt="Request Image" />
            <div class="card-body">
              <h3><?php echo $cartype; ?></h3>
              <p><strong>Plate:</strong> <?php echo $carplate; ?></p>
              <p><strong>Service:</strong> <?php echo $carservice; ?></p>
              <p><strong>Date:</strong> <?php echo $cardate; ?></p>
            </div>
          </div>
        <?php
          }
        }
        ?>
      </div>

    </div>
  </div>

</body>
</html>
