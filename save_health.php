<?php
session_start();
include("db_connect.php");

if(!isset($_SESSION['user_id'])){
    echo json_encode(["status"=>"error","message"=>"Login required"]);
    exit();
}

$user_id = $_SESSION['user_id'];

// Get POST data
$age = $_POST['age'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $_POST['bmi'];
$sugar = $_POST['sugar'];
$chol = $_POST['chol'];
$sys = $_POST['sys'];
$dia = $_POST['dia'];
$activity = $_POST['activity'];
$score = $_POST['score'];

// Insert into DB
$query = "INSERT INTO health_data 
(user_id, age, gender, height, weight, bmi, blood_sugar, cholesterol, systolic, diastolic, activity_level, health_score)
VALUES 
('$user_id','$age','$gender','$height','$weight','$bmi','$sugar','$chol','$sys','$dia','$activity','$score')";

if(mysqli_query($conn,$query)){
    echo json_encode(["status"=>"success"]);
}else{
    echo json_encode(["status"=>"error","message"=>mysqli_error($conn)]);
}
?>
