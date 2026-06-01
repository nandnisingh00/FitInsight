function saveWorkout(){

fetch("save_workout.php", {
method: "POST",
headers: {
"Content-Type": "application/x-www-form-urlencoded"
},
body: "goal=WeightLoss&type=Cardio&duration=30&calories=200"
})
.then(res => res.text())
.then(data => {
alert(data);
});

}