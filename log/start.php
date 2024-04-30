

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="start.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .center {
  margin: auto;
  width: 60%;
  padding: 10px;
}
</style>


</head>





<div class="center"C>
<h1>ADD HOTEL </h1>


<form name="registration" action="" method="post">
    
<input type="text" name="name" placeholder="Name of Place" required />
<input type="text" name="latitude" placeholder="Latitude" required />
<input type="text" name="longitude" placeholder="Longitude" required />
<input type="text" name="marker" placeholder="Color of Marker" required />
<input type="text" name="status" placeholder="Status" required />
<input type="submit" name="submit" value="submit" />

</form>


</div>





<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Assuming you've already established a database connection

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "locations";
$conn = new mysqli($locationshost, $locations) ;

if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $latitude = $_POST['latitude'];
   

    // SQL injection prevention: escape input
    $name = mysqli_real_escape_string($conn, $name);
    $latitude = mysqli_real_escape_string($conn, $latitude);
    

    // SQL insertion query
    $query = "INSERT INTO `locations4` (`name`, `latitude`) 
              VALUES ('$name', '$latitude')";

    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
























</html>
    