<?php
session_start();
unset($_SESSION['username1']);
unset($_SESSION['password']);
header("Location:Login1.php");
?>