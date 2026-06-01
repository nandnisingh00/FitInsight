let time = 30;
let timer;

function startTimer(){
    if(!timer){
        timer = setInterval(() => {
            if(time > 0){
                time--;
                document.getElementById("time").innerText = time;
            }
        },1000);
    }
}

function pauseTimer(){
    clearInterval(timer);
    timer = null;
}

function resetTimer(){
    clearInterval(timer);
    timer = null;
    time = 30;
    document.getElementById("time").innerText = time;
}
