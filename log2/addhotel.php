<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="alert alert-success my-5">
      Welcome ! You are now signed in to your account.
    </div>
    <!-- User profile -->
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center">
        <h4 class="my-4">Hello, <?= htmlspecialchars($_SESSION["username"]); ?></h4>






        






        


        






























        <?php
# Include connection
require_once "./config.php";

# Define variables and initialize with empty values
$username_err = $email_err = $password_err = $name_err = $latitude_err = $longitude_err = $marker_err = $ustatus_err = "";
$username = $email = $password = $name = $latitude = $longitude = $marker =  $ustatus ="";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Validate username
    // Validation code for username

    # Validate email 
    // Validation code for email

    # Validate password
    // Validation code for password

    # Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter a name.";
    } else {
        $name = trim($_POST["name"]);
    }

    # Validate latitude
    if (empty(trim($_POST["latitude"]))) {
        $latitude_err = "Please enter latitude.";
    } else {
        $latitude = trim($_POST["latitude"]);
    }

    # Validate longitude
    if (empty(trim($_POST["longitude"]))) {
        $longitude_err = "Please enter longitude.";
    } else {
        $longitude = trim($_POST["longitude"]);
    }


    # Validate longitude
    if (empty(trim($_POST["ustatus"]))) {
      $ustatuse_err = "Please enter sta.";
  } else {
      $ustatus = trim($_POST["ustatus"]);
  }

    # Validate marker
    $marker = "purple-dot.png"; // Default value
    // No validation needed for a read-only field

    # If all validations pass, insert data into database
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($name_err) && empty($latitude_err) && empty($longitude_err) && empty($marker_err)  && empty($ustatus_err)) {
        // Prepare an insert statement for the names table
        $sql = "INSERT INTO locations2 (name, latitude, longitude, color, status) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            # Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_latitude, $param_longitude, $param_marker,  $param_ustatus);

            # Set parameters
            $param_name = $name;
            $param_latitude = $latitude;
            $param_longitude = $longitude;
            $param_marker = $marker;
            $param_ustatus = $ustatus;

            # Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Data inserted successfully
            } else {
                echo "<script>" . "alert('Oops! Something went wrong while inserting data. Please try again later.');" . "</script>";
            }

            # Close statement
            mysqli_stmt_close($stmt);
        }
    }

    # Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
    <script defer src="./js/script.js"></script>
</head>

<body>
    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    <h1>ADD HOTEL</h1>
                    <p>Please fill this form </p>
                    <!-- form starts here -->
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
                        <!-- Existing form fields -->
                       
                        
                        <!-- Add a new input field for name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $name; ?>">
                            <small class="text-danger"><?= $name_err; ?></small>
                        </div>
                        <!-- Add new input fields for latitude, longitude, and marker -->
                        <div class="mb-3">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" name="latitude" id="latitude"
                                value="<?= $latitude; ?>">
                            <small class="text-danger"><?= $latitude_err; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" name="longitude" id="longitude"
                                value="<?= $longitude; ?>">
                            <small class="text-danger"><?= $longitude_err; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="marker" class="form-label">Marker</label>
                            <input type="text" class="form-control" name="marker" id="marker" value="PURPLE<?= $marker; ?>">

                          </div>
                         
                        <div class="mb-3">
                            <label for="ustatus" class="form-label">ustatus</label>
                            <input type="text" class="form-control" name="ustatus" id="ustatus"
                                value="<?= $ustatus; ?>">
                            <small class="text-danger"><?= $ustatus_err; ?></small>
                        </div>

                        
                            <input type="submit" class="btn btn-primary form-control" name="submit" value="SUBMIT ">
                        </div>

                        <p class="mb-0">ADD MALLS? <a href="./addmall.php">CLICK</a></p>
                        <p class="mb-0">ADD SHOP? <a href="./addshop.php">CLICK</a></p>
                        <p class="mb-0">ADD RESTO? <a href="./addresto.php">CLICK</a></p>
                        <p class="mb-0">ADD HOTEL? <a href="./addhotel.php">CLICK</a></p>
<BR>

                    </form>
                    <!-- form ends here -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
















        

        










        <a href="./logout.php" class="btn btn-primary">Log Out</a>


      </div>
    </div>
  </div>
</body>

</html>