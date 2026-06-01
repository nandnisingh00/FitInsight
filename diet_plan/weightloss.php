<?php
$conn = new mysqli("localhost", "root", "", "fitinsight");
$today = date("Y-m-d");
$result = $conn->query("SELECT meal FROM meal_tracking WHERE date='$today'");
$doneMeals = [];
while($user = $result->fetch_assoc()){
    $doneMeals[] = $user['meal'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Loss Diet | FitInsight</title>

    <!-- Connect CSS file -->
    <link rel="stylesheet" href="weightloss.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="page-glow glow-1"></div>
    <div class="page-glow glow-2"></div>

    <header class="navbar">
        <div class="logo">FitInsight</div>
        <nav class="nav-links">
            <a href="dietplan.php" style="color:white;">← Back</a>
        </nav>
    </header>

    <main class="container">
        <section class="hero">
            <p class="hero-badge">Personal Meal Plan</p>
            <h1>Weight Loss Diet Plan</h1>
            <p class="subtitle">
                Follow a structured meal plan designed to help you stay in a healthy calorie deficit
                while maintaining energy, nutrition, and consistency.
            </p>
        </section>

        <section class="top-summary">
            <div class="summary-card highlight">
                <span class="summary-label">Daily Target</span>
                <span class="summary-value">1500 kcal</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Protein Goal</span>
                <span class="summary-value">90g</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Water Intake</span>
                <span class="summary-value">3L</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Meals Today</span>
                <span class="summary-value">5</span>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Today’s Meal Plan</h2>
                <p>Simple and balanced meal schedule</p>
            </div>
<div class="meal-grid">
            <div class="meal-card">

    <div class="meal-time">Breakfast</div>

    <h3>Oats Bowl</h3>

    <p>
        Oats with skim milk, chia seeds,
        banana slices, and almonds.
    </p>

    <span class="meal-calories">320 kcal</span>

    <form action="save_diet.php" method="POST">
        <input type="hidden" name="plan_type" value="Weight Loss">
        <input type="hidden" name="meal_name" value="Breakfast">
        <input type="hidden" name="calories" value="320">

        <button type="submit" class="done-btn">
            Mark as Done
        </button>
    </form>

</div>


                
<div class="meal-card">
    <div class="meal-time">Mid-Morning</div>

    <h3>Fruit Snack</h3>

    <p>
        1 apple with a handful of roasted makhana or mixed seeds.
    </p>

    <span class="meal-calories">150 kcal</span>

    <form action="save_diet.php" method="POST">
        <input type="hidden" name="plan_type" value="Weight Loss">
        <input type="hidden" name="meal_name" value="Mid-Morning">
        <input type="hidden" name="calories" value="150">

        <button type="submit" class="done-btn">
            Mark as Done
        </button>
    </form>

</div>

    <div class="meal-card">

    <div class="meal-time">Lunch</div>

    <h3>Lean Protein Plate</h3>

    <p>
        Grilled paneer/chicken, brown rice, sautéed vegetables, and salad.
    </p>

    <span class="meal-calories">420 kcal</span>

    <form action="save_diet.php" method="POST">
        <input type="hidden" name="plan_type" value="Weight Loss">
        <input type="hidden" name="meal_name" value="Lunch">
        <input type="hidden" name="calories" value="420">

        <button type="submit" class="done-btn">
            Mark as Done
        </button>
    </form>

</div>

<!-- Evening Snack -->
<div class="meal-card">

    <div class="meal-time">Evening</div>

    <h3>Light Snack</h3>

    <p>
        Green tea with boiled sprouts or yogurt with cucumber.
    </p>

    <span class="meal-calories">140 kcal</span>

    <form action="save_diet.php" method="POST">
        <input type="hidden" name="plan_type" value="Weight Loss">
        <input type="hidden" name="meal_name" value="Evening Snack">
        <input type="hidden" name="calories" value="140">

        <button type="submit" class="done-btn">
            Mark as Done
        </button>
    </form>

</div>
        

 <!-- Dinner -->
<div class="meal-card">

    <div class="meal-time">Dinner</div>

    <h3>Light Dinner Bowl</h3>

    <p>
        Soup with stir-fried vegetables and tofu/paneer for protein.
    </p>

    <span class="meal-calories">360 kcal</span>

    <form action="save_diet.php" method="POST">
        <input type="hidden" name="plan_type" value="Weight Loss">
        <input type="hidden" name="meal_name" value="Dinner">
        <input type="hidden" name="calories" value="360">

        <button type="submit" class="done-btn">
            Mark as Done
        </button>
    </form>

</div>

<!-- Tips -->
<div class="meal-card tips-card">

    <div class="meal-time">Tips</div>

    <p>
        Avoid sugary drinks, eat slowly, and try to finish dinner early.
    </p>

    <span class="meal-calories accent-text">
        Stay consistent
    </span>

</div>
</div>
        </section>

        <section class="dual-section">
            <div class="section-block half">
                <div class="section-head">
                    <h2>Nutrition Split</h2>
                    <p>Today’s macro balance</p>
                </div>

                <div class="macro-grid">
                    <div class="macro-card">
                        <span class="macro-value">40%</span>
                        <span class="macro-label">Protein</span>
                    </div>
                    <div class="macro-card">
                        <span class="macro-value">35%</span>
                        <span class="macro-label">Carbs</span>
                    </div>
                    <div class="macro-card">
                        <span class="macro-value">25%</span>
                        <span class="macro-label">Fats</span>
                    </div>
                </div>
            </div>

            <div class="section-block half">
                <div class="section-head">
                    <h2>Meal Status</h2>
                    <p>Track daily completion</p>
                </div>

                <div class="status-list">
                    <div class="status-item done">
                        <span>Breakfast</span>
                        <span>Done</span>
                    </div>
                    <div class="status-item done">
                        <span>Mid-Morning</span>
                        <span>Done</span>
                    </div>
                    <div class="status-item pending">
                        <span>Lunch</span>
                        <span>Pending</span>
                    </div>
                    <div class="status-item pending">
                        <span>Evening Snack</span>
                        <span>Pending</span>
                    </div>
                    <div class="status-item locked">
                        <span>Dinner</span>
                        <span>Upcoming</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Weekly Calorie Trend</h2>
                <p>Your calorie control over the week</p>
            </div>

            <div class="chart-card">
                <canvas id="weightLossChart"></canvas>
            </div>
        </section>
    </main>

    <!-- Connect JS file -->
    <script src="weightloss.js"></script>
</body>
</html>