var timer, current;
function startTimer()
{
    
    var h = parseInt(document.getElementById('timerHours').value);
    var m = parseInt(document.getElementById('timerMinutes').value);
    var s = parseInt(document.getElementById('timerSeconds').value);
   
    if(isNaN(h) || isNaN(m) || isNaN(s))
    {
        alert("You must input numbers!");
        return false;
    }
    
    current = ((h*3600) + (m*60) + s);
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
        document.getElementById("output").innerHTML = "0h 0m 0s";
        alert("Timer is up!");
    }
    else
    {
        var hours = Math.floor((current/3600)%60 );
        var minutes = Math.floor((current/60)%60);
        var seconds = Math.floor(current % 60);

        
        document.getElementById("output").innerHTML = hours +"h " + minutes + "m " + seconds + " s";
        
        current--;

    }
    
   
    }
   