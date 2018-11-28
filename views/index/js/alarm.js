function hoursMenu()
//This is going to make the drop down menu functionality for the hours.
{
    var select = document.getElementById('alarmhrs');
    var hrs = 12;
    
    for(var i = 1; i <= hrs; i++)
    {
        select.options[select.options.length] = new Option(i<10 ? "0" + i : i, i);
    }
    
} hoursMenu();


function minMenu()
{
    var select = document.getElementById('alarmmins');
    var min = 59;
    
    for(var i=0; i <= min; i++)
    {
        select.options[select.options.length] = new Option(i<10 ? "0" + i : i, i);
    }
} minMenu();

function secMenu()
{
    var select = document.getElementById('alarmsecs');
    var sec = 59;
    
    for(var i=0; i <= sec; i++)
    {
        select.options[select.options.length] = new Option(i<10 ? "0" + i : i, i);
    }
} secMenu();

//This is the portion to set the functionality of setting the alarm.

function alarmSet()
{
    var hr = document.getElementById('alarmhrs');
    var min = document.getElementById('alarmmins');
    var sec = document.getElementById('alarmsecs');
    var ap = document.getElementById('ampm');
    
    var selectedHour = hr.options[hr.selectedIndex].value;
    var selectedMin = min.options[min.selectedIndex].value;
    var selectedSec = sec.options[sec.selectedIndex].value;
    var selectedAP = ap.options[ap.selectedIndex].value;
    
    var alarmTime = selectedHour+ ":" + selectedMin + ":" + selectedSec + selectedAP;
    console.log('alarmTime' + alarmTime);
    
    document.getElementById('alarmhrs').disabled = true;
    document.getElementById('alarmmins').disabled = true;
    document.getElementById('alarmsecs').disabled = true;
    document.getElementById('ampm').disabled = true;
    
    //Will need to find an alert for h2, and when h2 is equal to currenttime, play alert
   
}

function alarmClear()
{
    document.getElementById('alarmhrs').disabled = false;
    document.getElementById('alarmmins').disabled = false;
    document.getElementById('alarmsecs').disabled = false;
    document.getElementById('ampm').disabled = false;
    //also disable any alarms when played, when we have that set up.
}