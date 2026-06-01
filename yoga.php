
<!DOCTYPE html>
<html>
<head>
    <title>Yoga Plans</title>
    <link rel="stylesheet" href="yoga.css">
    <style>
        body{
    margin:0;
    font-family:Poppins;
    background: linear-gradient(to bottom,#081b29,#0b2d48);
    color:white;
    min-height:100vh;
}

.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 40px;
}

.logo{
   font-size: 17px;
      font-weight: 700;
      background: linear-gradient(to right, #a18cd1, #fbc2eb);
      -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
      letter-spacing: 0.2px;
}

.back-btn{
    color:white;
    text-decoration:none;
    font-size:18px;
}

.title{
    text-align:center;
    margin-top:30px;
    font-size:42px;
}

.plans-container{
    display:flex;
    justify-content:center;
    gap:30px;
    margin-top:60px;
    flex-wrap:wrap;
}

.plan-card{
    width:300px;
    padding:40px 25px;
    border-radius:25px;
    background:rgba(0,140,255,0.15);
    text-align:center;
    text-decoration:none;
    color:white;
    transition:0.3s;
    box-shadow:0 0 25px rgba(0,0,0,0.25);
}

.plan-card:hover{
    transform:translateY(-10px);
}

.plan-card h2{
    margin-bottom:15px;
}

</style>
</head>

<body>

<div class="top-bar">

    <h2 class="logo">FitInsight</h2>

    <a href="../workout.php" class="back-btn">← Back</a>

</div>

<h1 class="title">Yoga Categories</h1>

<div class="plans-container">

    <a href="yoga_plan.php?type=beginner" class="plan-card">
    <h2>Beginner Yoga</h2>
    <p>Easy yoga poses for beginners</p>
</a>

<a href="yoga_plan.php?type=weightloss" class="plan-card">
    <h2>Weight Loss Yoga</h2>
    <p>Burn calories and improve stamina</p>
</a>

<a href="yoga_plan.php?type=stress" class="plan-card">
    <h2>Stress Relief Yoga</h2>
    <p>Relax body and mind</p>
</a>

<a href="yoga_plan.php?type=flexibility" class="plan-card">
    <h2>Flexibility Yoga</h2>
    <p>Improve flexibility and posture</p>
</a>

<a href="yoga_plan.php?type=meditation" class="plan-card">
    <h2>Meditation Yoga</h2>
    <p>Improve focus and inner peace</p>
</a>

<a href="yoga_plan.php?type=strength" class="plan-card">
    <h2>Strength Yoga</h2>
    <p>Build body strength and balance</p>
</a>

<a href="yoga_plan.php?type=backpain" class="plan-card">
    <h2>Back Pain Relief Yoga</h2>
    <p>Reduce back pain and stiffness</p>
</a>

<a href="yoga_plan.php?type=morning" class="plan-card">
    <h2>Morning Yoga</h2>
    <p>Fresh start for your day</p>
</a>

<a href="yoga_plan.php?type=sleep" class="plan-card">
    <h2>Sleep Yoga</h2>
    <p>Improve sleep quality naturally</p>
</a>

<a href="yoga_plan.php?type=advanced" class="plan-card">
    <h2>Advanced Yoga</h2>
    <p>Challenging yoga poses</p>
</a>

<a href="yoga_plan.php?type=power" class="plan-card">
    <h2>Power Yoga</h2>
    <p>Boost energy and endurance</p>
</a>

<a href="yoga_plan.php?type=prenatal" class="plan-card">
    <h2>Prenatal Yoga</h2>
    <p>Gentle yoga for pregnancy wellness</p>
</a>


</div>

</body>
</html>