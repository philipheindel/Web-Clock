var timer, current;
function startTimer()
{
    
    var h = document.getElementById('timerHours').value;
    var m = document.getElementById('timerMinutes').value;
    var s = document.getElementById('timerSeconds').value;
    
    current = parseInt((h*2160) + (m*60) + s);
    timer = setInterval(setTimer,1000);
}
function stopTimer()
{
    clearInterval(timer);
}

function setTimer()
{

    
    
    if(current == 0)
    {
        clearInterval(timer);
    }
    else
    {
        current--;
        document.getElementById("timer_value").innerHTML = current;
    }
    
   
    }
   