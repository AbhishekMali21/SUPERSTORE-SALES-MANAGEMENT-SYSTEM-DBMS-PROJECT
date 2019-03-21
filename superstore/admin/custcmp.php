<?php
$name = $_POST['username'];
$age = $_POST['age'];
$gender = $_POST['gender'];
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
     $INSERT = "INSERT into dstbr (DNAME,DTYPE,DLOC) values(?, ?, ?)";

     //Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $name, $age, $gender);
      $stmt->execute();
      header("location:distd.php");
     }
     $stmt->close();
     $conn->close();
    }

?>