<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balanced Diet | FitInsight</title>

    <link rel="stylesheet" href="balancediet.css">
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
            <p class="hero-badge">Daily Wellness Nutrition</p>
            <h1>Balanced Diet Plan</h1>
            <p class="subtitle">
                Maintain your health with a well-balanced meal plan that gives your body
                the right amount of protein, carbohydrates, fats, vitamins, and minerals.
            </p>
        </section>

        <section class="top-summary">
            <div class="summary-card highlight">
                <span class="summary-label">Daily Target</span>
                <span class="summary-value">2000 kcal</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Protein Goal</span>
                <span class="summary-value">100g</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Water Intake</span>
                <span class="summary-value">2.5L</span>
            </div>
            <div class="summary-card">
                <span class="summary-label">Meals Today</span>
                <span class="summary-value">5</span>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Today’s Meal Plan</h2>
                <p>Nutritious meals for stable energy and overall health</p>
            </div>

            <div class="meal-grid">
                <div class="meal-card">
                    <div class="meal-time">Breakfast</div>
                    <h3>Healthy Breakfast Plate</h3>
                    <p>Whole grain toast, boiled eggs or paneer, fruit, and a glass of milk.</p>
                    <span class="meal-calories">400 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Mid-Morning</div>
                    <h3>Fresh Snack</h3>
                    <p>Seasonal fruits with a handful of nuts for fiber and healthy fats.</p>
                    <span class="meal-calories">180 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Lunch</div>
                    <h3>Balanced Lunch Plate</h3>
                    <p>Rice or roti, dal, vegetables, curd, and grilled paneer or chicken.</p>
                    <span class="meal-calories">550 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Evening</div>
                    <h3>Light Refuel</h3>
                    <p>Yogurt, roasted chana, or a smoothie for light evening nourishment.</p>
                    <span class="meal-calories">200 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Dinner</div>
                    <h3>Simple Dinner Bowl</h3>
                    <p>Soup, roti, vegetables, and a moderate protein portion for a light finish.</p>
                    <span class="meal-calories">450 kcal</span>
                </div>

                <div class="meal-card tips-card">
                    <div class="meal-time">Tips</div>
                    <h3>Daily Reminder</h3>
                    <p>Keep portions balanced, avoid skipping meals, and include fresh foods daily.</p>
                    <span class="meal-calories accent-text">Eat mindfully</span>
                </div>
            </div>
        </section>

        <section class="dual-section">
            <div class="section-block half">
                <div class="section-head">
                    <h2>Nutrition Split</h2>
                    <p>Well-rounded macro balance</p>
                </div>

                <div class="macro-grid">
                    <div class="macro-card">
                        <span class="macro-value">35%</span>
                        <span class="macro-label">Protein</span>
                    </div>
                    <div class="macro-card">
                        <span class="macro-value">40%</span>
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
                    <p>Track your daily nutrition routine</p>
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
                <h2>Weekly Nutrition Balance</h2>
                <p>Your calorie consistency through the week</p>
            </div>

            <div class="chart-card">
                <canvas id="balancedDietChart"></canvas>
            </div>
        </section>
    </main>

    <script src="balancediet.js"></script>
    <link rel="stylesheet" href="balanceddiet.css">
<script src="balancediet.js"></script>
</body>
</html>