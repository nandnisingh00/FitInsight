<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Gain Diet | FitInsight</title>

    <link rel="stylesheet" href="musclegain.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            <p class="hero-badge">Strength Nutrition</p>
            <h1>Muscle Gain Diet Plan</h1>
            <p class="subtitle">
                Build strength with a protein-rich meal plan designed to support muscle recovery,
                calorie surplus, and consistent growth.
            </p>
        </section>

        <section class="top-summary">
            <div class="summary-card highlight">
                <span class="summary-label">Daily Target</span>
                <span class="summary-value">2400 kcal</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Protein Goal</span>
                <span class="summary-value">140g</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Water Intake</span>
                <span class="summary-value">3.5L</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Meals Today</span>
                <span class="summary-value">6</span>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Today’s Meal Plan</h2>
                <p>High-protein meals for recovery and lean muscle growth</p>
            </div>

            <div class="meal-grid">
                <div class="meal-card">
                    <div class="meal-time">Breakfast</div>
                    <h3>Protein Oats Bowl</h3>
                    <p>Oats with milk, peanut butter, banana, whey protein, and mixed nuts.</p>
                    <span class="meal-calories">480 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Mid-Morning</div>
                    <h3>Egg or Paneer Snack</h3>
                    <p>Boiled eggs or grilled paneer with whole wheat toast and fruit.</p>
                    <span class="meal-calories">300 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Lunch</div>
                    <h3>Power Lunch Plate</h3>
                    <p>Rice, chicken/paneer, dal, vegetables, curd, and a fresh salad.</p>
                    <span class="meal-calories">620 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Pre-Workout</div>
                    <h3>Energy Snack</h3>
                    <p>Banana with peanut butter or yogurt smoothie for quick workout fuel.</p>
                    <span class="meal-calories">220 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Post-Workout</div>
                    <h3>Recovery Shake</h3>
                    <p>Protein shake with milk and dates to support faster muscle recovery.</p>
                    <span class="meal-calories">280 kcal</span>
                </div>

                <div class="meal-card tips-card">
                    <div class="meal-time">Dinner</div>
                    <h3>Protein Dinner Bowl</h3>
                    <p>Roti, grilled tofu/chicken, vegetables, and soup for a balanced finish.</p>
                    <span class="meal-calories">500 kcal</span>
                </div>
            </div>
        </section>

        <section class="dual-section">
            <div class="section-block half">
                <div class="section-head">
                    <h2>Nutrition Split</h2>
                    <p>Macro breakdown for muscle building</p>
                </div>

                <div class="macro-grid">
                    <div class="macro-card">
                        <span class="macro-value">45%</span>
                        <span class="macro-label">Protein</span>
                    </div>
                    <div class="macro-card">
                        <span class="macro-value">35%</span>
                        <span class="macro-label">Carbs</span>
                    </div>
                    <div class="macro-card">
                        <span class="macro-value">20%</span>
                        <span class="macro-label">Fats</span>
                    </div>
                </div>
            </div>

            <div class="section-block half">
                <div class="section-head">
                    <h2>Meal Status</h2>
                    <p>Track your intake for the day</p>
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
                    <div class="status-item done">
                        <span>Lunch</span>
                        <span>Done</span>
                    </div>
                    <div class="status-item pending">
                        <span>Pre-Workout</span>
                        <span>Pending</span>
                    </div>
                    <div class="status-item locked">
                        <span>Post-Workout</span>
                        <span>Upcoming</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Weekly Protein Intake</h2>
                <p>Your daily protein progress this week</p>
            </div>

            <div class="chart-card">
                <canvas id="muscleGainChart"></canvas>
            </div>
        </section>
    </main>

    <script src="musclegain.js"></script>
</body>
</html>