<?php 
if(!isset($_GET['i'])){
    header('location:user.php');
}
$server="localhost";
$user="root";
$password="";
$database="car booking";

$conn=mysqli_connect($server,$user,$password,$database);
$id=$_GET['i'];
$q="SELECT * FROM request WHERE ID='$id'";
$result=mysqli_query($conn,$q);
$r=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book a Vehicle Service - VBook</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      /* background: linear-gradient(to right, #c100fb, #ffcc33); */
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      background: white;
      width: 90%;
      max-width: 600px;
      height: auto;
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

    .form-section input {
      padding: 7px 10px;
      border-radius: 16px;
      border: 1px solid #ddd;
      margin-bottom: 10px;
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
    }

    .info-section h2 {
      margin-bottom: 10px;
      font-size: 1.2rem;
    }

    .info-section p {
      font-size: 0.8rem;
      line-height: 1.4;
    }
    a{
      text-declartion
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-section">
            <form  action="database.php" method="POST">

      <div class="logo">🛠️</div>
      <h2>Book a Vehicle Service</h2>
      <p>Fill in the details below to schedule your service</p>
      <input type="hidden" VALUE="<?=$r['ID'];?>" name="i"/>

      <label>Vehicle Type / Model</label>
      <input type="text" id="cartype" VALUE="<?=$r['cartype'];?>" name="cartype" placeholder="Enter note title..." required />

      <label>License Plate Number</label>
      <input type="text" id="carplate" VALUE="<?=$r['carplate'];?>" name="carplate" placeholder="Enter note title..." required />

      <label>Service Type</label>
      <input type="text" id="carservice" VALUE="<?=$r['carservice'];?>" name="carservice" placeholder="Enter note title..." required />

      <label>Preferred Date & Time</label>
      <input type="date" id="cardate" VALUE="<?=$r['cardate'];?>" name="cardate" placeholder="Enter note title..." required />

      <label>Image Link</label>
      <input type="text" id="carimage" VALUE="<?=$r['carimage'];?>" name="carimage" placeholder="Enter note title..." required />

      <button class="submit-btn" name="editrequest">Submit Booking Request</button>
    </div>

    <div class="info-section">
      <h2>Vehicle Service Made Easy</h2>
      <p>Book maintenance or repairs with ease. VBook helps you stay on track with your vehicle's care—fast and reliable every time.</p>
           </form>

    </div>
  </div>
</body>
</html>
