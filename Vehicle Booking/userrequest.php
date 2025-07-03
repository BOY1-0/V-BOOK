<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book a Vehicle Service - VBook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f5f5f5;
    }

    .container {
      background: white;
      width: 90%;
      max-width: 600px;
      display: flex;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .form-section {
      flex: 1;
      padding: 25px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-section .logo {
      font-size: 2rem;
      font-weight: bold;
      color: #c100fb;
      text-align: center;
      margin-bottom: 5px;
    }

    .form-section h2 {
      text-align: center;
      margin-bottom: 6px;
      font-size: 1.2rem;
    }

    .form-section p {
      text-align: center;
      margin-bottom: 16px;
      font-size: 0.85rem;
      color: #555;
    }

    .form-section label {
      margin-top: 6px;
      font-size: 0.8rem;
      color: #444;
    }

    .input-group {
      position: relative;
      margin-bottom: 10px;
    }

    .input-group i {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      color: #888;
    }

    .form-section input {
      padding: 7px 10px 7px 32px;
      border-radius: 16px;
      border: 1px solid #ddd;
      width: 100%;
      font-size: 0.85rem;
      outline: none;
    }

    .submit-btn {
      background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
      color: white;
      border: none;
      padding: 10px;
      border-radius: 22px;
      font-weight: bold;
      cursor: pointer;
      font-size: 0.9rem;
      margin-top: 8px;
    }

    .info-section {
      flex: 1;
      background: linear-gradient(to right, #c100fb, #ffcc33);
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .info-section .icon-wrapper {
      text-align: center;
      margin-bottom: 12px;
    }

    .info-section .icon-wrapper i {
      font-size: 4rem;
      color: white;
    }

    .info-section h2 {
      margin-bottom: 10px;
      font-size: 1.2rem;
    }

    .info-section p {
      font-size: 0.8rem;
      line-height: 1.4;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-section">
      <form action="database.php" method="POST">
        <div class="logo">🛠️</div>
        <h2>Book a Vehicle Service</h2>
        <p>Fill in the details below to schedule your service</p>

        <label>Vehicle Type / Model</label>
        <div class="input-group">
          <i class="fas fa-car"></i>
          <input type="text" name="cartype" placeholder=" Toyota Corolla 2019" required  />
        </div>

        <label>License Plate Number</label>
        <div class="input-group">
          <i class="fas fa-id-card"></i>
          <input type="text" name="carplate" placeholder=" RAD 123 B" required />
        </div>

        <label>Service Type</label>
        <div class="input-group">
          <i class="fas fa-tools"></i>
          <input type="text" name="carservice" placeholder=" oil change, tire rotation"required  />
        </div>

        <label>Preferred Date & Time</label>
        <div class="input-group">
          <i class="fas fa-calendar-alt"></i>
          <input type="date" name="cardate" />
        </div>

        <label>Image Link</label>
        <div class="input-group">
          <i class="fas fa-image"></i>
          <input type="text" name="carimage" placeholder="Paste image URL (optional)"required  />
        </div>

        <button class="submit-btn" name="sendrequest">Submit Booking Request</button>
      </form>
    </div>

    <div class="info-section">
      <div class="icon-wrapper">
        <i class="fas fa-car"></i>
      </div>
      <h2>Vehicle Service Made Easy</h2>
      <p>Book maintenance or repairs with ease. VBook helps you stay on track with your vehicle's care—fast and reliable every time.</p>
    </div>
  </div>
</body>
</html>
