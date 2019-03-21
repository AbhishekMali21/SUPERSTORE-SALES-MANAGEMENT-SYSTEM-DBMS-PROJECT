<?php
include('login1.php'); // Includes Login Script
if(isset($_SESSION['login_user']))
{
header("location: dhome.php"); // Redirecting To Profile Page
}
?> 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Store Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
<style>

  .signup{
margin-left: 5%;
  width: 40%;
  background-color:#F0B27A;
   border-color:#BDC3C7;
   border-style: solid;
}
.login{

  width: 40%;
  background-color:#EDBB99;
 border-color:#BDC3C7;
 border-style: solid;
}
</style>
<link href="css/business-casual.min.css" rel="stylesheet">
  </head>
  <body>
   <br><br><br><br><br> <h1 class="site-heading text-center text-white d-none d-lg-block">
     <span class="site-heading-lower" style="color: White;">Distributor Login</span>
     <br>
      <span class="site-heading-upper text-primary mb-3"></span>
    </h1>   
<center>
  <div class="login">
           <br><center><h4>Login</h4></center>
              <form action="" method="POST">
  <table>
   <tr>
    <td>Distributor ID:</td>
    <td><input type="text" name="lsid" required></td>
   </tr>
   <tr>
    <td>Password:</td>
    <td><input type="password" name="lspass" required></td>
   </tr>
   <tr>
    <td><input name="submitq" type="submit" value="Login"></td>
   </tr>
   <span><?php echo $error; ?></span>
  </table>
 </form>
<br>
</div> </center>
</b></u></h2></div></body>
</html>
