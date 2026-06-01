<?php
session_start();
include("db_connect.php");

$conn = mysqli_connect("localhost", "root", "", "fitinsight");
// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user from database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    $user = mysqli_fetch_assoc($result);

    // If you are storing hashed passwords, use this:
    if(password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['logged_in'] = true;
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Incorrect password
        echo "Invalid Email or Password!";
    }

} else {
    // Email not found
    echo "Invalid Email or Password!";
}
?>
