<div class="container-fluid banner">
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar">
        <?php
        if (isset($_SESSION['logged_in'])) {
          echo '<div class="navbar-brand">
          <a class="navbar-brand" href="dashboard.php">Medical Appointments</a>
        </div>
          <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="">PROFILE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="thanks.php">LOG OUT</a>
          </li>
        </ul>';
        } else {
          // 1. Query para obtener imagen/nombre.
          // 1.1 si es admin poner valores
          echo '<div class="navbar-brand">
          <a class="navbar-brand" href="index.php">Medical Appointments</a>
        </div>
        <ul class="nav ">
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOG IN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">REGISTER</a>
          </li>
        </ul>';
        }
        ?>
      </nav>
    </div>
  </div>
