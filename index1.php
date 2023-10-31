<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="for.css">
    <link rel="icon" href="hospital.png" >
    <title>ForYourCare</title>
</head>

<body>

    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <img src="hospital.png" alt="" class="logo">
            <a class="navbar-brand" href="#">For<span>Your</span><span class="ca">Care</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#cont">Patient</a>
                    <a class="nav-link" href="#services-offered">Services</a>
                    <a class="nav-link" href="#g3">Contact Ous</a>
                    <?php if(isset($_SESSION['username1'])){
                       
                         echo  '<a href="logout.php"><button type="button" class="btn btn-dark">Logout</button></a>';  }
                        else{
                             echo '<a href="Login1.php"><button type="button" class="btn btn-dark">Login</button></a>';
                          
                        }
                                                              ?>
                    
                    <a href="Sign-Up.php"><button type="button" class="btn btn-warning">Sign-Up</button></a>
                </div>
            </div>
        </div>
    </nav>
    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="dental.jpg" class="d-block w-100" alt="..." style="height:500px;">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="l">Dental Care</h4><br><br>
                    <h5 class="o">One of the Top Dental care Hospitals in the world</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="national-cancer-institute-Jnd76TZTpao-unsplash.jpg" class="d-block w-100" alt="..."
                    style="height:500px;">
            </div>
            <div class="carousel-item">
                <img src="patient.jpg" class="d-block w-100" alt="..." style="height:500px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Services-->
    <section id="services-offered">
        <h2>Our <span>Services</span></h2>
        <hr><br><br><br>
        <div class="row">
            <div class="col-sm-3">
                <img src="user.png" alt="">
                <h5>Best treatment</h5>
                <p> Follow evidence-based principles for hospital design to improve patient safety and quality.</p>
            </div>
            <div class="col-sm-3">
                <img src="medical-house.png" alt="">
                <h5>Emergency Help</h5>
                <p> Basic, clinical, and health services research relevant to emergency care.</p>
            </div>
            <div class="col-sm-3">
                <img src="Medical staff.png" alt="">
                <h5>Medical Staff</h5>
                <p>Train hospital staff to communicate effectively as a team</p>
            </div>
            <div class="col-sm-3">
                <img src="ambulance.png" alt="">
                <h5>Qualified Doctor</h5>
                <p>One of the best doctors with outstanding Surgeons.</p>
            </div>
        </div>
    </section>
    <!--Why choose Ous?-->
    <section id="choose">
        <div class="coll">
            <div class="row">

                <h3 class="text-center"><span>Why Chose</span> Ous?</h3>
                <br><br>
                <div class="col-sm-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="hex">Clinical Excellence</h5>
                            We strive to convert distant medical possibilities to current procedures, aiding our
                            patients We
                            are
                            committed to fulfilling health aspirations of citizens across the globe.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="hex">Cutting-edge Technology</h5>
                            We embrace high precision technologies for giving you a world class healthcare experience.
                            We
                            also
                            bring
                            non-invasive treatments wherever possible, that go beyond cutting edge.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="hex">Personalized Care</h5>
                            We provide best-in-the-class healthcare experience with our high-precision technologies, and
                            try
                            to
                            suggest non-invasive treatments to keep our patients minds at ease.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="hex">With you in your Journey to better health</h5>
                            We provide exceptional service for your better well-being. Restoring hope in people is our
                            greatest
                            progress.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="hex">Unparalleled Patient Experience</h5>
                            Our International Patient Care Program offers extraordinary services for international
                            patients
                            and
                            their families. We aim to meet the needs and requirements of you and your family.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="hex">Quality Standards</h5>
                            We provide global access to advanced healthcare with simple and streamlined process.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Ous-->
    <div class="content">

        <section id="contact">
            <form class="row g-3 needs-validation" id="ous" method="post" action="" >
                <h3 class="text-center" id="g3">Contact <span>Ous</span></h3>
                <div class="row">
                    <p>To Request an Appointment Call 892-530-9541 or Use Contact Form</p>
                </div>
                <div class="row" id="pink">

                    <div class="col-sm-8">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstname"id="validationCustom01" required>
                    </div>

                </div><br>
                <div class="row" id="pink">
                    <div class="col-sm-8">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname"id="validationCustom02" required>
                    </div>
                </div><br>
                <div class="row" id="pink">
                    <div class="col-sm-8">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" name="username"id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row" id="pink">
                    <div class="col-sm-8">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" class="form-control" name="city"id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                </div><br>
                <div class="row" id="pink">
                    <div class="col-sm-8">
                        <label for="validationCustom04" class="form-label">State</label>
                        <select class="form-select" id="validationCustom04" name="state"required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                </div><br>
                <div class="row" id="pink">
                    <div class="col-sm-8">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" class="form-control" name="zip"id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div><br>
                <div class="row" id="pink">
                    <div class="col-sm-8">
                        <label for="validationCustom06" class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone"id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid phone No.
                        </div>
                    </div>
                </div><br>
                <div class="row" id="pink">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-4">
                    <button class="btn btn-primary" name="user_submit1">Please Contact Me</button>
                </div>
                
               
                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";


    if(isset($_POST['user_submit1']))
{
    if(isset($_SESSION['username1']))
{
 if(isset($_POST['username']) && isset($_POST['zip']) && isset($_POST['city']) && isset($_POST['phone']) && isset($_POST['state'])
                 &&    isset($_POST['firstname']) && isset($_POST['lastname']) )
                {
                $use_name = $_POST['username'];
                $zip = $_POST['zip'];
                $phone = $_POST['phone'];
                $first_name = $_POST['firstname'];
                $last_name = $_POST['lastname'];
                $city=$_POST['city'];
                $state=$_POST['state'];

}
                // Create connection

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
      }

   $sql = "INSERT INTO contact_name (firstname, lastname, username,City,State,zip,phone)
    VALUES ('$first_name','$last_name','$use_name','$city','$state','$zip','$phone')";

     if ($conn->query($sql) === TRUE) {
     echo " <h4>*We will contact you shortly to confirm an appointment
                    time convenient to your schedule.</h4>";
     } 
     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
            }

