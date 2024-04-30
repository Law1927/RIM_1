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






        






        


        






























                        <h1 class="mb-0">ADD MALLS? <a href="./addmall.php">CLICK</a></h1>
                        <h1 class="mb-0">ADD SHOP? <a href="./addshop.php">CLICK</a></h1>
                        <h1 class="mb-0">ADD RESTO? <a href="./addresto.php">CLICK</a></h1>
                        <h1 class="mb-0">ADD HOTEL? <a href="./addhotel.php">CLICK</a></h1>
<BR>

                    </form>
                    <!-- form ends here -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
















        

        










      </div>
    </div>
  </div>
</body>

</html>