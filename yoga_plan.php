<?php

$type = $_GET['type'];

$plans = [

"beginner" => [

["Mountain Pose","mountain_pose.jpg","Improves posture and balance"],
["Child Pose","child_pose.jpg","Relaxing beginner yoga"],
["Cat Cow Pose","cat_cow.jpg","Improves flexibility"],
["Tree Pose","tree_pose.jpg","Enhances body balance"],
["Bridge Pose","bridge_pose.jpg","Strengthens lower back"],
["Easy Pose", "easy_pose.jpg", "Simple meditation pose"],
["Standing Forward Bend", "forward_bend.jpg", "Improves flexibility"],
["Seated Stretch", "seated_stretch.jpg", "Relaxes muscles"]

],

"weightloss" => [

["Sun Salutation","sun_salutation.jpg","Full body fat burn yoga"],
["Boat Pose","boat_pose.jpg","Burns belly fat"],
["Plank Pose","plank_pose.jpg","Strengthens core"],
["Chair Pose","chair_pose.jpg","Leg workout yoga"],
["Warrior Pose","warrior_pose.jpg","Boosts stamina"],
["Twisted Chair Pose", "twisted_chair.jpg", "Burns calories fast"],
["High Lunge", "high_lunge.jpg", "Improves stamina"],
["Side Plank", "side_plank.jpg", "Strengthens core"]

],

"flexibility" => [

["Cobra Pose","cobra_pose.jpg","Improves spine flexibility"],
["Downward Dog","downward_dog.jpg","Full body stretch"],
["Triangle Pose","triangle_pose.jpg","Stretching yoga"],
["Butterfly Pose","butterfly_pose.jpg","Hip flexibility"],
["Camel Pose","camel_pose.jpg","Chest opening"],
["Puppy Pose", "puppy_pose.jpg", "Spine stretch"],
["Wide Leg Stretch", "wide_leg.jpg", "Improves hamstring flexibility"],
["Half Split Pose", "half_split.jpg", "Leg flexibility"]

],

"meditation" => [

["Lotus Pose","lotus_pose.jpg","Deep meditation pose"],
["Corpse Pose","corpse_pose.jpg","Relaxing yoga"],
["Thunderbolt Pose","thunderbolt_pose.jpg","Improves digestion"],
["Breathing Pose","breathing_pose.jpg","Mind relaxation"],
["Easy Pose","easy_pose.jpg","Stress relief yoga"],
["Prayer Pose", "prayer_pose.jpg", "Mental calmness"],
["Moon Pose", "moon_pose.jpg", "Mind relaxation"],
["Zen Pose", "zen_pose.jpg", "Improves concentration"]

],

"strength" => [

["Side Plank","side_plank.jpg","Improves arm strength"],
["Crow Pose","crow_pose.jpg","Balance and power"],
["Forearm Plank","forearm_plank.jpg","Core strength"],
["Warrior III","warrior3.jpg","Leg stability yoga"],
["Dolphin Pose","dolphin_pose.jpg","Shoulder strength"],
["Wheel Pose", "wheel_pose.jpg", "Strengthens back"],
["Reverse Plank", "reverse_plank.jpg", "Arm and shoulder strength"],
["Eight Angle Pose", "eight_angle.jpg", "Advanced arm balance"]

],

"backpain" => [

["Sphinx Pose","sphinx_pose.jpg","Supports spine"],
["Cat Stretch","cat_stretch.jpg","Back relaxation"],
["Bridge Pose","bridge_pose.jpg","Strengthens lower back"],
["Child Pose","child_pose.jpg","Relieves back pain"],
["Supine Twist","supine_twist.jpg","Improves flexibility"],
["Knees To Chest", "knees_chest.jpg", "Improves spinal mobility"],
["Reclining Twist", "reclining_twist.jpg", "Improves spinal mobility"],
["Pelvic Tilt", "pelvic_tilt.jpg", "Supports lower spine"]

],

"morning" => [

["Sun Salutation","sun_salutation.jpg","Morning energy boost"],
["Mountain Pose","mountain_pose.jpg","Posture improvement"],
["Tree Pose","tree_pose.jpg","Focus and balance"],
["Warrior Pose","warrior_pose.jpg","Confidence yoga"],
["Cobra Pose","cobra_pose.jpg","Activates body"],
["Half Moon Pose", "half_moon.jpg", "Morning body activation"],
["Standing Stretch", "standing_stretch.jpg", "Wake up muscles"],
["Prayer Stretch", "prayer_stretch.jpg", "Boosts energy"]

],

"sleep" => [

["Legs Up Wall","legs_up_wall.jpg","Improves sleep quality"],
["Corpse Pose","corpse_pose.jpg","Deep relaxation"],
["Butterfly Pose","butterfly_pose.jpg","Stress release"],
["Happy Baby Pose","happy_baby.jpg","Muscle relaxation"],
["Child Pose","child_pose.jpg","Calming yoga"],
["Reclining Butterfly", "reclining_butterfly.jpg", "Night relaxation"],
["Sleeping Swan", "sleeping_swan.jpg", "Deep relaxation"],
["Forward Fold", "forward_fold.jpg", "Calms nervous system"]

],

"stress" => [

["Lotus Pose","lotus_pose.jpg","Mental peace"],
["Breathing Exercise","breathing_pose.jpg","Reduces anxiety"],
["Child Pose","child_pose.jpg","Stress reduction"],
["Corpse Pose","corpse_pose.jpg","Mind relaxation"],
["Seated Twist","seated_twist.pose.webp","Body calming"],
["Shoulder Stretch", "shoulder_stretch.jpg", "Relieves tension"],
["Neck Relax Pose", "neck_relax.jpg", "Reduces stress"],
["Calm Breathing", "calm_breathing.jpg", "Mind peace"]

],

"advanced" => [

["Headstand","headstand.jpg","Advanced balance yoga"],
["Scorpion Pose","scorpion_pose.jpg","Full body control"],
["Wheel Pose","wheel_pose.jpg","Back strength"],
["Crow Pose","crow_pose.jpg","Arm balance yoga"],
["Firefly Pose","firefly_pose.jpg","Advanced flexibility"],
["Dragon Pose", "dragon_pose.jpg", "Advanced flexibility"],
["Peacock Pose", "peacock_pose.jpg", "Arm strength"],
["King Pigeon Pose", "king_pigeon.jpg", "Deep backend"]

],

"power" => [

["Power Plank","power_plank.jpg","Core endurance"],
["Warrior Flow","warrior_flow.jpg","Strength and stamina"],
["Chair Twist","chair_twist.jpg","Fat burn yoga"],
["Side Angle Pose","side_angle.jpg","Full body activation"],
["Boat Pose","boat_pose.jpg","Core workout"],
["Jump Plank", "jump_plank.jpg", "Power endurance"],
["Dynamic Warrior", "dynamic_warrior.jpg","Energy boosting"],
["Power Flow", "power_flow.jpg", "Full body activation"]

],

"prenatal" => [

["Butterfly Pose","butterfly_pose.jpg","Pelvic flexibility"],
["Cat Cow Pose","cat_cow.jpg","Back pain relief"],
["Easy Pose","easy_pose.jpg","Relaxation yoga"],
["Side Stretch","side_stretch.jpg","Body flexibility"],
["Deep Breathing","breathing_pose.jpg","Stress relief"],
["Goddess Pose", "goddess_pose.jpg", "Pelvic support"],
["Hip Circle Stretch", "hip_circle.jpg", "Improves flexibility"],
["Supported Squat", "supported_squat.jpg", "Strengthens legs"]

]
];

