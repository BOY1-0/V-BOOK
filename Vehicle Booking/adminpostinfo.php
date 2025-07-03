<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Post Car Info</title>
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

    .form-section input,
    .form-section textarea {
      padding: 7px 10px 7px 32px;
      border-radius: 16px;
      border: 1px solid #ddd;
      width: 100%;
      font-size: 0.85rem;
      outline: none;
    }

    .form-section textarea {
      resize: vertical;
      height: 70px;
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
        <div class="logo">🚗</div>
        <h2>Post a Car for Listing</h2>
        <p>Admins can add car info below</p>

        <label>Car Name / Title</label>
        <div class="input-group">
          <i class="fas fa-car-side"></i>
          <input type="text" name="carname" placeholder="  Toyota Hilux" required>
        </div>

        <label>Description</label>
        <div class="input-group">
          <i class="fas fa-align-left"></i>
          <textarea name="cardes" placeholder="  Write a short car description..." required></textarea>
        </div>

        <label>Price</label>
        <div class="input-group">
          <i class="fas fa-dollar-sign"></i>
          <input type="text" name="carprice" placeholder=" $25,000" required>
        </div>

        <label>Image Link</label>
        <div class="input-group">
          <i class="fas fa-image"></i>
          <input type="text" name="carimage" placeholder=" Paste image URL" required>
        </div>

        <button class="submit-btn" name="postcar">Post Car</button>
      </form>
    </div>

    <div class="info-section">
      <div class="icon-wrapper">
        <i class="fas fa-car"></i>
      </div>
      <h2>Admin Panel</h2>
      <p>Use this form to upload car listings for users to view and book. Ensure all fields are accurate and the image is valid.</p>
    </div>
  </div>
</body>
</html>
