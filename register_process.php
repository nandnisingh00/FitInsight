<?php
session_start();
include 'db_connect.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password

// Check if email already exists
$check = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $check);

if(mysqli_num_rows($result) > 0){
    echo "Email already registered!";
} else {
    $insert = "INSERT INTO users (name,email,age,gender,password) VALUES ('$name','$email','$age','$gender','$password')";
    if(mysqli_query($conn, $insert)){
        // Registration successful — create session
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        $_SESSION['logged_in'] = true;

        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>