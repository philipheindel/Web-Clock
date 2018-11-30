var timeout;
function showTheTime(inputOffset)
{
    
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var session = "AM";
    var offset = parseInt(inputOffset);
      h = offset + h;
    //Test to see if it should be set to AM/PM
    if(h==0)
    {
        h=12;
    }

    if(h>12)
    {
       // h = h - 12;
        session = "PM";
    }
    if(h==12)
    {
        session = "PM";
    }

    /*
        Checks if statement should have a 0 in front of it.
        For example, difference of 8:01:22PM -VS- 8:1:22PM
    */
  
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    //Output above functions to screen
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("Clock").innerText = time;
    document.getElementById("Clock").textContent = time;
    document.getElementsByTagName("title")[0].innerHTML = h + ":" + m;
    
   
    timeout = setTimeout(showTheTime, 1000, offset);
    
}
function resetTime()
{
    
    clearTimeout(timeout);
   
    
}
function startTime(){
    
    showTheTime(0);
}

