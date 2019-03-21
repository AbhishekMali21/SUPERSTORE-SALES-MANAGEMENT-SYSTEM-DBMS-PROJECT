<?php
include('session1.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
<style>
    table {
    border-collapse: collapse;
    width: 70%;
    }

    th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Distributor Login- Publix Mart</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand">Publix Mart</a>
        <a href="dhome.php"><h5>Home</h5></a>
        <a href="dprofile.php"><h5>Profile</h5></a>
        <a href="dorders.php"><h5>Orders</h5></a>
        <!--<a class="btn btn-primary" href="#">Sign In</a>-->
        
      </div>
    </nav>
    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Distributor Dashboard</h2></center>
  <b id="welcome" style="color:Black">Welcome : <i style="color:Black"><?php echo $login_session;?> | </i></b>
  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
  <b id="logout"><a href="logout1.php">Log Out</a></b>
 </div></center>
 <br>
 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Orders</h2></center>
 </div></center>
    <br>
<center> 
<div style="background-color:#AED6F1">
     <center>
      <h3>Recent Orders</h3>
      <table>
        <tr>
          <th>Order ID</th>
          <th>Store ID</th>
          <th>Order Date</th>
          <th>Category</th>
          <th>Payment Status</th>
          <th>Shipment Mode</th>
          <th>Shipment Status</th>
          <th>Order Details Update</th>
        </tr>
        <?php 
        
      $order59 ="SELECT s.*,m.DTYPE FROM strorders s , dstbr m where m.DID=$CustID and m.did=s.did";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["ORDID"]."</td><td>". $oss55["SID"] . "</td><td>". $oss55["ORDDATE"].
      "</td><td>". $oss55["DTYPE"]. 
    "</td><td>". $oss55["PMYSTAT"].
    "</td><td>". $oss55["SHPMODE"].
    "</td><td>". $oss55["SHPSTAT"].
        "</td><td><a href=\"dordupdate.php\">update</a></td></tr>";
      }
?>
      </table>
      <br>
    </div></center>
    <br>
   

    
  </body>

</html>
