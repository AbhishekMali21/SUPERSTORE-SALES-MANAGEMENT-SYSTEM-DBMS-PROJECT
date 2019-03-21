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
 
<!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-size:40px">"Publix Mart"</h1>
            <h1 class="mb-5" style="font-size:40px">Administrator Login</h1>
 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Sales Report</h2></center>
         

<!--Dropdwn sectn for sales by type-->
<form method="POST">
    <center><table><h4>Sales by:
      <select name="ssalescat" >
        <option selected="" hidden="" value="None" >Category</option>
        <option value="SBRANCHNAME">Branch</option>
        <option value="SCITY">City</option>
        <option value="SREGION">Region</option>
        <option value="SSTATE">State</option>
        <input type="submit" name="submitsales" value="Next">
      </select></center>

    <?php
   
     if(isset($_POST['submitsales']))
       {$catsv = ($_POST['ssalescat']);
        $pl="Selected Category:";
        echo '<h5>',$pl,$catsv,'</h5></form>';
        $query1122 = "INSERT into t(temp) values ('$catsv')";
        mysqli_query($conn, $query1122);
        echo '<form method="POST"><h4>Choose:';
              $query1112 = "SELECT Distinct $catsv FROM store";
              $ses_sq2 = mysqli_query($conn,$query1112);
            $select12= '<select name="select2112">
               <option selected hidden>Select</option>';     
             while($rs12 = mysqli_fetch_assoc($ses_sq2))
              {
              $select12.='<option value="'.$rs12[$catsv].'">'.$rs12[$catsv].'</option>';
              }
              $select12.='</select><br><input name="submitcs2" type="submit" value="Next"></h4></form></table>';
              echo $select12,'</h4>';
}
      if(isset($_POST['submitcs2']))
           {
        $query1112 = "SELECT temp FROM t where tee=(select max(tee) from t)";
              $ses_sq2112 = mysqli_query($conn, $query1112);
        $rs12 = mysqli_fetch_assoc($ses_sq2112);
        $catsv=$rs12['temp'];
        
        $catsv1 = ($_POST['select2112']);echo $catsv1;
         echo '<center>
        <table>
        <tr>
          <th>Sales ID</th>
          <th>Sales Date</th>
          <th>Sales Cost</th>
          <th>Store_ID</th>
          <th>Store Name</th>
          <th>Store City</th>
        </tr>';
        echo $catsv,":",$catsv1;
      $order59 ="select sa.*,st.SBRANCHNAME,st.SCITY from sales sa,store st where sa.sid=st.sid";
      $food9 = mysqli_query($conn, $order59);
      
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SALESID"]."</td><td>". $oss55["SDATE"] . "</td><td>". $oss55["SCOST"]. "</td><td>".$oss55["SID"]."</td><td>".$oss55["SBRANCHNAME"]."</td><td>". $oss55["SCITY"]."</td></tr></div>";
      }
    } 
?>
</div>
        </div>
      </div>
    </header>
 </div></center>
  </body>

</html>
