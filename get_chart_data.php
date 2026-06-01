<?php
session_start();
include("db_connect.php");

if(!isset($_SESSION['user_id'])){
    echo json_encode([]);
    exit();
}

$user_id = $_SESSION['user_id'];

$query = mysqli_query($conn,"
SELECT date, SUM(duration) as total_duration, SUM(calories) as total_calories
FROM workout_tracker
WHERE user_id='$user_id'
GROUP BY date
ORDER BY date ASC
");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = [
        "date" => $row['date'],
        "duration" => (int)$row['total_duration'],
        "calories" => (int)$row['total_calories']
    ];
}

echo json_encode($data);
?>
