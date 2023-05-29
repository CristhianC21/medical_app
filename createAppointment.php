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
    <form id="formsBack" enctype="multipart/form-data" method="post" action="register.php">
        <h2>MAKE YOUR NEW APPOINTMENT</h2>
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
                <select name="countryRegister" id="countryRegister" class="form-select form-select-md"
                    aria-label=".form-select-sm example">
                    <option value="0">Open this select menu</option>
                    PHP TO RETRIEVE LIST OF COUNTRIES
                    <?php

                    $query = "SELECT country FROM countries";
                    $result = mysqli_query($database, $query) or DIE("Error in query: " . mysqli_error($database));
                    $rows = mysqli_num_rows($result);
                    $start = 1;
                    while ($country = mysqli_fetch_assoc($result)) {

                        echo "<option value='$start'>$country[country]</option>";
                        $start = $star + 1;
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
                <input class="btn-outline-primary" name="profile_imageRegister" type="file"
                    id="profile_imageRegister"><br><br>

            </div>
        </div>
        <div class="row">
            <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">SIGN IN </button>
        </div>
    </form>

</body>

</html>
<?php include("footer.php") ?>