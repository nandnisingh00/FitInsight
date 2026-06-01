<?php
session_start();
include("../db_connect.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$plan_type = $_POST['plan_type'];
$meal_name = $_POST['meal_name'];
$calories = $_POST['calories'];

$status = "Done";
$diet_date = date("Y-m-d");

$sql = "INSERT INTO diet_tracker
(user_id, plan_type, meal_name, calories, status, diet_date)
VALUES
('$user_id', '$plan_type', '$meal_name', '$calories', '$status', '$diet_date')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Diet Saved Successfully!');
        window.location.href='weightloss.php';
    </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
