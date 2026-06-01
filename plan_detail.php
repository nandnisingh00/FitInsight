<?php
$plan = $_GET['plan'];

/* Plans Data */
$plans = [

"Core Strength" => [
["Plank","jumping_jack.jpg","Core Strength Exercise"],
["Side Plank","side_plank.jpg","Targets obliques"],
["Russian Twist","russian_twist.jpg","Burns belly fat"],
["Bicycle Crunch","bicycle_crunch.jpg","Abs workout"],
["Leg Raises","leg_raises.jpg","Lower abs focus"],
["Flutter Kicks","squats.jpg","Core endurance"],
["V-Ups","V_ups.jpg","Full core workout"],
["Mountain Climbers","mountain_climbers.jpg","Fat burn cardio"],
["Dead Bug","dead_bug.jpg","Core stability"],
["Heel Touches","heel_touches.jpg","Side abs"]
],

"musclegain" => [
["Push Ups","push_ups.jpg","Builds chest & upper body strength"],
["Pull Ups","pull_ups.jpg","Improves back & arm muscles"],
["Squats","squats.jpg","Strengthens legs & glutes"],
["Deadlift","deadlift.jpg","Full body strength exercise"],
["Bench Press","bench_press.jpg","Targets chest & triceps"],
["Lunges","lunges.jpg","Improves lower body balance"],
["Plank","plank.jpg","Core Strength Exercise"],
["Shoulder Press","shoulder_press.jpg","Builds shoulder strength"],
["Bicep Curl","bicep_curls.jpg","Targets biceps & arm muscles"],
["Tricep Dips","tricep_dips.jpg","Strengthens triceps & shoulders"]
],

"home" => [
["Jumping Jacks","jumping_jack.jpg","Full body warm-up cardio"],
["Sit Ups","sit_ups.jpg","Strengthens abdominal muscles"],
["Wall Sit","wall_sit.jpg","Improves leg endurance"],
["High Knees","high_knees.jpg","Boosts heart rate & stamina"],
["Push Ups","push_ups.jpg","Upper body strength workout"],
["Plank","plank.jpg","Core Strength Exercise"],
["Squats","squats.jpg","Strengthens legs & glutes"],
["Lunges","lunges.jpg","Improves lower body balance"],
["Glute Bridge","glute_kick.jpg","Targets glutes & lower back"],
["Step Ups","step-up.jpg","Improves leg strength & balance"]
],

"cardio" => [
["Jump Rope","jump_rope.jpg","Improves stamina & burns calories"],
["High Knees","high_knees.jpg","Boosts heart rate & stamina"],
["Mountain Climbers","mountain_climbers.jpg","Fat burn cardio"],
["Burpees","burpees.jpg","High intensity full body cardio"],
["Running in Place","running.webp","Easy indoor cardio workout"],
["Jumping Jacks","jumping_jack.jpg","Full body warm-up cardio"],
["Box Jumps","box_jump.jpg","Explosive leg power exercise"],
["Skaters","skaters.jpg","Improves agility & fat burn"],
["Butt Kicks","butt_kicks.jpg","Cardio warm-up for legs"],
["Sprint Intervals","sprint_intervals.jpg","High calorie burning exercise"]
]

];
$exerciseList = $plans[$plan];
?>

<!DOCTYPE html>
<html>
<head>
<title>Plan Details</title>
<link rel="stylesheet" href="style.css">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg,#0a2236,#156a97);
    color: white;
}

/* TOP BAR */
.top-bar {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 60px;
    box-sizing: border-box;
}

/* LOGO */
.logo {
    font-size: 24px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

/* BACK BUTTON */
.back-btn {
    color: white;
    text-decoration: none;
    font-size: 24px;
    font-weight: 600;
}

.back-btn:hover {
    color: #00c6ff;
}

/* PAGE TITLE */
.page-title {
    text-align: center;
    font-size: 20px;
    margin-top: 10px;
    margin-bottom: 40px;
    font-weight: 700;
}

/* EXERCISE CONTAINER */
.exercise-container {
    width: 92%;
    margin:auto;
    display: grid;
    grid-template-columns: repeat(4,minmax(220px,1fr));
    gap: 25px;
    padding: 40px;
    margin-top:30px;
}

/* CARD */
.exercise-card {
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    transition: 0.3s;
    min-height:300px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.exercise-card:hover {
    transform: translateY(-5px);
}

/* IMAGE */
.exercise-card img {
    width: 100%;
    height: 200px;
    object-fit: fill;
    border-radius: 10px;
}

/* TITLE */
.exercise-card h3 {
    font-size: 30px;
    margin: 20px 0 10px;
}

/* DESCRIPTION */
.exercise-card p {
    font-size: 18px;
    color: #dbeafe;
    margin-bottom: 20px;
}

/* BUTTON */
.exercise-card button {
    background: #00c6ff;
    border: none;
    padding: 12px 30px;
    border-radius: 10px;
    color: white;
    font-size: 17px;
    cursor: pointer;
    font-weight: 600;
}

.exercise-card button:hover {
    background: #0099cc;
}
</style>

</head>

<body>
<div class="top-bar">
    <h2 class="logo">FitInsight</h2>
    <a href="exercise_plans.php" style="color:white;">← Back</a>
</div>
<h1 class="page-title"><?php echo ucfirst(str_replace("_"," ",$plan)); ?> Plan</h1>

<div class="exercise-container">

<?php foreach($exerciseList as $ex){ ?>

<div class="exercise-card">

<img src="images/<?php echo $ex[1]; ?>">

<h3><?php echo $ex[0]; ?></h3>
<p><?php echo $ex[2]; ?></p>

<a href="plan_data.php?name=<?php echo urlencode($ex[0]); ?>&plan=<?php echo $plan; ?>">
<button>Start</button>
</a>

</div>

<?php } ?>

</div>

</body>
</html>
