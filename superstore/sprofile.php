<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
$query4 = "SELECT * from store where SID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['SID'];
              $para2 = $row4['SBRANCHNAME'];
              $para3 = $row4['SCITY'];
              $para4 = $row4['SREGION'];
              $para5 = $row4['SSTATE'];
              $para6 = $row4['SPCODE'];
              
?>
<!DOCTYPE html>
<html lang="en">

  <head>
<style>
    table {
    border-collapse: collapse;
    width: 90%;
    }

    th, td {
    padding: 8px;
    text-align:left;
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
      <center><h2 style="font-size:30px;color:Black">Store Profile</h2></center>
 </div></center>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-size:40px">"Store Login- Publix Mart"</h1>
         
<br>
    <div style="background-color:#B7950B">
     <center> 
      <center>
<table style="width:100%">
    <tr>
    <td>Store ID:</td>
    <td><?php echo "$para1"?></td>
   </tr>
   <tr>
    <td>Branch Name:</td>
    <td><?php echo "$para2"?></td>
   </tr>
   <tr>
    <tr>
    <td>City:</td>
    <td><?php echo "$para3"?></td>
   </tr>
    <td>Region:</td>
    <td><?php echo "$para4"?></td>
   </tr>
      <tr>
      <tr>
    <td>State:</td>
    <td><?php echo "$para5"?></td>
   </tr>
      <tr>
    <td>Pincode:</td>
    <td><?php echo "$para6"?></td>
   </tr>
 
  <tr><td></td><td>
  <a href="sprofileedit.php"><button>Edit Profile</button></a></td>
  </tr> </table>
  <br><br>
  </div>
   <br>
    </div>
        </div>
      </div>
    </header>
  </body>

</html>
