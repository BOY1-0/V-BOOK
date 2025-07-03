<!-- CREATING ACCOUNT -->


<?php 
$server = "localhost";
$user="root";
$pass ="";
$database="car booking"; 

$conn=mysqli_connect($server,$user,$pass,$database );


if(isSet($_POST['create'])){
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $role=mysqli_real_escape_string($conn,$_POST["role"]);
    $pass=mysqli_real_escape_string($conn,$_POST["password"]);
    $p=password_hash($pass, PASSWORD_DEFAULT);

   
   $Q="INSERT INTO users(email,role,PASSWORD)VALUES('$email','$role','$p')";
   
   If(mysqli_query($conn,$Q)){
     header("location:login.php");

}
}


// CHECKING IF USER IS CUSTOME OR ADMIN


session_start();

if(isSet($_POST['login'])){
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $pass=mysqli_real_escape_string($conn,$_POST["password"]);
    $p=password_hash($pass, PASSWORD_DEFAULT);

   
   $Q="SELECT * FROM users WHERE email='$email'";
   
   $r=mysqli_query($conn,$Q);
   if(mysqli_num_rows($r) > 0){
    $u=mysqli_fetch_assoc($r);

    if(password_verify($pass,$u['PASSWORD'])){
      $_SESSION['email']=$u['email'];
      $_SESSION['pass']=$u['PASSWORD'];
      $_SESSION['role']=$u['role'];
      
      if ($u['role']=="admin"){
        header("location:admin.php");
      }
      else{
           header("location:user.php");
      }
      echo "Logged in";
    }
   
    else{
      echo "Incorrect password";
    }
     }
     else{
      echo "You have no account";
     }   
   }

//    <!-- INSERTING REQUEST OF CUSTOMERS -->


   if(isSet($_POST['sendrequest'])){
    $cartype=mysqli_real_escape_string($conn,$_POST["cartype"]);
    $carplate=mysqli_real_escape_string($conn,$_POST["carplate"]);
    $carservice=mysqli_real_escape_string($conn,$_POST["carservice"]);
    $cardate=mysqli_real_escape_string($conn,$_POST["cardate"]);
    $carimage=mysqli_real_escape_string($conn,$_POST["carimage"]);
    
   
   $Q="INSERT INTO request(cartype,carplate,carservice,cardate,carimage)VALUES('$cartype',' $carplate','$carservice','$cardate','$carimage')";
   
   If(mysqli_query($conn,$Q)){
     header("location:user.php");
}
}


//    <!-- INSERTING CAR INFORMATION -->


   if(isSet($_POST['postcar'])){
    $carname=mysqli_real_escape_string($conn,$_POST["carname"]);
    $cardes=mysqli_real_escape_string($conn,$_POST["cardes"]);
    $carprice=mysqli_real_escape_string($conn,$_POST["carprice"]);
    $carimage=mysqli_real_escape_string($conn,$_POST["carimage"]);
    
   
   $Q="INSERT INTO carsinfo(carname,cardes,carprice,carimage)VALUES('$carname',' $cardes','$carprice','$carimage')";
   
   If(mysqli_query($conn,$Q)){
     header("location:admin.php");
}
}

// UPDATING ADMIN INFORMATION

if(ISSET($_POST['editcar'])){

    $ID=$_POST['i'];
    $carname=mysqli_real_escape_string($conn,$_POST["carname"]);
    $cardes=mysqli_real_escape_string($conn,$_POST["cardes"]);
    $carprice=mysqli_real_escape_string($conn,$_POST["carprice"]);
    $carimage=mysqli_real_escape_string($conn,$_POST["carimage"]);
    


    $q="UPDATE carsinfo SET carname='$carname',cardes='$cardes', carprice='$carprice',carimage='$carimage' WHERE ID='$ID'";
    if(mysqli_query($conn,$q)){
      header("location:admin.php");
    }    
   }

// UPDATING USER INFORMATION


if(ISSET($_POST['editrequest'])){

    $ID=$_POST['i'];
    $cartype=mysqli_real_escape_string($conn,$_POST["cartype"]);
    $carplate=mysqli_real_escape_string($conn,$_POST["carplate"]);
    $carservice=mysqli_real_escape_string($conn,$_POST["carservice"]);
    $cardate=mysqli_real_escape_string($conn,$_POST["cardate"]);
    $carimage=mysqli_real_escape_string($conn,$_POST["carimage"]);
    


    $q="UPDATE request SET cartype='$cartype',carplate='$carplate', carservice='$carservice',cardate='$cardate',carimage='$carimage' WHERE ID='$ID'";
    if(mysqli_query($conn,$q)){
      header("location:user.php");
    }    
   }



?>






