<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
$usename=$_POST['User_name'];
$password_1=$_POST['Pass_word'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (Username, Password)
VALUES ('$usename','$password_1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>