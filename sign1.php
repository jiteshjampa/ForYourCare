 <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hospital";
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

                     $sql .= "INSERT INTO sign_up (first_name, last_name, phone,date_of_birth,password,Username)
                      VALUES ('$first_name','$last_name','$phone','$date','$pass_word','$user_name');";

                      $sql .= "INSERT INTO login(Username,Password)
                      VALUES ('$user_name','$pass_word')";
                   
                   
                      if ($conn->multi_query($sql) === TRUE) {
                      echo "<h2>Account Created</h2>";
                      include 'Login1.php';
                                                             } 
                       else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                            }
           
                   }
            }      
            else
            {
                echo "<style>h3{color:red;} </style><h3>Not Submitted</h3>";
            }

                ?>