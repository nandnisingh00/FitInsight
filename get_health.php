<?php
session_start();
include("db_connect.php");

if(!isset($_SESSION['user_id'])){
    echo json_encode([]);
    exit();
}

$user_id = $_SESSION['user_id'];

$query = mysqli_query($conn,"
SELECT * FROM health_data 
WHERE user_id='$user_id'
ORDER BY created_at DESC
LIMIT 1
");

$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>
