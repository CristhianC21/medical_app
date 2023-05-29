<?php 
session_start();
include("head.php"); ?>
</head>
<body>
  <?php 

  include("navbar.php");
  include("connection.php"); ?>
  <form enctype="multipart/form-data" method="post" action="register.php">
    <div class="row mb-3">
      <div class="col">
        <label for="nameRegister">Name</label>
        <input type="text" class="form-control" id="nameRegister" name="nameRegister">
      </div>
      <div class="col">
        <label for="surnameRegister">Surname</label>
        <input type="text" class="form-control" id="surnameRegister" name="surnameRegister">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label for="emailRegister">Email</label>
        <input type="email" class="form-control" id="emailRegister" name="emailRegister">
      </div>
      <div class="col ">
        <label for="passwordRegister">Password</label>
        <input type="password" class="form-control" id="passwordRegister" name="passwordRegister">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label for="mobileRegister">Mobile Phone</label>
        <input type="number" class="form-control" id="mobileRegister" name="mobileRegister">
      </div>
      <div class="col">
        <label for="passwordRegister">Country</label>
        <select name="countryRegister" id="countryRegister" class="form-select form-select-md" aria-label=".form-select-sm example">
          <option value="0">Open this select menu</option>
          PHP TO RETRIEVE LIST OF COUNTRIES
          <?php
          
          $query = "SELECT country FROM countries";
          $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
          $rows = mysqli_num_rows($result);
          $start =1;
          while ($country = mysqli_fetch_assoc($result)) {
            
            echo "<option value='$start'>$country[country]</option>";
            $start = $star+1;
          }
          ?>
        </select>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label for="dobRegister">Date of Birth</label>
        <input type="date" class="form-control" id="dobRegister" name="dobRegister">
      </div>
      <div class="col">
        <input class="btn-outline-primary" name="profile_imageRegister" type="file" id="profile_imageRegister"><br><br>

      </div>
    </div>
    <div class="row">
      <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">SIGN IN </button>
    </div>
  </form>

  <?php
  $nameSurname_check = false;
  $email_check = false;
  $phone_check = false;
  $country_check = false;
  $password_check = false;

  if (isset($_POST['submit'])) {
    $name = $_POST['nameRegister'];
    $surname = $_POST['surnameRegister'];
    $email = $_POST['emailRegister'];
    $mobile = $_POST['mobileRegister'];
    $password = $_POST['passwordRegister'];
    $dob = $_POST['dobRegister'];
    $country = $_POST['countryRegister'];

    echo "You have chosend ". $country;

    if (empty($name) or empty($surname) or empty($email) or empty($mobile) or empty($password) or empty($dob) or empty($country)) {
      echo "EVERY FIELD HAS TO BE FILLED";
    } else {
      if (strlen($password) < 3) {
        echo "Password length has to be greater than 3.";
      } else {
        $password_check = true;
      }

      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_check = true;
      } else {
        echo "Email not valid.";
      }
      if($country == 0){
        echo "Please select a valid country.";
      }else{
        $country_check = true;
      }
      if ((ctype_alpha($name)) and (ctype_alpha($surname))) {
        $nameSurname_check = true;
      } else {
        echo "Name and surname have to be only string.";
      }
      if ((strlen($name) < 15) and (strlen($surname) < 15)) {
        $nameSurname_check = true;
      } else {
        echo "Name /Surname 15 characters maximum.";
      }

      $patients_queryCheckMail_mobile = "SELECT COUNT(*) FROM patients 
      WHERE email = '$email' or mobile = '$mobile'";
      $result = mysqli_query($database, $patients_queryCheckMail_mobile) or DIE("Error in query: " . mysqli_error($database));
      $matchesQuery = mysqli_fetch_row($result);
      $count = $matchesQuery[0];
      if ($count == 0) {
        echo "CORRECT";
        $email_check = true;
        $phone_check = true;
        //  CHECK FILES
        $newProfileName= $email;
        $extension = pathinfo($_FILES['profile_imageRegister']['name'], PATHINFO_EXTENSION);
        $newPhotoDir=  $mobile.".". $extension;
        if ($extension == "jpeg" or $extension == "jpg" or $extension == "png") {
          if (move_uploaded_file($_FILES['profile_imageRegister']['tmp_name'], 'profile_images/' .$newPhotoDir)) {
            echo "FILE UPLOADED<br>";
            echo $country;
          } else {
            echo "NO FILE UPLOADED";
          }
        } else {
          echo "DIFFERENT EXTENSION";
        }
        // --------------------------
      } else {
        echo "MAIL / PHONE ALREADY USED";
        $email_check = false;
        $phone_check = false;
      }
    }
  }

  if ($nameSurname_check == true and $country_check==true and $email_check == true and $phone_check == true and $password_check == true) {
    $query = "INSERT INTO patients (name, surname, email, mobile, password, dob, country_id, profile_img)
    VALUES ('$name', '$surname', '$email', '$mobile', '$password','$dob', '$country','$newPhotoDir')";
    $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
    $query = "INSERT INTO users (email, mobile, userType)
    VALUES ('$email', '$mobile', 'p')";
    $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
    
    header('location: patients/index.php');
        
  } else {
    // WHEN ANY FIELD HAVE AN ERROR
  }

  ?>

  <?php include("footer.php") ?>