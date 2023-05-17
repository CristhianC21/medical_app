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
<body id=body>
  <?php include("navbar.php")?>
  <section>
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class=" col-10  m-auto">
          <div class="card border-0 shadow">
            <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
              class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fi  ll-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <div class="card-body">
              <form action="">
                <input type="text" class="form-control my-3 py-6" name="username" placeholder="Username">
                <input type="password" class="form-control my-3 py-2" name="password" placeholder="Password">
            </div>
            <div class="text-center mt-3">
              <input type="submit" id="submit-button" class="btn btn-dark">
              <a style="color:#212A3E" class="nav-link" href="">Create an account</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</body>
<?php include("footer.php")?>