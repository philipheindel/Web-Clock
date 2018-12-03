var timeout;
function showTheTime(inputOffset)
{
   var myArray = listToArray(inputOffset, ',');
    var date = new Date();
    var h = parseInt(date.getHours());
    var m = parseInt(date.getMinutes());
    var s = date.getSeconds();
    var session = "AM";
    var hoursoffset = parseInt(myArray[0]) + 5;
    var minoffset = parseInt(myArray[1])
     if(hoursoffset>-1)
     {
     m = minoffset + m;
     if(m>59)
      {
          m = m - 60;
          h = h + 1;
      }
     }
     else
     {
        m = m - minoffset; 
         if(m<0)
      {
          m = m + 60;
          h = h - 1;
      }
     }
      h =  hoursoffset + h;
      
      var temp = h;
    //Test to see if it should be set to AM/PM
    if(h==0)
    {
        h=12;
    }

    if(h>12)
    {
        
        h = h - 12;
        session = "PM";
        if(h==12)
    {
        session = "AM";
    }
    }
     if(h>12)
    {
        h = h - 12;
        session = "AM";
    }
    if(h==12 && (temp==23 || temp ==12))
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
    
   
    timeout = setTimeout(showTheTime, 1000, inputOffset);
    
}
function resetTime()
{
    
    clearTimeout(timeout);
   
    
}
function startTime(){
    
    showTheTime("-5,0");
}
function showTheTime24(inputOffset)
{
    var myArray = listToArray(inputOffset, ',');
    var date = new Date();
    var h = parseInt(date.getHours());
    var m = parseInt(date.getMinutes());
    var s = date.getSeconds();
    var session = "AM";
    var offset = parseInt(inputOffset);
     
       var hoursoffset = parseInt(myArray[0]) + 5;
    var minoffset = parseInt(myArray[1])
     if(hoursoffset>-1)
     {
     m = minoffset + m;
     if(m>59)
      {
          m = m - 60;
          h = h + 1;
      }
     }
     else
     {
        m = m - minoffset; 
         if(m<0)
      {
          m = m + 60;
          h = h - 1;
      }
     }
      h =  hoursoffset + h;
    //Test to see if it should be set to AM/PM
    


    if( h>23)
    {
        h = h-24;
    }
    /*
        Checks if statement should have a 0 in front of it.
        For example, difference of 8:01:22PM -VS- 8:1:22PM
    */
  
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    //Output above functions to screen
    var time = h + ":" + m + ":" + s ;
    document.getElementById("Clock").innerText = time;
    document.getElementById("Clock").textContent = time;
    document.getElementsByTagName("title")[0].innerHTML = h + ":" + m;
    
   
    timeout = setTimeout(showTheTime24, 1000, inputOffset);
    
}
function listToArray(fullString, separator) {
  var fullArray = [];

  if (fullString !== undefined) {
    if (fullString.indexOf(separator) == -1) {
      fullArray.push(fullString);
    } else {
      fullArray = fullString.split(separator);
    }
  }

  return fullArray;
}

