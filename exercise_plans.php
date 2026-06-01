<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>Exercise Plans</title>
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
.plan-container{
    display:grid;
    grid-template-columns: repeat(4,minmax(220px,1fr));
    gap:25px;
    padding:40px;
}

/* CARD */
.plan-card{
    background: rgba(255,255,255,0.1);
    border-radius:15px;
    padding:20px;
    text-align:center;
    transition:0.3s;
}

.plan-card:hover{
    transform:translateY(-5px);
}

/* IMAGE */
.plan-card img{
    width:100%;
    height:300px;
    object-fit:fill;
    border-radius:5px;
}

/* BUTTON */
.plan-card button{
    margin-top:10px;
    padding:8px 15px;
    border:none;
    background:#36afe9;
    color:white;
    border-radius:6px;
    cursor:pointer;
}
.plan-card button:hover{
background:#88b6c9;
}

   
    </style>
</head>

<body>
<header>
    <h2>FitInsight</h2>
    <a href="workout.php" style="color:white;">← Back</a>
</header>
<h1 class="title">Choose Your Fitness Plan</h1>

<div class="plan-container">

<!-- Core Strength -->
<div class="plan-card">
<img src="images/core_strength.webp">
<h3>Core Strength</h3>
<p>Build strong abs and improve balance</p>
<a href="plan_detail.php?plan=Core Strength">
<button>Start Plan</button>
</a>
</div>

<!-- Muscle Gain -->
<div class="plan-card">
<img src="images/muscle_gain.jpg">
<h3>Muscle Gain</h3>
<p>Build strength and muscle mass</p>
<a href="plan_detail.php?plan=musclegain">
<button>Start Plan</button>
</a>
</div>

<!-- Home Workout -->
<div class="plan-card">
<img src="images/home_workout.jpg">
<h3>Home Workout</h3>
<p>No equipment exercises</p>
<a href="plan_detail.php?plan=home">
<button>Start Plan</button>
</a>
</div>

<!-- Cardio & Endurance -->
<div class="plan-card">
<img src="images/cardio.jpg">
<h3>Cardio & Endurance</h3>
<p>Improve stamina and burn maximum calories</p>
<a href="plan_detail.php?plan=cardio">
<button>Start Plan</button>
</a>
</div>

</div>

</body>
</html>