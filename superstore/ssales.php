<?php
include('session.php');
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

    <title>Store Login- Publix Mart</title>

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
        <a href="shome.php"><h5>Home</h5></a>
        <a href="sprofile.php"><h5>Profile</h5></a>
        <a href="ssales.php"><h5>Sales Report</h5></a>
        <a href="sorders.php"><h5>Store Orders</h5></a>
        <a href="sstock.php"><h5>Stock</h5></a>
        <!--<a class="btn btn-primary" href="#">Sign In</a>-->
        
      </div>
    </nav>
    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Store Dashboard</h2></center>
  <b id="welcome" style="color:Black">Welcome : <i style="color:Black"><?php echo $login_session;?> | </i></b>
  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
 </div></center>
 <br>
 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Store Sales Report </h2></center>
 </div></center>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-size:40px">"Store Login- Publix Mart"</h1>
          </div>
         
        </div>
      </div>
    </header>
    <br>
<center> 
<div style="background-color:#AED6F1">
     <center>
      <h3>Sales Entries</h3>
      <table>
        <tr>
          <th>Sales ID</th>
          <th>Sales Date</th>
          <th>Sales Cost</th>
        </tr>
        <?php 
        
      $order59 ="SELECT * FROM sales where SID=$CustID";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SALESID"]."</td><td>". $oss55["SDATE"] . "</td><td>". $oss55["SCOST"]. "</td></tr>";
      }
?>
      </table>
      <br>
    </div></center>
    <br>
<div style="background-color:#AED6F1">
     <center> 
      <center><h1 style="font-size:30px;color:Black">New Sales Entry</h1>
        <p><div style="background-color:lightcyan">
     <center> 
      </div>
        <div class="signup">
           <center>
  <form action="custcmp.php" method="POST">
  <table>
   <tr>
    <td>Sales Date(DD/MM/YYYY)</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr> 
    <td>Sales Cost</td>
    <td><input type="text" name="email" required></td>
   </tr>
   <tr><td></td>
    <td><input type="submit" value="Enter"></td>
   </tr>
   </center>
  </table>
 </form>
</center>
</div></p>
 </center>
</div>


    
  </body>

</html>
