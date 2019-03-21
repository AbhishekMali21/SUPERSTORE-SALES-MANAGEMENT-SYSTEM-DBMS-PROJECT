<?php
include("session.php");
$aadhar = $_POST['select2'];
if (!empty($aadhar)) {
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
     $INSERT = "INSERT into strorders (DID,SID) values('$aadhar','$CustID')";
     mysqli_query($conn, $INSERT);
      header("location: sorders.php");
     }
    }

?>