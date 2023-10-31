<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="password.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css">

    <title>Login</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-light bg-Success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="password.png" alt=""><span class="about">Login</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">About Ous</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index1.php#g3">Contact Ous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index1.php#choose">Why Choose Ous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index1.php#cont">Patient</a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!--Login-->
    <div class="container">
        <div class="row">
            <div class="col-sm-7" id="ac">
                <div class="right">
                    <div class="container">
                        <h2>New Here?</h2>
                        <p>Sign up here and find your respective doctor</p>
                        <img src="account.png" alt="" id="account"><br>
                        <a href="Sign-Up.php"><button class="sub">Sign-Up</button></a><br>
                    </div>
                </div>


            </div>
            <div class="col-sm-5">
                <form class="log" method="post" action="">
                    <h2 class="text-center">Login</h2><br>
                    <label for="Username">Username</label><br><br>
                    <input type="text" placeholder="Username" id="Username" name="User_name" required><br><br>
                    <label for="Password">Password</label><br><br>
                    <input type="password" placeholder="Password" id="Password" name="Pass_word" required><br><br>
                    <button class="but" name="submit">Submit</button>
                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
session_start();
if(isset($_POST['User_name']) && isset($_POST['Pass_word']))
{
$usename=$_POST['User_name'];
$password_1=$_POST['Pass_word'];
}
if(isset($_POST['submit']))
{

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Username, Password FROM login WHERE Password='$password_1' and Username='$usename'";

$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
    $row = $result->fetch_assoc();
    $_SESSION["username1"]=$row['Username'];
    $_SESSION["password"]=$row['Password'];
   echo "<script> window.location.href='index1.php'</script>";
}


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 
else{
    echo "<style>h6{color:blue;text-decoration:2px underline red} </style><h6>Enter Correct Credentials</h6>";
}
$conn->close();
}

?>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>