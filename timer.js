let time = 30;
let timer = null;
let isRunning = false;

function updateDisplay() {
    document.getElementById("timer").innerText = time;
}

// START
function startTimer() {
    if (isRunning) return;

    isRunning = true;

    timer = setInterval(function () {
        if (time <= 0) {
            clearInterval(timer);
            isRunning = false;
            alert("✅ Exercise Completed!");
            return;
        }

        time--;
        updateDisplay();

    }, 1000);
}

// PAUSE
function pauseTimer() {
    clearInterval(timer);
    isRunning = false;
}

// RESET
function resetTimer() {
    clearInterval(timer);
    isRunning = false;
    time = 30;
    updateDisplay();
}
