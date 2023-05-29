<?php 
session_start();
include("head.php"); ?>
</head>
<body>
    <div class="col-md-8 offset-md-2 info">
        <h1 class="text-center">THANKS FOR USING THE APPLICATION</h1>
        <p class="text-center">Your session has been logged out correctly.
        </p>
        <a href="index.php" class="btn btn-md text-center">RETURN TO MAIN PAGE</a>
    </div>
    <?php
    unset($_SESSION['logged_in']);
    unset($_SESSION['user']);
    unset($_SESSION['user_id']);
    unset($_SESSION['userType']);

    session_destroy();
    ?>

</body>
<?php

include("footer.php"); ?>