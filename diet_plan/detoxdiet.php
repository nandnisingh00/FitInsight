<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detox Plan | FitInsight</title>

    <link rel="stylesheet" href="detoxdiet.css">

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
            <p class="hero-badge">Clean Nutrition</p>
            <h1>Detox Diet Plan</h1>
            <p class="subtitle">
                A light and refreshing meal plan focused on hydration, fresh foods,
                fiber-rich meals, and better daily energy.
            </p>
        </section>

        <section class="top-summary">
            <div class="summary-card highlight">
                <span class="summary-label">Daily Target</span>
                <span class="summary-value">1600 kcal</span>
            </div>

            <div class="summary-card">
                <span class="summary-label">Water Intake</span>
                <span class="summary-value">3.5L</span>
            </div>

            <div class="summary-card">
                <span class="summary-label">Fiber Goal</span>
                <span class="summary-value">30g</span>
            </div>

            <div class="summary-card">
                <span class="summary-label">Meals Today</span>
                <span class="summary-value">5</span>
            </div>
        </section>

        <section class="section-block">
            <div class="section-head">
                <h2>Today’s Detox Meal Plan</h2>
                <p>Fresh, light, and easy-to-follow meals</p>
            </div>

            <div class="meal-grid">
                <div class="meal-card">
                    <div class="meal-time">Morning</div>
                    <h3>Lemon Mint Water</h3>
                    <p>Warm water with lemon, mint leaves, and a few slices of cucumber.</p>
                    <span class="meal-calories">30 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Breakfast</div>
                    <h3>Fruit Yogurt Bowl</h3>
                    <p>Curd or yogurt with berries, apple slices, chia seeds, and nuts.</p>
                    <span class="meal-calories">280 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Lunch</div>
                    <h3>Green Veg Bowl</h3>
                    <p>Steamed vegetables, dal, brown rice, cucumber salad, and curd.</p>
                    <span class="meal-calories">430 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Evening</div>
                    <h3>Herbal Tea Snack</h3>
                    <p>Herbal tea with roasted makhana, sprouts, or fruit slices.</p>
                    <span class="meal-calories">180 kcal</span>
                </div>

                <div class="meal-card">
                    <div class="meal-time">Dinner</div>
                    <h3>Light Soup Bowl</h3>
                    <p>Vegetable soup with tofu, paneer, or boiled chickpeas for protein.</p>
                    <span class="meal-calories">350 kcal</span>
                </div>

                <div class="meal-card tips-card">
                    <div class="meal-time">Tips</div>
                    <h3>Daily Reminder</h3>
                    <p>Avoid packaged juices, fried foods, excess sugar, and late-night snacking.</p>
                    <span class="meal-calories accent-text">Stay hydrated</span>
                </div>
            </div>
        </section>

        <section class="dual-section">
            <div class="section-block half">
                <div class="section-head">
                    <h2>Detox Focus</h2>
                    <p>Today’s wellness balance</p>
                </div>

                <div class="macro-grid">
                    <div class="macro-card">
                        <span class="macro-value">40%</span>
                        <span class="macro-label">Hydration</span>
                    </div>

                    <div class="macro-card">
                        <span class="macro-value">35%</span>
                        <span class="macro-label">Fiber</span>
                    </div>

                    <div class="macro-card">
                        <span class="macro-value">25%</span>
                        <span class="macro-label">Protein</span>
                    </div>
                </div>
            </div>

            <div class="section-block half">
                <div class="section-head">
                    <h2>Meal Status</h2>
                    <p>Track your detox routine</p>
                </div>

                <div class="status-list">
                    <div class="status-item done">
                        <span>Morning Drink</span>
                        <span>Done</span>
                    </div>

                    <div class="status-item done">
                        <span>Breakfast</span>
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
                <h2>Weekly Hydration Progress</h2>
                <p>Your daily water intake this week</p>
            </div>

            <div class="chart-card">
                <canvas id="detoxChart"></canvas>
            </div>
        </section>

    </main>

    <script src="detoxdiet.js"></script>
</body>
</html>