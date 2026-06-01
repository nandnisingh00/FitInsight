<?php
session_start();

$exercise = $_GET['ex'];

$data = [

"jumping_jacks" => [
"name"=>"Jumping Jacks",
"img"=>"images/jumping_jack.jpg",
"difficulty"=>"Easy",
"duration"=>30,
"rounds"=>3,
"benefits"=>"Burns calories, improves stamina",
"steps"=>"Jump while spreading arms and legs, then return",
"tips"=>"Keep breathing, maintain rhythm"
],

"squats" => [
"name"=>"Squats",
"img"=>"images/squats.jpg",
"difficulty"=>"Medium",
"duration"=>30,
"rounds"=>3,
"benefits"=>"Strengthens legs and glutes",
"steps"=>"Lower body like sitting, then stand",
"tips"=>"Keep back straight"
],

"plank" => [
"name"=>"Plank",
"img"=>"images/plank.jpg",
"difficulty"=>"Medium",
"duration"=>30,
"rounds"=>3,
"benefits"=>"Core strength",
"steps"=>"Hold body straight on elbows",
"tips"=>"Do not bend back"
],

"burpees" => [
"name"=>"Burpees",
"img"=>"images/burpees.jpg",
"difficulty"=>"Hard",
"duration"=>30,
"rounds"=>3,
"benefits"=>"Full body fat burn",
"steps"=>"Jump → squat → push-up → jump",
"tips"=>"Maintain pace"
],

"jump_rope" => [
"name" => "Jump Rope",
"img" => "images/jump_rope.jpg",
"difficulty" => "Easy",
"duration" => 30,
"rounds" => "3",
"benefits" => "High calorie burn",
"steps" => "Jump with rope rhythmically",
"tips" => "Land softly"
],

"mountain_climbers" => [
"name" => "Mountain Climbers",
"img" => "images/mountain_climbers.jpg",
"difficulty" => "Medium",
"duration" => 30,
"rounds" => "3",
"benefits" => "Core + cardio",
"steps" => "Run in plank position",
"tips" => "Keep core tight"
],

"high_knees" => [
"name" => "High Knees",
"img" => "images/high_knees.jpg",
"difficulty" => "Easy",
"duration" => 30,
"rounds" => "3",
"benefits" => "Fat burn + stamina",
"steps" => "Run lifting knees high",
"tips" => "Keep fast pace"
],

"lunges" => [
"name" => "Lunges",
"img" => "images/lunges.jpg",
"difficulty" => "Medium",
"duration" => 30,
"rounds" => "3",
"benefits" => "Leg strength",
"steps" => "Step forward and bend",
"tips" => "Keep balance"
],

"bicycle_crunch" => [
"name" => "Bicycle Crunch",
"img" => "images/bicycle_crunch.jpg",
"difficulty" => "Medium",
"duration" => 30,
"rounds" => "3",
"benefits" => "Abs fat burn",
"steps" => "Alternate elbow to knee",
"tips" => "Control movement"
],

"leg_raises" => [
"name" => "Leg Raises",
"img" => "images/leg_raises.jpg",
"difficulty" => "Easy",
"duration" => 30,
"rounds" => "3",
"benefits" => "Lower abs",
"steps" => "Lift legs slowly",
"tips" => "Do not jerk"
],

"pushups" => [
"name" => "Push Ups",
"img" => "images/push_ups.jpg",
"difficulty" => "Medium",
"duration" => 30,
"rounds" => "3",
"benefits" => "Upper body strength",
"steps" => "Lower and push body",
"tips" => "Keep straight body"
],

"russian_twist" => [
"name" => "Russian Twist",
"img" => "images/russian_twist.jpg",
"difficulty" => "Medium",
"duration" => 30,
"rounds" => "3",
"benefits" => "Core strength",
"steps" => "Twist side to side",
"tips" => "Control movement"
]

];

$ex = $data[$exercise];
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $ex['name']; ?></title>

<style>

body{
    font-family:Poppins;
    background:linear-gradient(135deg,#0a2236,#156a97);
    color:white;
    text-align:center;
}

.container{
    width:420px;
    margin:40px auto;
    background:rgba(255,255,255,0.1);
    padding:30px;
    border-radius:15px;
}

img{
    width:220px;
    border-radius:10px;
}

button{
    padding:10px 15px;
    margin-top:10px;
    border:none;
    background:#36afe9;
    color:white;
    border-radius:6px;
    cursor:pointer;
}

.timer{
    font-size:30px;
    margin:15px 0;
}

</style>
</head>

<body>

<div class="container">

<h2><?php echo $ex['name']; ?></h2>

<img src="<?php echo $ex['img']; ?>">

<p><b>Difficulty:</b> <?php echo $ex['difficulty']; ?></p>
<p><b>Rounds:</b> <?php echo $ex['rounds']; ?></p>
<p><b>Benefits:</b> <?php echo $ex['benefits']; ?></p>
<p><b>Steps:</b> <?php echo $ex['steps']; ?></p>
<p><b>Tips:</b> <?php echo $ex['tips']; ?></p>

<div class="timer" id="timer"><?php echo $ex['duration']; ?></div>

<button onclick="startTimer()">Start Timer</button>
<button onclick="pauseTimer()">Pause</button>
<button onclick="resetTimer()">Reset</button>


<form action="save_workout.php" method="POST">
<input type="hidden" name="exercise" value="<?php echo $ex['name']; ?>">
<input type="hidden" name="duration" value="<?php echo $ex['duration']; ?>">
<button type="submit">Mark as Done</button>
</form>

</div>

<script>

let time = <?php echo $ex['duration']; ?>;
let interval;

function startTimer(){

interval = setInterval(() => {

document.getElementById("timer").innerText = time;

time--;

if(time < 0){
clearInterval(interval);
alert("Workout Completed!");
}

},1000);

}

</script>

</body>
</html>
