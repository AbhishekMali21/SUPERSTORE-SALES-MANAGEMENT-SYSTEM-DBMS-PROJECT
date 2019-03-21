<?php
$name = $_POST['name'];
$city = $_POST['city'];
$region = $_POST['region'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
if (!empty($name) || !empty($age) || !empty($gender)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "superstore";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $INSERT = "INSERT into store (SBRANCHNAME,SCITY,SREGION,SSTATE,SPCODE) values(?, ?, ?,?,?)";

     //Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssi", $name, $city,$region,$state,$pincode);
      $stmt->execute();
      header("location:stored.php");
     }
     $stmt->close();
     $conn->close();
    }

?>