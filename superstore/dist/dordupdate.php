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
      <center><h2 style="font-size:30px;color:Black">Update Order Status</h2></center>
 </div></center>
   <!--
   <br><center> <div style="background-color:#AED6F1">

    <form method="POST"; action="">
  
<table style="width:70%">
    <tr>
    <td>Order ID:</td><td><?php echo "$para1"?></td>
    <td>Not Allowed</td>
   </tr>
   <tr>
    <td>Payment Status:</td>
    <td><input type="text" name="inputn" placeholder="<?php echo "$para2"?>"></td>
    <td><input type="submit" name="submitn"></td>
   </tr>
      <tr>
    <td>Shipment Mode:</td>
    <td><input type="text" name="inputpt" placeholder="<?php echo "$para3"?>"></td>
    <td><input type="submit" name="submitpt"></td>
  </tr>
    
   <tr>
   <td>Password</td>
    <td><input type="text" name="inputpa" placeholder="*******"</td>
    <td><input type="submit" name="submitpa"></td>
   </tr>
  </table>
</form></div></center>
  <br><br>
-->
<div style="background-color:#85C1E9">
    <h2 style="font-size:30px;color:Black"></h2>
    <center>
      <h4>Select:
<form method="POST" >
  
<?php 
      $query19 = "SELECT ORDID FROM strorders where DID='$CustID' ";
      $ses_sq29 = mysqli_query($conn, $query19);
      $select1= '<select style="color:Black" name="select2"><option selected hidden value="">  Order_ID  </option>';
      while($rs1 = mysqli_fetch_assoc($ses_sq29))
      {
      $select1.='<option value="'.$rs1['ORDID'].'">'.$rs1['ORDID'].'</option>';
      }
      $select1.='</select>';
      echo $select1;
     echo' <input style="color:Black" name="submitqp" type="submit" value="Submit"></h4>'; 
     $paraa2="";
     $paraa3="";
     $paraa4="";
     $paraa5="";
      if(isset($_POST['submitqp']))
       {
        $oidv = ($_POST['select2']);
        $queryod = "SELECT ORDID,PMYSTAT,SHPMODE,SHPSTAT from strorders where ORDID='$oidv' ";
              $ses_sq44 = mysqli_query($conn, $queryod);
              $row90 = mysqli_fetch_assoc($ses_sq44);
              $paraa2 = $row90['ORDID'];
              $paraa3 = $row90['PMYSTAT'];
              $paraa4 = $row90['SHPMODE'];
              $paraa5 = $row90['SHPSTAT'];
        $quer5="insert into t(temp) values('$paraa2')";
        mysqli_query($conn, $quer5);}
$a=",";
 
    echo '</form>';
if(isset($_POST['submitn']))
  {$updtname = ($_POST['inputn']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set PMYSTAT='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
    header("location: dorders.php");
  }
  if(isset($_POST['submitpt']))
  {$updtname = ($_POST['inputpt']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set SHPMODE='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
    header("location: dorders.php");
  }
  if(isset($_POST['submitprt']))
  {$updtname = ($_POST['inputprt']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set SHPSTAT='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
    header("location: dorders.php");
  }
?>
<form method="POST"; action="">
  
<table style="width:70%">
    <tr>
    <td>Order_ ID:</td><td><?php echo "$paraa2"?></td>
    <td>Not Allowed</td>
   </tr>
   <tr>
    <td>Payment Status:</td>
    <td><input type="text" name="inputn" placeholder="<?php echo "$paraa3"?>"></td>
    <td><input type="submit" name="submitn"></td>
   </tr>
      <tr>
    <td>Shipment Mode:</td>
    <td><input type="text" name="inputpt" placeholder="<?php echo "$paraa4"?>"></td>
    <td><input type="submit" name="submitpt"></td>
  </tr>
     <tr>
    <td>Shipment Status:</td>
    <td><input type="text" name="inputprt" placeholder="<?php echo "$paraa5"?>"></td>
    <td><input type="submit" name="submitprt"></td>
  </tr>
  </table>
</form></div></center>
  <br><br>
    </center>
    <br>
</div>
<br><br><br>

  
</body>
</html>