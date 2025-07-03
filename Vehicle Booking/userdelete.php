<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "car booking";

$conn = mysqli_connect($server, $user, $password, $database);

if (isset($_GET['d'])) {
    $ID = $_GET['d'];
    $q = "DELETE FROM request WHERE ID = '$ID'";
    mysqli_query($conn, $q);

    
    header("Location:user.php"); 
    
}    

?>
