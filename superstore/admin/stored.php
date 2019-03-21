<?php
include('session1.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Login- Publix Mart</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
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
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand">Publix Mart</a>
        <a href="dhome.php"><h5>Home</h5></a>
        <a href="sales.php"><h5>Sales Report</h5></a>
        <a href="distd.php"><h5>Distributor Details</h5></a>
        <a href="stored.php"><h5>Store Details</h5></a>
      </div>
    </nav>
    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Administrator Dashboard</h2></center>
  <b id="welcome" style="color:Black">Welcome : <i style="color:Black"><?php echo $login_session;?> | </i></b>
  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
  <b id="logout"><a href="logout1.php">Log Out</a></b>
 </div></center>
 <br>
 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Store Details</h2></center>
 </div></center>
  </body>


<div style="background-color:#AAB7B8">
     <center> 
<div style="background-color:#AAB7B8">
     <center>
      <table>
        <tr>
          <th>Store ID</th>
          <th>Branch Name</th>
          <th>Branch City</th>
          <th>Branch Region</th>
          <th>Branch State</th>
          <th>Pincode</th>
        </tr>
        
        <?php 
      $order59 ="SELECT * FROM store order by SID";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SID"]."</td><td>". $oss55["SBRANCHNAME"] . "</td><td>". $oss55["SCITY"]. "</td><td>".$oss55["SREGION"]."
    </td><td>".$oss55["SSTATE"]."
    </td><td>".$oss55["SPCODE"]."</td></tr>";
      }
?>

      </table>
      <br><br>
     </center>
</div>  
</div></center>
<br><br>
  </center>

<div style="background-color:#AAB7B8">
     <center> 
      <center><h2 style="font-size:30px;color:Black"> Register New Branch </h2>
        <p><div style="background-color:lightcyan">
     <center> 
      </div>
        <div class="signup">
           <center>
              <form action="custcmp1.php" method="POST">
  <table>
   <tr>
    <td>Branch Name</td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
    <td>City</td>
    <td><input type="text" name="city" required></td>
   </tr>
   <tr>
    <td>Region</td>
    <td><input type="text" name="region" required></td>
   </tr>
   <tr>
    <td>State</td>
    <td><input type="text" name="state" required></td>
   </tr>
   <tr>
    <td>Pincode</td>
    <td><input type="text" name="pincode" required></td>
   </tr>
   <tr><td></td>
    <td><input type="submit" value="Register New Branch"></td>
   </tr>
   </center>
  </table>
 </form>
</center>
</div></p>
 </center>
</div>

</html>
