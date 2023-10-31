
<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sign-up.css">
    <link rel="icon" href="clipboard.png" type="image/x-icon">
    <title>Sign-Up</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="clipboard.png" alt="">
                Sign-<span>Up</span></a>
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
    </nav><br><br><br>
    <!--Sign-up-->
            

        <div class="container">
            <form class="sign" method="post" action="">
                <p>Create your account.It's free and takes only a minute.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="firstname">Firstname</label><br><br>
                        <input type="text" placeholder="Firstname" id="firstname" name="firstname" required><br><br>
                    </div>
                    <div class="col-sm-6">
                        <label for="lastname">Lastname</label><br><br>
                        <input type="text" placeholder="Lastname" id="lastname" name="lastname" required><br><br>
                    </div>
                </div>
                
                <label for="Username">Username</label><br><br>
                <input type="text" placeholder="Username" id="Username" name="User_name" required><br><br>
                <label for="phone">Phone</label><br><br>
                <input type="tel" placeholder="xxx-xxx-xxxx" id="phone" name="phone" required><br><br>
                <label for="date">DATE-OF-BIRTH</label><br><br>
                <input type="date" placeholder="DATE-OF-BIRTH" id="date" name="date" required><br><br>
                <label for="Password">Password</label><br><br>
                <input type="password" placeholder="Password" id="Password" name="Pass_word" required><br><br><br>
                <p>Choose the Gender </p>
                <input type="radio" id="male" value="Male" name="gender">
                <label for="male">Male</label><br>
                <input type="radio" id="female" value="Female" name="gender">
                <label for="female">Female</label><br><br>
                <button class="but" name="user_submit">Submit</button><br><br>

            <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hospital";

                


                if(isset($_POST['User_name']) && isset($_POST['Pass_word']) && isset($_POST['date']) && isset($_POST['phone']) && 
                     isset($_POST['firstname']) && isset($_POST['lastname']) )
                {
                $user_name = $_POST['User_name'];
                $pass_word = $_POST['Pass_word'];
                $date = $_POST['date'];
                $phone = $_POST['phone'];
                $first_name = $_POST['firstname'];
                $last_name = $_POST['lastname'];
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
            if(isset($_POST['user_submit']))
            {
                
                
                
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                   $sql = "SELECT phone, password FROM sign_up WHERE password='$pass_word' or phone='$phone';";
                   $result = $conn->query($sql);
                   if ($result->num_rows > 0) {
                    echo "This Account is Already Created or password is Already used. Please Create a new Account";
                    
                   }
                   else
                   {
                    function valid_phone($phone)
                      {
                        return preg_match('/^[0-9]{10}+$/', $phone);
                      }
                    if(valid_phone($phone))
                    {
                     $sql .= "INSERT INTO sign_up (first_name, last_name, phone,date_of_birth,password,Username)
                      VALUES ('$first_name','$last_name','$phone','$date','$pass_word','$user_name');";

                      $sql .= "INSERT INTO login(Username,Password)
                      VALUES ('$user_name','$pass_word')";  

                      if ($conn->multi_query($sql) === TRUE) {
                      echo "<h2>Account Created</h2>";
                      echo "<script> window.location.href='Login1.php'</script>";
                      
                                                             } 
                       else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                            } 
                    }
                    else
                    {
                     
                      echo "<style>h6{color:blue;text-decoration:2px underline red} </style><h6>*Enter the correct phone number</h6>";
                    }
                    
                   
           
                   }
               }
                   
                 
            else
            {
                echo "<style>h3{color:red;} </style><h3>Not Submitted</h3>";
            }
        }
             
                ?>
               
            </form>
           
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