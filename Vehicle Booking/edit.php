<?php 
if(!isset($_GET['i'])){
    header('location:admin.php');
}
$server="localhost";
$user="root";
$password="";
$database="car booking";

$conn=mysqli_connect($server,$user,$password,$database);
$id=$_GET['i'];
$q="SELECT * FROM carsinfo WHERE ID='$id'";
$result=mysqli_query($conn,$q);
$r=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Post Car Info</title>
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

    .form-section input,
    .form-section textarea {
      padding: 7px 10px;
      border-radius: 16px;
      border: 1px solid #ddd;
      margin-bottom: 10px;
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

        <input type="hidden" VALUE="<?=$r['ID'];?>" name="i"/>

        <label>Car Name / Title</label>
      <input type="text" id="carname" VALUE="<?=$r['carname'];?>" name="carname" placeholder="Enter note title..." required />

         <label>Description</label>
      <textarea id="cardes"   name="cardes" rows="5" placeholder="Write your note here..."><?=$r['cardes'];?></textarea>

             
        <label>Price</label>
      <input type="text" id="carprice" VALUE="<?=$r['carprice'];?>" name="carprice" placeholder="Enter note title..." required />

       
        <label>Image Link</label>
      <input type="text" id="carimage" VALUE="<?=$r['carimage'];?>" name="carimage" placeholder="Enter note title..." required />

        <button class="submit-btn" name="editcar">Post Car</button>
      </form>
    </div>

    <div class="info-section">
      <h2>Admin Panel</h2>
      <p>Use this form to upload car listings for users to view and book. Ensure all fields are accurate and the image is valid.</p>
    </div>
  </div>
</body>
</html>
