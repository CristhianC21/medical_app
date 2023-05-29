<?php
session_start();
include("head.php");
?>
<link rel="stylesheet" href="css/dash.css">
</head>

<body>
  <?php
  include("connection.php");
  include("navbar.php");
  ?>
  <div id="mainDiv">
    <div id="info">
      <?php
      if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        $query = "SELECT * FROM patients
                WHERE patient_id =$userId";

        $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
        if ($result->num_rows > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<img id="profileImage" src="profile_images/' . $row['profile_img'] . '">';
            echo '<p id="userName">' . $row['name'] . ' ' . $row['surname'] . '</p>';
          }
        }
      }
      ?>
    </div>
    <div id="buttonSection">
      <div class="row mt-3 mb-3">
        <a href="createAppointment.php" type="submit" name="submit" class="btn btn-primary btn-lg btn-block">CREATE A NEW APPOINTMENT</a>
      </div>
      <div class="row mb-3">
        <a href="#" type="submit" name="submit" class="btn btn-primary btn-lg">YOUR APPOINTMENTS</a>
      </div>
    </div>
  </div>

</body>

</html>
<?php include("footer.php") ?>