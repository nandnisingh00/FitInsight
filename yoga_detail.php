<?php

session_start();
include("db_connect.php");

if(!isset($_GET['name']) || !isset($_GET['type'])){
    die("Invalid yoga details");
}

$name = $_GET['name'];
$type = $_GET['type'];

/* YOGA DETAILS */

$details = [

"Mountain Pose" => [
    "image" => "mountain_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Improves posture and balance",
    "steps" => "Stand straight with hands at sides and breathe deeply",
    "tips" => "Keep spine straight"
],

"Child Pose" => [
    "image" => "child_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "2",
    "benefits" => "Relaxes body and mind",
    "steps" => "Sit back on heels and stretch arms forward",
    "tips" => "Breathe slowly"
],

"Sun Salutation" => [
    "image" => "sun_salutation.jpg",
    "difficulty" => "Medium",
    "rounds" => "5",
    "benefits" => "Full body workout and fat burn",
    "steps" => "Perform sequence of 12 yoga poses continuously",
    "tips" => "Maintain breathing rhythm"
],

"Boat Pose" => [
    "image" => "boat_pose.jpg",
    "difficulty" => "Medium",
    "rounds" => "4",
    "benefits" => "Strengthens core muscles",
    "steps" => "Balance body on hips with legs raised",
    "tips" => "Keep back straight"
],

"Plank Pose" => [
    "image" => "plank_pose.jpg",
    "difficulty" => "Medium",
    "rounds" => "3",
    "benefits" => "Improves core strength",
    "steps" => "Hold body in straight pushup position",
    "tips" => "Do not bend hips"
],

"Tree Pose" => [
    "image" => "tree_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Improves balance",
    "steps" => "Stand on one leg and join palms",
    "tips" => "Focus on one point"
],

"Cobra Pose" => [
    "image" => "cobra_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Improves spine flexibility",
    "steps" => "Lift upper body while lying on stomach",
    "tips" => "Do not strain lower back"
],

"Downward Dog" => [
    "image" => "downward_dog.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Full body stretch",
    "steps" => "Lift hips upward making inverted V shape",
    "tips" => "Keep heels pressed down"
],

"Lotus Pose" => [
    "image" => "lotus_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "5 mins",
    "benefits" => "Improves concentration",
    "steps" => "Sit cross-legged with straight spine",
    "tips" => "Relax shoulders"
],

"Corpse Pose" => [
    "image" => "corpse_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "10 mins",
    "benefits" => "Deep relaxation",
    "steps" => "Lie flat on back and relax body",
    "tips" => "Close eyes and breathe slowly"
],

"Cat Cow Pose" => [
    "image" => "cat_cow.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Improves spine flexibility",
    "steps" => "Alternate arching and rounding your back",
    "tips" => "Move slowly with breathing"
],

"Bridge Pose" => [
    "image" => "bridge_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Strengthens lower back",
    "steps" => "Lift hips upward while lying down",
    "tips" => "Keep feet flat"
],

"Easy Pose" => [
    "image" => "easy_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "5 mins",
    "benefits" => "Relaxation and meditation",
    "steps" => "Sit cross-legged comfortably",
    "tips" => "Keep spine straight"
],

"Standing Forward Bend" => [
    "image" => "forward_bend.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Improves flexibility",
    "steps" => "Bend forward touching toes",
    "tips" => "Do not lock knees"
],

"Seated Stretch" => [
    "image" => "seated_stretch.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Relaxes muscles",
    "steps" => "Stretch legs while seated",
    "tips" => "Breathe deeply"
],

"Chair Pose" => [
    "image" => "chair_pose.jpg",
    "difficulty" => "Medium",
    "rounds" => "4",
    "benefits" => "Strengthens thighs",
    "steps" => "Sit in imaginary chair position",
    "tips" => "Keep knees aligned"
],

"Warrior Pose" => [
    "image" => "warrior_pose.jpg",
    "difficulty" => "Medium",
    "rounds" => "4",
    "benefits" => "Improves stamina",
    "steps" => "Stretch legs and arms wide",
    "tips" => "Look forward steadily"
],

"Twisted Chair Pose" => [
    "image" => "twisted_chair.jpg",
    "difficulty" => "Medium",
    "rounds" => "3",
    "benefits" => "Burns calories",
    "steps" => "Twist upper body in chair pose",
    "tips" => "Keep spine straight"
],

"High Lunge" => [
    "image" => "high_lunge.jpg",
    "difficulty" => "Medium",
    "rounds" => "3",
    "benefits" => "Improves stamina",
    "steps" => "Lunge forward deeply",
    "tips" => "Balance body properly"
],

"Side Plank" => [
    "image" => "side_plank.jpg",
    "difficulty" => "Hard",
    "rounds" => "3",
    "benefits" => "Strengthens core",
    "steps" => "Balance body on one arm",
    "tips" => "Keep body straight"
],

"Breathing Exercise" => [
    "image" => "breathing_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "5 mins",
    "benefits" => "Reduces stress",
    "steps" => "Take deep slow breaths",
    "tips" => "Focus on breathing"
],

"Seated Twist" => [
    "image" => "seated_twist.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Improves digestion",
    "steps" => "Twist torso while seated",
    "tips" => "Move gently"
],

"Shoulder Stretch" => [
    "image" => "shoulder_stretch.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Relieves tension",
    "steps" => "Stretch shoulders slowly",
    "tips" => "Avoid sudden movement"
],

"Neck Relax Pose" => [
    "image" => "neck_relax.jpg",
    "difficulty" => "Easy",
    "rounds" => "2",
    "benefits" => "Reduces neck stress",
    "steps" => "Rotate neck gently",
    "tips" => "Move slowly"
],

"Calm Breathing" => [
    "image" => "calm_breathing.jpg",
    "difficulty" => "Easy",
    "rounds" => "5 mins",
    "benefits" => "Mental peace",
    "steps" => "Slow deep breathing exercise",
    "tips" => "Close eyes"
],

"Triangle Pose" => [
    "image" => "triangle_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Full body stretch",
    "steps" => "Stretch sideways touching foot",
    "tips" => "Keep legs straight"
],

"Butterfly Pose" => [
    "image" => "butterfly_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "4",
    "benefits" => "Improves hip flexibility",
    "steps" => "Join feet and flap knees",
    "tips" => "Sit upright"
],

"Camel Pose" => [
    "image" => "camel_pose.jpg",
    "difficulty" => "Medium",
    "rounds" => "3",
    "benefits" => "Chest opening",
    "steps" => "Bend backward holding heels",
    "tips" => "Support lower back"
],

"Puppy Pose" => [
    "image" => "puppy_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Spine stretch",
    "steps" => "Stretch arms forward on floor",
    "tips" => "Relax shoulders"
],

"Wide Leg Stretch" => [
    "image" => "wide_leg.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Leg flexibility",
    "steps" => "Stretch legs wide and bend",
    "tips" => "Do not force stretch"
],

"Half Split Pose" => [
    "image" => "half_split.jpg",
    "difficulty" => "Medium",
    "rounds" => "3",
    "benefits" => "Hamstring flexibility",
    "steps" => "Stretch one leg forward",
    "tips" => "Keep back straight"
],

"Thunderbolt Pose" => [
    "image" => "thunderbolt_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "5 mins",
    "benefits" => "Improves digestion",
    "steps" => "Sit on heels comfortably",
    "tips" => "Relax shoulders"
],

"Breathing Pose" => [
    "image" => "breathing_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "5 mins",
    "benefits" => "Mind relaxation",
    "steps" => "Practice controlled breathing",
    "tips" => "Focus on inhale-exhale"
],

"Prayer Pose" => [
    "image" => "prayer_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "2",
    "benefits" => "Mental calmness",
    "steps" => "Join palms at chest",
    "tips" => "Stand balanced"
],

"Moon Pose" => [
    "image" => "moon_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "3",
    "benefits" => "Mind relaxation",
    "steps" => "Stretch body sideways",
    "tips" => "Keep breathing steady"
],

"Zen Pose" => [
    "image" => "zen_pose.jpg",
    "difficulty" => "Easy",
    "rounds" => "10 mins",
    "benefits" => "Improves concentration",
    "steps" => "Meditate calmly seated",
    "tips" => "Close eyes gently"
],


];

