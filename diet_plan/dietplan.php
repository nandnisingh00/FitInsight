<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Plan | FitInsight</title>

    <link rel="stylesheet" href="dietplan.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="page-glow glow-1"></div>
    <div class="page-glow glow-2"></div>

    <header class="navbar">
        <div class="logo">FitInsight</div>
        <nav class="nav-links">
            <a href="../dashboard.php">Dashboard</a>
            <a href="../workout.php" style="color:white;">← Back</a>
        </nav>
    </header>

    <main class="container">
        <section class="hero">
            <p class="hero-badge">Personal Nutrition</p>
            <h1>Diet Plan Section</h1>
            <p class="subtitle">
                Choose your meal plan and track your nutrition progress with a smarter,
                cleaner and more premium dashboard experience.
            </p>
        </section>

        <section class="plans-grid">
            <div class="card">
                <div class="card-icon">WL</div>
                <h3>Weight Loss Diet</h3>
                <p>Balanced low-calorie meals with high protein and fiber for sustainable fat loss.</p>
                <a href="weightloss.php">
                <button class="btn">View Plan</button>
</a>
            </div>

            <div class="card">
                <div class="card-icon">MG</div>
                <h3>Muscle Gain Diet</h3>
                <p>High-protein meals designed to support muscle growth and better recovery.</p>
                <a href="musclegain.php">
                <button class="btn">View Plan</button>
</a>
            </div>

            <div class="card">
                <div class="card-icon">BD</div>
                <h3>Balanced Diet</h3>
                <p>Healthy meals with the right mix of carbs, fats, vitamins, and protein.</p>
                <a href="balancediet.php">
                <button class="btn">View Plan</button>
</a>
            </div>

            <div class="card">
                <div class="card-icon">DP</div>
                <h3>Detox Plan</h3>
                <p>Light and refreshing meals to help you feel energized, refreshed, and active.</p>
                <a href="detoxdiet.php">
                <button class="btn">View Plan</button>
</a>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Nutrition Overview</h2>
                <p>Today’s quick summary</p>
            </div>

            <div class="stats-row">
                <div class="stat-card">
                    <span class="stat-value">1450</span>
                    <span class="stat-label">Calories Today</span>
                </div>

                <div class="stat-card">
                    <span class="stat-value">92g</span>
                    <span class="stat-label">Protein Intake</span>
                </div>

                <div class="stat-card">
                    <span class="stat-value">6</span>
                    <span class="stat-label">Meals Followed</span>
                </div>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Weekly Meal Tracking</h2>
                <p>Your consistency this week</p>
            </div>

            <div class="week-track">
                <div class="day-pill done">M</div>
                <div class="day-pill done">T</div>
                <div class="day-pill pending">W</div>
                <div class="day-pill done">T</div>
                <div class="day-pill cheat">F</div>
                <div class="day-pill done">S</div>
                <div class="day-pill pending">S</div>
            </div>
        </section>

        <section class="section-block graph-section">
            <div class="section-head">
                <h2>Nutrition Progress</h2>
                <p>Weekly calorie trend</p>
            </div>

            <div class="chart-card">
                <canvas id="dietChart"></canvas>
            </div>
        </section>
    </main>

    <script src="dietplan.js"></script>
</body>
</html>
<button class="btn" onclick="window.location.href='balanceddiet.html'">View Plan</button>