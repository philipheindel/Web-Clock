<?php

?>

<body>
    <div class="alarmInput">
        <input class="form-control" type="text" id="alarmHours" name="hours" maxlength="2" placeholder="H">
            <label for="placeHolder">:</label>
        <input class="form-control" type="text" id="alarmMinutes" name="minutes" maxlength="2" placeholder="M">
    </div>

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-sm btn-outline-primary active ">
            <input id="selectAm" type="radio" name="options" autocomplete="off">
            AM
        </label>
        <label class="btn btn-sm btn-outline-primary">
            <input id="selectPm" type="radio" name="options" autocomplete="off">
            PM
        </label>
    </div>

    <div class="buttons">
        <button type="button" class="btn btn-outline-success"> &nbspSet &nbsp</button>
        <button type="button" class="btn btn-outline-danger">Clear</button>
    </div>

</body>
