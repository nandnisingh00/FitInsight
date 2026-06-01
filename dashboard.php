<?php
session_start();
include("db_connect.php");

/* Check if user logged in */
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

/* Get user email from session */
$email = $_SESSION['email'];

/* Fetch user data */
$query = "SELECT name,email,age,gender FROM users WHERE email='$email'";
$result = mysqli_query($conn,$query);
$user = mysqli_fetch_assoc($result);

$name = $user['name'];
$age = $user['age'];
$gender = $user['gender'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Dashboard | FitInsight</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<!-- NAVBAR -->

<nav>
<h1 class="logo">FitInsight</h1>

<ul>
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="workout.php">Workout</a></li>
<li><a href="health.php">Health</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
 <div class="welcome-section">
<h1>Welcome, <?php echo $name; ?>👋<h1>
    <p>Your personalized health overview</p>
</div>
<body>

<div class="card-container">

<!-- WORKOUT CARD -->

<div class="card">

<h3 class="card-title">Workout Section</h3>

<img src="images/workout.jpg" class="card-img">


<p class="card-text">Start your daily exercises and track your fitness.</p>

<a href="workout.php">
<button onclick="location.href='adddata.php'">Start Workout</button>
</a>

</div>


<!-- HEALTH CARD -->

<div class="card">

<h3 class="card-title">Health Analysis</h3>

<img src="images/health.png" class="card-img">

<p class="card-text">Analyze your health metrics and monitor your wellness.</p>

<a href="health.php">
<button onclick="location.href='adddata.php'">Check Health</button>
</a>

</div>


</div>

</section>


<script src="js/profile.js"></script>

</body>
</html>

