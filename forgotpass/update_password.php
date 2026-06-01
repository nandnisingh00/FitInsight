<?php
session_start();
include '../db_connect.php';

$password = $_POST['password'];
$email = $_SESSION['email'];

$query = "UPDATE users SET password='$password' WHERE email='$email'";

mysqli_query($conn,$query);

echo "Password Updated Successfully. <a href='../login.php'>Login</a>";
?>