/* CHECK EXIST */

if(!isset($details[$name])){
    die("Yoga details not found");
}

$yoga = $details[$name];

?>

<!DOCTYPE html>
<html>

<head>

<title><?php echo $name; ?></title>

<style>

body{
    margin:0;
    font-family:Poppins;
    background:linear-gradient(to bottom,#081629,#0b2d48);
    color:white;
}

.container{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.detail-card{
    width:450px;
    background:rgba(0,140,255,0.15);
    padding:30px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 0 25px rgba(0,0,0,0.3);
}

.detail-card img{
    width:100%;
    height:280px;
    object-fit:cover;
    border-radius:20px;
}

.detail-card h1{
    margin-top:20px;
}

.info{
    margin-top:15px;
    line-height:1.8;
}

.timer{
    font-size:55px;
    margin-top:20px;
    font-weight:bold;
}

.buttons{
    margin-top:20px;
}

.buttons button{
    padding:10px 20px;
    border:none;
    border-radius:10px;
    background:#00c3ff;
    color:white;
    cursor:pointer;
    margin:5px;
    font-size:16px;
}

.done-btn{
    margin-top:20px;
}

.done-btn button{
    background:#00b894;
    padding:12px 30px;
}

</style>

</head>

<body>

<div class="container">

<div class="detail-card">

<h1><?php echo $name; ?></h1>

<img src="images/<?php echo $yoga['image']; ?>">

<div class="info">

<p><b>Difficulty:</b> <?php echo $yoga['difficulty']; ?></p>

<p><b>Rounds:</b> <?php echo $yoga['rounds']; ?></p>

<p><b>Benefits:</b> <?php echo $yoga['benefits']; ?></p>

<p><b>Steps:</b> <?php echo $yoga['steps']; ?></p>

<p><b>Tips:</b> <?php echo $yoga['tips']; ?></p>

</div>

<div class="timer" id="timer">
30
</div>

<div class="buttons">

<button onclick="startTimer()">Start</button>

<button onclick="pauseTimer()">Pause</button>

<button onclick="resetTimer()">Reset</button>

</div>

<div class="done-btn">

<form action="save_yoga.php" method="POST">

<input type="hidden" name="yoga_name" value="<?php echo $name; ?>">

<input type="hidden" name="type" value="<?php echo $type; ?>">

<input type="hidden" name="minutes" value="30">

<button type="submit">
Mark as Done
</button>

</form>

</div>

</div>

</div>

<script>

let time = 30;
let timer;
let running = false;

function startTimer(){

    if(!running){

        running = true;

        timer = setInterval(function(){

            if(time > 0){

                time--;

                document.getElementById("timer").innerHTML = time;

            }else{

                clearInterval(timer);

            }

        },1000);

    }

}

function pauseTimer(){

    running = false;
    clearInterval(timer);

}

function resetTimer(){

    running = false;
    clearInterval(timer);

    time = 30;

    document.getElementById("timer").innerHTML = time;

}

</script>

</body>
</html>
