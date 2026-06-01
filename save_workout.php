<?php
session_start();
include("db_connect.php");

/* DEBUG MODE (REMOVE LATER) */
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* CHECK LOGIN */
if(!isset($_SESSION['email'])){
    die("❌ Not Logged In");
}

$email = $_SESSION['email'];

/* GET USER ID */
$user_query = mysqli_query($conn, "SELECT user_id FROM users WHERE email='$email'");

if(!$user_query){
    die("❌ User Query Failed: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($user_query);

if(!$user){
    die("❌ User Not Found");
}

$user_id = $user['user_id'];

/* GET FORM DATA */
$exercise = $_POST['exercise'] ?? '';
$duration = $_POST['duration'] ?? 0;

/* INSERT DATA */
$sql = "INSERT INTO workout_logs (user_id, exercise_name, duration, workout_date)
        VALUES ('$user_id', '$exercise', '$duration', CURDATE())";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('✅ Workout Saved Successfully!'); window.location.href='workout.php';</script>";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}
?>
