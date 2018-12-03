<?php

?>
<!DOCTYPE HTML>
<html lang="en">

<body>
    <div class="timerInput">
        <input class="form-control" type="text" id="timerHours" name="hours" maxlength="2" placeholder="H">
            <label for="placeHolder">:</label>
        <input class="form-control" type="text" id="timerMinutes" name="minutes" maxlength="2" placeholder="M">
            <label for="placeHolder">:</label>
        <input class="form-control" type="text" id="timerSeconds" name="seconds" maxlength="2" placeholder="S">
    </div>

    <div class="buttons">
        <button type="button" onclick = "startTimer();" class="btn btn-outline-success">Start</button>
        <button type="button" onclick = "stopTimer();" class="btn btn-outline-danger">Stop</button>
       
    </div>
    <div class = "timerOutput">
        <span id = "timerOut"></span>
    </div>
</body>

</html>
