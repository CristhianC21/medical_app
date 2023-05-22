<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


  <link rel="stylesheet" href="css/index.css">

  <title>MEDICAL SYSTEM</title>
</head>

<body id="body">
  <?php 
    include("navbar.php");
    
    session_start();

    $_SESSION['user']="";  
    $_SESSION['userType']="";  

    include("connection.php");

    if($_POST){
      
    }
  
  
  ?>
  <div class="col-md-8 offset-md-2 info">
    <h1 class="text-center">MEDIAP</h1>
    <p class="text-center">The new way to make your appointment 
    </p>
    <a href="login.php" class="btn btn-md text-center">GET STARTED</a>
  </div>
</body>
<?php include("footer.php")?>