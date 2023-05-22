<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/login.css">

  <title>MEDICAL SYSTEM</title>
</head>

<body id="body">
  <?php include("navbar.php") ?>

    <form action="">
      <input type="text" class="form-control my-3 py-6 textInput" name="username" placeholder="Username">
      <input type="password" class="form-control my-3 py-2 textInput" name="password" placeholder="Password">
      <div class="text-center mt-3">
        <input type="submit" id="submit-button" class="btn btn-dark">
        <a style="color:#212A3E" class="nav-link" href="">Create an account</a>
      </div>
    </form>
</body>
<?php include("footer.php") ?>