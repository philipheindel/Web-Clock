
//Commenting that out..starting my own method for the countdown
var timer;
function setTimer()
{
    var h = parseInt(document.getElementById("timerHours").value);
    var m = parseInt(document.getElementById("timerMinutes").value);
    var s = parseInt(document.getElementById("timerSeconds").value);
    
    var current = (h*2160) + (m*60) + s;
    /*
    clearInterval(timer);
    //Set variables to take in the hours, minute, and second user inputs 
    //Also set a display time, of the inputted values.
    var h = parseInt(document.getElementById("timerHours").value);
    var m = parseInt(document.getElementById("timerMinutes").value);
    var s = parseInt(document.getElementById("timerSeconds").value);

    var timer_date = h + " : " + m + " : " +  s;
    var now = new Date();
    now.setHours(h);
    now.setMinutes(m);
    now.setSeconds(s);
    //An inner function to determine what to output...then outputs it.
    function showTimer()
    {
        var now = new Date();
        
        var remain = end - now;
        if(remain < 0)
        {
            clearInterval(timer);
            document.getElementById("timer_value").innerHTML = 'Reached!'; 
            return;
        }
     //Get the remaining hours
        var hours = Math.floor(remain / minute);
        var minutes = Math.floor((remain % hour)/minute);   //Get the remainint minutes
        var seconds = Math.floor((remain % minute)/second); //Get the remaining seconds
        
        //Print statements to output the time left.
       document.getElementById('timer_value').innerHTML = hours + 'Hours';
        document.getElementById('timer_value').innerHTML += minutes + 'Minutes ';
        document.getElementById('timer_value').innerHTML += seconds + 'Seconds ';
        */
        
    }
    timer = setInterval(showTimer, 1000);//Display the timer in every one second.
  
}