$yogaList = $plans[$type];

?>

<!DOCTYPE html>
<html>
<head>

<title>Yoga Plans</title>

<link rel="stylesheet" href="yoga_plan.css">
<style>
    body{
    margin:0;
    font-family:Poppins;
    background: linear-gradient(to bottom,#081b29,#0b2d48);
    color:white;
}

.top-bar{
    display:flex;
    justify-content:space-between;
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
    margin-top:20px;
}

.exercise-container{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:30px;
    padding:40px;
}

.exercise-card{
    width:260px;
    background:rgba(0,140,255,0.18);
    padding:20px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
}

.exercise-card img{
    width:100%;
    height:220px;
    object-fit:cover;
    border-radius:15px;
}

.exercise-card h3{
    margin-top:15px;
}

.exercise-card button{
    margin-top:15px;
    padding:10px 25px;
    border:none;
    border-radius:10px;
    background:#00c3ff;
    color:white;
    cursor:pointer;
}

    </style>

</head>

<body>

<div class="top-bar">

<h2 class="logo">FitInsight</h2>

<a href="yoga.php" class="back-btn">← Back</a>

</div>

<h1 class="title">

<?php echo ucfirst($type); ?> Yoga

</h1>

<div class="exercise-container">

<?php foreach($yogaList as $yoga){ ?>

<div class="exercise-card">

<img src="images/<?php echo $yoga[1]; ?>">

<h3><?php echo $yoga[0]; ?></h3>

<p><?php echo $yoga[2]; ?></p>

<a href="yoga_detail.php?name=<?php echo urlencode($yoga[0]); ?>&type=<?php echo $type; ?>">

<button>Start</button>

</a>

</div>

<?php } ?>

</div>

</body>
</html>