$conn->close();

}
else
{
    echo "<h4>*Please Login in order to contact Ous</h4>";
}
}
?>
 
    </div>
    </form>
    </section>
    <!-- Use a button to pause/play the video with JavaScript -->
    </div>




    <!--health details-->
    <section id="cont">
        <h4 class="text-center" id="g">HEALTH DETAILS</h4>
        <div class="row">
            <div class="col-sm-4">
                <form class="transbox" method="get" action="health_symptom.php">

                    <img src="stethoscope.png" alt="" class="set"><br><br><br><br>
                    <h6>ENTER YOUR SYMPTOM RELATED TYPE AND WE FIND YOUR DOCTOR</h6>
                    <label for="#type">Choose your Speciality:</label><br><br>
                    <select class="form-select" aria-label="Default select example" name="select_type">
                        <option>--Select--</option>
                        <option value="Dentist" >Dentist</option>
                        <option value="Gynecologist (OBGYN)" >Gynecologist (OBGYN)</option>
                        <option value="Orthopedic Surgeon" >Orthopedic Surgeon</option>
                        <option value="Dermatologist" >Dermatologist</option>
                        <option value="Psychologist" >Psychologist</option>
                        <option value="General Surgeon" >General Surgeon</option>
                        <option value="Ear Nose and Throat Doctor (ENT)" >Ear
                            Nose and Throat Doctor
                            (ENT)</option>
                        <option value="Plastic / Cosmetic Surgeon, P" name="select_type">Plastic / Cosmetic Surgeon, P
                        </option>
                    </select><br><br>
                    <button name="symptom" class="get">Submit</button><br><br>
                    <a href="About Ous.php#Specialist">View All Doctors</a><br>

                </form>
            </div>
            <div class="col-sm-4">
                <form class="appiont" method="get" action="appointment.php">
                    <img src="appointments.png" class="app"><br><br><br><br>
                    <h5>Make an Appointment</h5><br><br><br>
                    <button class="get" name="appointment">Get Appointment</button><br><br><br><br><br><br>
                </form>
            </div>
            <div class="col-sm-4">
                <form class="clinical">
                    <img src="microscope.png" alt="" class="mic"><br><br><br><br>
                    <h3>Clinical Tests</h3><br><br>
                    <a href="index1.php#g3"><button>Get Clinical Tests</button></a>
                </form>
            </div>

        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>-->


</body>
<!--footer-->
<div>
    <footer class="row " id="fot">
        <div class="col-sm-4">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <img src="hospital.png" alt="" width="40%">
            </a>
            <p class="text-muted">&copy; 2022 For Your Care. All rights reserved.| Website by healthcare success |
                Privacy policy | Sitemap</p>
        </div>

        <div class="col-sm-4">
            <h5 class="p">Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#g3" class="nav-link p-0 text-muted">ContactOus</a></li>
                <li class="nav-item mb-2"><a href="#choose" class="nav-link p-0 text-muted">WhyChooseOus</a></li>
                <li class="nav-item mb-2"><a href="About Ous.php" class="nav-link p-0 text-muted">About Ous</a>
                </li>
            </ul>
        </div>
        <form class="link">
            <h5 class="p1">Follow Ous</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="text1" href="#"><img src="twitter.png" alt=""></a></li>
                <li class="nav-item mb-2"><a class="text1" href="#"><img src="instagram.png" alt=""></a></li>
                <li class="nav-item mb-2"><a class="text1" href="#"><img src="facebook.png" alt=""></a></li>
            </ul>
        </form>



    </footer>
</div>

</html>