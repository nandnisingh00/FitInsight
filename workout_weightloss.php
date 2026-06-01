<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Weight Loss | FitInsight</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">

<style>

body{
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg,#0a2236,#156a97);
    color:white;
    margin:0;
}


/* HEADER */
header{
    display:flex;
    justify-content:space-between;
    padding:20px 40px;
}
h2{
     font-size: 24px;
    font-weight: 700;
    background: linear-gradient(to right, #a18cd1, #fbc2eb);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* TITLE */
.title{
    text-align:center;
    margin-top:20px;
    font-size: 20px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 8px;
}

/* GRID */
.exercise-container{
    display:grid;
    grid-template-columns: repeat(4,minmax(220px,1fr));
    gap:25px;
    padding:40px;
}

/* CARD */
.exercise-card{
    background: rgba(255,255,255,0.1);
    border-radius:15px;
    padding:20px;
    text-align:center;
    transition:0.3s;
}

.exercise-card:hover{
    transform:translateY(-5px);
}

/* IMAGE */
.exercise-card img{
    width:100%;
    height:300px;
    object-fit:fill;
    border-radius:10px;
}

/* BUTTON */
.exercise-card button{
    margin-top:10px;
    padding:8px 15px;
    border:none;
    background:#36afe9;
    color:white;
    border-radius:6px;
    cursor:pointer;
}
.exercise-card button:hover{
background:#88b6c9;
}

</style>
</head>

<body>

<header>
    <h2>FitInsight</h2>
    <a href="workout.php" style="color:white;">← Back</a>
</header>

<h1 class="title">Weight Loss Exercises</h1>

<div class="exercise-container">

<!-- CARD -->
<div class="exercise-card">
<img src="images/jumping_jack.jpg">
<h3>Jumping Jacks</h3>
<p>Full body cardio</p>
<a href="exercise_detail.php?ex=jumping_jacks">
<button>Start</button>
</a>
</div>

<div class="exercise-card">
<img src="images/squats.jpg">
<h3>Squats</h3>
<p>Lower body fat burn</p>
<a href="exercise_detail.php?ex=squats">
<button>Start</button>
</a>
</div>

<div class="exercise-card">
<img src="images/plank.jpg">
<h3>Plank</h3>
<p>Core strength</p>
<a href="exercise_detail.php?ex=plank">
<button>Start</button>
</a>
</div>

<div class="exercise-card">
<img src="images/burpees.jpg">
<h3>Burpees</h3>
<p>High intensity</p>
<a href="exercise_detail.php?ex=burpees">
<button>Start</button>
</a>
</div>
<div class="exercise-card">
<img src="images/jump_rope.jpg">
<h3>Jump Rope</h3>
<p>Intense calorie burn</p>
<a href="exercise_detail.php?ex=jump_rope">
<button>Start</button></a>
</div>

<div class="exercise-card">
<img src="images/mountain_climbers.jpg">
<h3>Mountain Climbers</h3>
<p>Core + Cardio blast</p>
<a href="exercise_detail.php?ex=mountain_climbers">
<button>Start</button></a>
</div>

<div class="exercise-card">
<img src="images/high_knees.jpg">
<h3>High Knees</h3>
<p>Fast fat burning cardio</p>
<a href="exercise_detail.php?ex=high_knees">
<button>Start</button></a>
</div>

<div class="exercise-card">
<img src="images/lunges.jpg">
<h3>Lunges</h3>
<p>Leg strenth & balance</p>
<a href="exercise_detail.php?ex=lunges">
<button>Start</button></a>
</div>

<div class="exercise-card">
<img src="images/bicycle_crunch.jpg">
<h3>Bicycle Crunch</h3>
<p>Abs fat burn</p>
<a href="exercise_detail.php?ex=bicycle_crunch">
<button>Start</button></a>
</div>

<div class="exercise-card">
<img src="images/leg_raises.jpg">
<h3>Leg Raises</h3>
<p>Lower abs strength</p>
<a href="exercise_detail.php?ex=leg_raises">
<button>Start</button></a>
</div>

<div class="exercise-card">
<img src="images/push_ups.jpg">
<h3>Push Ups</h3>
<p>Upper body strength</p>
<a href="exercise_detail.php?ex=pushups">
<button>Start</button></a>
</div>

<div class="exercise-card">
<img src="images/russian_twist.jpg">
<h3>Russian Twist</h3>
<p>Core & side abs</p>
<a href="exercise_detail.php?ex=russian_twist">
<button>Start</button></a>
</div>

</div>

</body>
</html>
