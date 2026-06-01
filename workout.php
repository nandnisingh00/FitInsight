<?php
session_start();
include("db_connect.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

/* TOTAL DAYS */
$q1 = mysqli_query($conn,"SELECT COUNT(DISTINCT date) as days FROM workout_tracker WHERE user_id='$user_id'");
$days = mysqli_fetch_assoc($q1)['days'] ?? 0;

/* TOTAL TIME */
$q2 = mysqli_query($conn,"SELECT SUM(duration) as time FROM workout_tracker WHERE user_id='$user_id'");
$time = mysqli_fetch_assoc($q2)['time'] ?? 0;

/* CALORIES */
$q3 = mysqli_query($conn,"SELECT SUM(calories) as cal FROM workout_tracker WHERE user_id='$user_id'");
$cal = mysqli_fetch_assoc($q3)['cal'] ?? 0;

/* STREAK */
$today = date("Y-m-d");

$query = mysqli_query($conn,"
SELECT DISTINCT date 
FROM workout_tracker 
WHERE user_id='$user_id'
ORDER BY date DESC
");

$streak = 0;

$first = mysqli_fetch_assoc($query);

if(!$first){
    $streak = 0;
}
else if($first['date'] != $today){
    $streak = 0;
}
else{

    mysqli_data_seek($query, 0);
    $prev_date = null;

    while($row = mysqli_fetch_assoc($query)){

        $current_date = $row['date'];

        if($prev_date == null){
            $streak++;
        }
        else{
            $diff = (strtotime($prev_date) - strtotime($current_date)) / (60*60*24);

            if($diff == 1){
                $streak++;
            } else {
                break;
            }
        }

        $prev_date = $current_date;
    }
}
$yoga_query = mysqli_query($conn, "SELECT SUM(duration) as total_yoga FROM yoga_tracker WHERE user_id='$user_id'");
$yoga = mysqli_fetch_assoc($yoga_query);
$total_yoga = $yoga['total_yoga'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FitInsight | Workout Section</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background:
        linear-gradient(rgba(10, 35, 57, 0.7), rgba(6, 21, 34, 0.82)),
        linear-gradient(135deg, #0a2236 0%, #0f3b59 45%, #156a97 100%);
      color: #ffffff;
    }

    .page-wrapper {
      min-height: 100vh;
      padding: 22px 42px 40px;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 58px;
    }

    .logo {
      font-size: 17px;
      font-weight: 700;
      background: linear-gradient(to right, #a18cd1, #fbc2eb);
      -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
      letter-spacing: 0.2px;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    nav a {
      text-decoration: none;
      color: #f5fbff;
      font-size: 12px;
      font-weight: 500;
      transition: 0.3s ease;
    }

    nav a:hover {
      color: #9ee4ff;
    }

    .main-content {
      max-width: 980px;
      margin: 0 auto;
      text-align: center;
    }

    .main-title {
      font-size: 20px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 8px;
    }

    .subtitle {
      font-size: 11px;
      color: #ebf8ff;
      font-weight: 500;
      margin-bottom: 32px;
    }

    .section-title {
      font-size: 18px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 22px;
    }

    .goals-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
      margin-bottom: 26px;
    }

    .goal-link {
      text-decoration: none;
      color: inherit;
      display: block;
    }

    .goal-card {
      background: rgba(130, 214, 255, 0.24);
      border: 1px solid rgba(255, 255, 255, 0.11);
      border-radius: 16px;
      padding: 26px 14px;
      box-shadow: 0 10px 22px rgba(0, 0, 0, 0.16);
      backdrop-filter: blur(7px);
      -webkit-backdrop-filter: blur(7px);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      min-height: 118px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .goal-link:hover .goal-card {
      transform: translateY(-5px);
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.20);
      cursor: pointer;
    }

    .goal-card h3 {
      font-size: 15px;
      font-weight: 600;
      color: #ffffff;
      margin-bottom: 12px;
    }

    .small-btn {
      display: inline-block;
      padding: 7px 16px;
      border-radius: 7px;
      border: none;
      background: linear-gradient(135deg, #1f8bc1, #36afe9);
      color: #ffffff;
      font-size: 11px;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(40, 157, 220, 0.32);
      transition: 0.25s ease;
    }

    .small-btn:hover {
      transform: scale(1.03);
    }

    .stats-strip {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(130, 214, 255, 0.18);
      border: 1px solid rgba(255, 255, 255, 0.10);
      border-radius: 16px;
      padding: 18px 25px;
      backdrop-filter: blur(7px);
      -webkit-backdrop-filter: blur(7px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.14);
      margin-bottom: 26px;
    }

    .stat-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
    }

    .stat-number {
      font-size: 22px;
      font-weight: 700;
      color: #ffffff;
    }

    .stat-label {
      font-size: 11px;
      color: #eefbff;
      margin-top: 4px;
      font-weight: 500;
    }

    .divider {
      width: 1px;
      height: 36px;
      background: rgba(255, 255, 255, 0.15);
    }

    .graph-box {
      width: 100%;
      max-width: 760px;
      margin: 0 auto;
      background: rgba(130, 214, 255, 0.20);
      border: 1px solid rgba(255, 255, 255, 0.10);
      border-radius: 20px;
      padding: 22px 22px 18px;
      box-shadow: 0 10px 22px rgba(0, 0, 0, 0.14);
      backdrop-filter: blur(7px);
      -webkit-backdrop-filter: blur(7px);
    }

    .graph-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 18px;
      gap: 12px;
    }

    .graph-header h3 {
      font-size: 22px;
      font-weight: 700;
      color: #ffffff;
      margin: 0;
    }

    .graph-select {
      background: rgba(255, 255, 255, 0.14);
      border: 1px solid rgba(255, 255, 255, 0.18);
      color: #ffffff;
      padding: 8px 14px;
      border-radius: 10px;
      outline: none;
      font-size: 13px;
    }

    .graph-select option {
      color: #000000;
    }

    .chart-wrapper {
      position: relative;
      height: 320px;
      width: 100%;
    }

    @media (max-width: 900px) {
      .goals-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .stats-strip {
        flex-wrap: wrap;
        gap: 14px;
        padding: 18px 16px;
      }

      .divider {
        display: none;
      }

      .stat-item {
        min-width: 40%;
      }
    }

    @media (max-width: 600px) {
      .page-wrapper {
        padding: 20px 18px 30px;
      }

      header {
        flex-direction: column;
        gap: 14px;
        margin-bottom: 36px;
      }

      nav {
        gap: 14px;
        flex-wrap: wrap;
        justify-content: center;
      }

      .goals-grid {
        grid-template-columns: 1fr;
      }

      .main-title {
        font-size: 18px;
      }

      .stats-strip {
        flex-direction: column;
      }

      .stat-item {
        width: 100%;
      }

      .graph-header {
        flex-direction: column;
        align-items: flex-start;
      }

      .graph-box {
        padding: 18px 14px;
      }

      .chart-wrapper {
        height: 260px;
      }
    }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <header>
      <div class="logo">FitInsight</div>
      <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="workout.php">Workout</a>
        <a href="health.php">Health</a>
        <a href="logout.php">Logout</a>
      </nav>
    </header>

    <main class="main-content">
      <h1 class="main-title">Workout Section</h1>
      <p class="subtitle">Your personalized fitness overview</p>

      <h2 class="section-title">Choose Your Goal</h2>

      <div class="goals-grid">
        <a href="workout_weightloss.php" class="goal-link">
          <div class="goal-card">
            <h3>Weight Loss</h3>
            <span class="small-btn">Start Workout</span>
          </div>
        </a>

        <a href="exercise_plans.php" class="goal-link">
          <div class="goal-card">
            <h3>Exercises</h3>
            <span class="small-btn">Start Workout</span>
          </div>
        </a>

        <a href="yoga.php" class="goal-link">
          <div class="goal-card">
            <h3>Yoga</h3>
            <span class="small-btn">Start Workout</span>
          </div>
        </a>

        <a href="diet_plan/dietplan.php" class="goal-link">
          <div class="goal-card">
            <h3>Diet Plans</h3>
            <span class="small-btn">View Plan</span>
          </div>
        </a>
      </div>

      <div class="stats-strip">
        <div class="stat-item">
          <span class="stat-number"><?php echo $days; ?></span>
          <span class="stat-label">Days Completed</span>
        </div>

        <div class="divider"></div>

        <div class="stat-item">
          <span class="stat-number"><?php echo $streak; ?></span>
          <span class="stat-label">Current Streak</span>
        </div>

        <div class="divider"></div>

        <div class="stat-item">
          <span class="stat-number"><?php echo $time; ?></span>
          <span class="stat-label">Total Time</span>
        </div>

        <div class="divider"></div>

        <div class="stat-item">
          <span class="stat-number"><?php echo $cal; ?></span>
          <span class="stat-label">Calories Burned</span>
        </div>
      </div>

      <div class="graph-box">
        <div class="graph-header">
          <h3>Activity Statistics</h3>
          <select class="graph-select">
            <option>Weekly</option>
            <option>Monthly</option>
          </select>
        </div>

        <div class="chart-wrapper">
          <canvas id="activityChart"></canvas>
        </div>
      </div>
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('activityChart').getContext('2d');

fetch("get_chart_data.php")
.then(response => response.json())
.then(data => {

    let labels = data.map(d => d.date);
    let durationData = data.map(d => d.duration);
    let calorieData = data.map(d => d.calories);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Workout Time (mins)',
                    data: durationData,
                    borderColor: '#36afe9',
                    backgroundColor: 'rgba(54,175,233,0.2)',
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Calories Burned',
                    data: calorieData,
                    borderColor: '#ff4db8',
                    backgroundColor: 'rgba(255,77,184,0.2)',
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

})
.catch(error => console.error("Error:", error));
</script>

</body>
</html>
