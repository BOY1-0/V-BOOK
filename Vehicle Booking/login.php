<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - VBook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      background: linear-gradient(to right, #c100fb, #ffcc33);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      background: white;
      width: 90%;
      max-width: 700px;
      display: flex;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    }

    .form-section {
      flex: 1;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-section .logo {
      font-size: 2.5rem;
      font-weight: bold;
      color: #c100fb;
      text-align: center;
      margin-bottom: 5px;
    }

    .form-section h2 {
      text-align: center;
      margin-bottom: 8px;
    }

    .form-section p {
      text-align: center;
      margin-bottom: 20px;
      font-size: 0.9rem;
      color: #555;
    }

    .form-section label {
      margin-top: 8px;
      font-size: 0.85rem;
      color: #444;
      margin-bottom: 4px;
    }

    .input-wrapper {
      position: relative;
      margin-bottom: 16px;
    }

    .input-wrapper i {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      color: #888;
      font-size: 0.9rem;
    }

    .form-section input {
      padding: 10px 12px 10px 36px;
      border-radius: 18px;
      border: 1px solid #ddd;
      width: 100%;
      font-size: 0.9rem;
      outline: none;
    }

    .login-btn {
      background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
      color: white;
      border: none;
      padding: 10px;
      border-radius: 25px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 8px;
      margin-left: 90px;
      font-size: 0.9rem;
      width: 100px;
    }

    .register-link {
      text-align: center;
      display: block;
      margin-top: 12px;
      font-size: 0.8rem;
      color:rgb(245, 187, 15);
      text-decoration: none;
    }

    .info-section {
      flex: 1;
      background: linear-gradient(to right, #c100fb, #ffcc33);
      color: white;
      padding: 30px 25px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .info-section .icon-container {
      background: white;
      border-radius: 50%;
      padding: 20px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      border: 4px solid #fff;
      background-image: linear-gradient(to right, #ffcc33, #c100fb);
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    .info-section .icon-container i {
      font-size: 2.8rem;
      color: #c100fb;
      background: white;
      padding: 20px;
      border-radius: 50%;
    }

    .info-section h2 {
      margin-bottom: 10px;
      font-size: 1.4rem;
    }

    .info-section p {
      font-size: 0.85rem;
      line-height: 1.4;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-section">
      <form action="database.php" method="POST">
        <div class="logo">🚗</div>
        <h2>Login to VBook</h2>
        <p>Enter your credentials to access your dashboard.</p>

        <label>Email</label>
        <div class="input-wrapper">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Enter your email" required />
        </div>

        <label>Password</label>
        <div class="input-wrapper">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Enter your password" required />
        </div>

        <button class="login-btn" name="login">Login</button>
        <a href="register.php" class="register-link">Don't have an account? Register here</a>
      </form>
    </div>

    <div class="info-section">
      <div class="icon-container">
        <i class="fas fa-car"></i>
      </div>
      <h2>Welcome Back</h2>
      <p>Access your bookings, manage cars, and stay connected with VBook — your vehicle booking partner.</p>
    </div>
  </div>
</body>
</html>
