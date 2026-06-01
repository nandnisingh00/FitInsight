<?php

session_start();

include("db_connect.php");

if(!isset($_SESSION['user_id'])){

    die("Login First");

}

$user_id = $_SESSION['user_id'];

$name = $_POST['yoga_name'];

$type = $_POST['yoga_type'];

$duration = $_POST['duration'];

$calories = $_POST['calories'];

$date = date("Y-m-d");

$sql = "INSERT INTO yoga_tracker
(user_id,yoga_name,yoga_type,duration,calories,yoga_date)

VALUES
('$user_id','$name','$type','$duration','$calories','$date')";

if(mysqli_query($conn,$sql)){

echo "<script>

alert('Yoga Saved Successfully');

window.location.href='yoga.php';

</script>";

}else{

echo mysqli_error($conn);

}

?>
