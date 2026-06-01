<?php
session_start();

$name = $_GET['name'];
$plan = $_GET['plan'];

/* Different details for different exercises */

$exerciseDetails = [

    "Plank" => [
        "duration" => "30 sec",
        "difficulty" => "Medium",
        "rounds" => "3",
        "benefits" => "Improves core strength, posture, and balance.",
        "steps" => [
            "Keep your body straight",
            "Support body on forearms and toes",
            "Tighten your core muscles",
            "Breathe slowly and hold position"
        ]
    ],

    "Jumping Jacks" => [
        "duration" => "45 sec",
        "difficulty" => "Easy",
        "rounds" => "4",
        "benefits" => "Burns calories and improves full body cardio.",
        "steps" => [
            "Stand straight with feet together",
            "Jump and spread legs apart",
            "Raise arms overhead",
            "Return to starting position"
        ]
    ],

    "Squats" => [
        "duration" => "40 sec",
        "difficulty" => "Medium",
        "rounds" => "4",
        "benefits" => "Strengthens legs, glutes, and lower body.",
        "steps" => [
            "Stand with feet shoulder-width apart",
            "Lower hips like sitting on a chair",
            "Keep back straight",
            "Push back up slowly"
        ]
    ],

    "Burpees" => [
        "duration" => "30 sec",
        "difficulty" => "Hard",
        "rounds" => "3",
        "benefits" => "High calorie burn and improves endurance.",
        "steps" => [
            "Stand straight",
            "Drop into squat position",
            "Kick feet back into plank",
            "Return and jump upward"
        ]
    ]
];

/* Default if exercise not found */

$details = $exerciseDetails[$name] ?? [
    "duration" => "30 sec",
    "difficulty" => "Medium",
    "rounds" => "3",
    "benefits" => "Improves overall fitness and stamina.",
    "steps" => [
        "Maintain posture",
        "Do slowly",
        "Keep breathing",
        "Stay consistent"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name; ?></title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #071c2f, #0a3d62);
            color: white;
        }

        .detail-container {
            width: 80%;
            margin: 10px auto;
        }

        .details-box {
            background: rgba(255,255,255,0.08);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .detail-img {
            display: block;
            width: 400px;
            height: 260px;
            object-fit: fill;
            border-radius: 20px;
            margin: 0 auto 30px;
        }

        p {
            font-size: 16px;
            line-height: 1.7;
        }

        h3 {
            margin-top: 20px;
            font-size: 20px;
            color: #35c8ff;
        }


        .timer-box {
            margin-top: 20px;
            text-align: center;
            background: rgba(53,200,255,0.15);
            padding: 15px;
            border-radius: 15px;
        }

        #time {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .timer-box button {
            background: #35c8ff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 10px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            font-weight: 600;
        }

        .timer-box button:hover {
            background: #18b5ef;
        }

        .done-btn {
            background: #00d26a;
            border: none;
            padding: 14px 35px;
            border-radius: 10px;
            color: white;
            font-size: 17px;
            font-weight: 600;
            margin-top: 30px;
            cursor: pointer;
        }

        .done-btn:hover {
            background: #00b95d;
        }

        form {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<div class="detail-container">
    <div class="details-box">

        <h1><?php echo $name; ?></h1>

        <img src="images/<?php echo strtolower(str_replace(' ', '_', $name)); ?>.jpg" class="detail-img">

        <p><strong>Duration:</strong> <?php echo $details['duration']; ?></p>
        <p><strong>Difficulty:</strong> <?php echo $details['difficulty']; ?></p>
        <p><strong>Rounds:</strong> <?php echo $details['rounds']; ?></p>

        <h3>Benefits</h3>
        <p><?php echo $details['benefits']; ?></p>

        <h3>Steps</h3>
        <p>
            <?php foreach($details['steps'] as $step) { ?>
                <p><?php echo $step; ?></p>
            <?php } ?>
</p>

        <!-- TIMER -->

        <div class="timer-box">
            <h2 id="time">30</h2>

            <button onclick="startTimer()">Start</button>
            <button onclick="pauseTimer()">Pause</button>
            <button onclick="resetTimer()">Reset</button>
        </div>

        <!-- SAVE -->

        <form action="save_exercise.php" method="POST">

            <input type="hidden" name="goal" value="<?php echo $plan; ?>">
            <input type="hidden" name="workout_type" value="<?php echo $name; ?>">
            <input type="hidden" name="duration" value="30">
            <input type="hidden" name="calories" value="50">

            <button class="done-btn">Mark as Done</button>

        </form>

    </div>
</div>

<script src="script.js"></script>

</body>
</html>
