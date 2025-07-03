<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - VBook</title>
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

    .form-section input,
    .form-section select {
      padding: 10px 12px 10px 36px;
      border-radius: 18px;
      border: 1px solid #ddd;
      width: 100%;
      font-size: 0.9rem;
      outline: none;
      appearance: none;
    }

    .register-btn {
      background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
      color: white;
      border: none;
      padding: 10px;
      border-radius: 25px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 8px;
      margin-left: 50px;
      font-size: 0.9rem;
      width: 200px;
    }

    .login-link {
      text-align: center;
      display: block;
      margin-top: 12px;
      font-size: 0.8rem;
      color: rgb(245, 187, 15);
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

    select {
      background-color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-section">
      <form action="database.php" method="POST">
        <div class="logo">🚗</div>
        <h2>Register to VBook</h2>
        <p>Start booking and managing your vehicles easily.</p>

        <label>Email</label>
        <div class="input-wrapper">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Enter your email" required />
        </div>

        <label>Role</label>
        <div class="input-wrapper">
          <i class="fas fa-user-tag"></i>
          <select name="role" required>
            <option value="" disabled selected>Select your role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </div>

        <label>Password</label>
        <div class="input-wrapper">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Create a password" required />
        </div>

        <button class="register-btn" name="create">Create Account</button>
        <a href="login.php" class="login-link">Already registered? Login here</a>
      </form>
    </div>

    <div class="info-section">
      <div class="icon-container">
        <i class="fas fa-car"></i>
      </div>
      <h2>Welcome to VBook</h2>
      <p>Your one-stop platform to book, track, and manage vehicles effortlessly. Whether you're a driver, customer, or admin — we've got you covered.</p>
    </div>
  </div>
</body>
</html>
