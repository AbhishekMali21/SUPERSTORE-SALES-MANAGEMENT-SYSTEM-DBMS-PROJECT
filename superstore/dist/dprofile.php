<?php
include('session1.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");} // Redirecting To Home Page
$query4 = "SELECT * from dstbr where DID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['DID'];
              $para2 = $row4['DNAME'];
              $para3 = $row4['DTYPE'];
              $para4 = $row4['DPASS'];

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
    }</style>
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
      <center><h2 style="font-size:30px;color:Black">Profile</h2></center>
 </div></center>

    
         
        </div>
      </div>
    </header>
<br>
    <div style="background-color:#58D68D">
     <center> 
      <center>
<table style="width:70%">
    <tr>
    <td>Distributor ID:</td>
    <td><?php echo "$para1"?></td>
   </tr>
   <tr>
    <td>Distributor Name:</td>
    <td><?php echo "$para2"?></td>
   </tr>
    <tr>
    <td>Distribution Product Type:</td>
    <td><?php echo "$para3"?></td>
   </tr>
    
  <tr><td></td><td>
  <a href="dprofileedit.php"><button>Edit Profile</button></a></td>
  </tr> </table>
  <br><br>
  </div>
   <br>

    
  </body>

</html>
