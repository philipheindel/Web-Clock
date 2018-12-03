<?php

?>

<body>
    <div class="alarmInput">
        <input class="form-control" type="text" id="alarmHours" name="hours" maxlength="2" placeholder="H">
            <label for="placeHolder">:</label>
        <input class="form-control" type="text" id="alarmMinutes" name="minutes" maxlength="2" placeholder="M">
    </div>
    
    <div class="btn-group btn-group-toggle buttons" data-toggle="buttons">
        <label class="btn btn-sm btn-outline-primary active ">
            <input id="selectAm" type="radio" name="options" autocomplete="off">
            AM
        </label>
        <label class="btn btn-sm btn-outline-primary">
            <input id="selectPm" type="radio" name="options" autocomplete="off">
            PM
        </label>
    </div>

    <div>
        <button id="setAlarmButton" type="button" class="btn btn-outline-success" onclick="setAlarm();">&nbsp; Set &nbsp;</button>
        <button id="clearAlarmButton" type="button" class="btn btn-outline-danger" onclick="clearAlarm();">Clear</button>
    </div>

</body>
