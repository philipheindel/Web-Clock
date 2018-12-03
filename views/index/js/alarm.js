var alarm;
var alarmHours;
var alarmMinutes;
var alarmTime;

function setAlarm() {
    var alarmHours = document.getElementById("alarmHours").value;
    var alarmMinutes = document.getElementById("alarmMinutes").value;
    var alarmAmPm = document.getElementById("selectAm").parentNode.classList;
    alarmHours = alarmHours == "" ? 0 : alarmHours;
    alarmMinutes = alarmMinutes == "" ? 0 : alarmMinutes;
    alarmAmPm = alarmAmPm.contains("active") ? " AM" : " PM";

    alarmTime = (alarmHours + ":" + alarmMinutes + ":" + alarmAmPm);
    alarm = setInterval(alarmCheck, 500);
}

function clearAlarm() {
    clearInterval(alarm);
}

function alarmCheck() {
    var clockTime = document.getElementById("Clock").innerText;
    var clockTimeArray = converTo24(clockTime);
    var alarmTimeArray = converTo24(alarmTime);
    if (clockTimeArray[0] == alarmTimeArray[0]) {
        if (clockTimeArray[1] == alarmTimeArray[1]) {
            clearInterval(alarm);
            alert("IT WENT OFF");
        }
    }
}

function converTo24(time) {
    var timeComponents = time.split(":");
    if (time.includes("PM") && parseInt(timeComponents[0]) < 12) {
        timeComponents[0] = parseInt(timeComponents[0]) + 12
    } else if (time.includes("AM") && parseInt(timeComponents[0]) == 12) {
        timeComponents[0] = parseInt(timeComponents[0]) - 12;
    }

    return timeComponents;
}
