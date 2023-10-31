
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="appointment.css">
    <title>Appointment</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="hospital.png" alt=""><span class="about">Doctor</span> <span
                    class="ous">Details</span></a>
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
    
   
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

if(isset($_GET['appointment']))
{

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointment;";
$result = $conn->query($sql);
?>
<div class="container">
<h2 class="text-center" >DOCTOR SCHEDULE LIST</h2>
<p>*Please contact Ous Inorder to Confirm Appointment</p>
<a href="index1.php#g3"><button  id="ous" type="button">Contact Ous</button></a>
</div>
 <table class="tab">
      
        <tr class="head">
          <td>Doctor_Name</td>
          <td>Speciality</td>
          <td>Start-Time</td>
          <td>End-Time</td>
          <td>Scheduled-Day</td>
          <td>Scheduled-Date</td>
        </tr>

      
<?php
if ($result->num_rows > 0) {
  // output data of each row
 
  while($row = $result->fetch_assoc()) {
  
  ?>
      
                    <tr class="coll">
        <td><?php echo $row["Doctor_Name"];?></td>
        <td><?php echo $row["Speciality"];?></td>
        <td><?php echo $row["Start-Time"];?></td>
        <td><?php echo $row["End-Time"];?></td>
        <td><?php echo $row["Scheduled-Day"];?></td>
        <td><?php echo $row["Date"];?></td>
        </tr>
  <?php
  
    

 } 
} else {
  echo "0 results";
}
}
?>
</table>
<?php


$conn->close();
?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>