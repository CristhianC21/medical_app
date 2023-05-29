<?php include("head.php"); ?>
</head>

<body id="body">
  <?php
  session_start();
  $_SESSION = array();

  include("navbar.php");

  $_SESSION['user'] = "";
  $_SESSION['userType'] = "";
  $_SESSION['user_id'] = "";

  include("connection.php");
  ?>

  <form method="post" action="login.php">
    <input type="text" class="form-control my-3 py-6 textInput" name="username" placeholder="Username">
    <input type="password" class="form-control my-3 py-2 textInput" name="password" placeholder="Password">
    <div class="text-center mt-3">
      <input name="submit" type="submit" id="submit-button" class="btn btn-dark">
      <a style="color:#212A3E" class="nav-link" href="register.php">Create an account</a>
    </div>
  </form>
  <?php
  $username_valid = false;
  $password_valid = false;

  $userError = "";
  $passError = "";


  if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if (empty($user) or empty($pass)) {
      $userError = "User is not valid.";
      $passError = "Password is not valid.";
    } else {
      if (is_numeric($user) or filter_var($user, FILTER_VALIDATE_EMAIL)) {
        $username_valid = true;
      } else {
        $userError = "Username (email) invalid format.";
      }


      if (strlen($pass) < 3) {
        $passError = "Password length has to be greater than 3.";
      } else {
        $password_valid = true;
      }
    }
    if ($userError == False) {

    }
    if ($username_valid == true and $password_valid == true) {
      $query = "SELECT * FROM users 
          WHERE (email = '$user' or mobile = '$user')"; //Query to check if a email or password is an user
      $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
      $row = mysqli_num_rows($result);

      if ($row == 1) {
        $utype = $result->fetch_assoc()['userType'];
        echo "$utype";
        if ($utype == 'p') { //If userType is a patient
          $query_id = "SELECT patient_id FROM patients
          WHERE (email = '$user' or mobile = '$user') and password ='$pass'";
          $result = mysqli_query($database, $query_id) or DIE("Error in query: " . mysqli_error($database));
          $user_id = $result->fetch_assoc()['patient_id'];
          $user_id = strval($user_id);

          $query = "SELECT * FROM patients
                WHERE (email = '$user' or mobile = '$user') and password ='$pass'";
          $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
          $row = mysqli_fetch_row($result);
          $count = $row[0];
          if ($count > 0) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user'] = $user;
            $_SESSION['userType'] = 'p';

            $_SESSION['logged_in'] = "YES";
            header('location: dashboard.php');
          } else {
            echo "error";
          }
        } elseif ($utype == 'd') {
          $query = "SELECT * FROM doctors
                WHERE (email = '$user' or mobile = '$user') and password ='$pass'";
          $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
          $row = mysqli_fetch_row($result);
          $count = $row[0];
          if ($count > 0) {
            $_SESSION['user'] = $user;
            $_SESSION['userType'] = 'd';
            $_SESSION['logged_in'] = "YES";
            header('location: dashboard.php');
          } else {
            echo "error";
          }
        } elseif ($utype == 'a') {
          $query = "SELECT * FROM administrators
                WHERE email = '$user' and password ='$pass'";
          $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
          $row = mysqli_fetch_row($result);
          $count = $row[0];
          if ($count > 0) {
            $_SESSION['user'] = $user;
            $_SESSION['userType'] = 'a';

            $_SESSION['logged_in'] = "YES";
            header('location: dashboard.php');
          } else {
            echo "error";
          }
        }
      }
    }
  }
  ?>
</body>
<?php include("footer.php") ?>