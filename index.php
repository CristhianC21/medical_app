<?php include("head.php"); ?>
</head>
<body id="body">
  <?php
  session_start();
  $_SESSION = array();
  include("navbar.php");
  ?>
  <div class="col-md-8 offset-md-2 info">
    <h1 class="text-center">MEDIAP</h1>
    <p class="text-center">The new way to make your appointment
    </p>
    <a href="login.php" class="btn btn-md text-center">GET STARTED</a>
  </div>
</body>
<?php include("footer.php") ?>