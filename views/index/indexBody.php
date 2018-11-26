<?php

?>

<body onload="showTheTime(); loadControl('timeZone.php')">
    <div id="appBody" class="container-fluid">
        <div class="row">
            <div id="settingsCol" class="col menu-bar">
                <a id="settingsButton" href="../settings/settings.php" class="btn btn-outline-primary">Settings</a>
            </div>
            <div id="loginCol" class="col menu-bar">
                <a id="loginButton" href="../login/login.php" class="btn btn-outline-primary">Login</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="Clock" class="clock">00:00:00</div>
            </div>
        </div>
        <div class="row">
            <div class="col menu-bar main-content">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-sm btn-outline-primary" onmouseout="document.getElementById('twentyfourHour').blur()">
                        <input id="twentyfourHour" type="radio" name="options" autocomplete="off">
                        24 Hr.
                    </label>
                    <label class="btn btn-sm btn-outline-primary active" onmouseout="document.getElementById('twelveHour').blur()">
                        <input id="twelveHour" type="radio" name="options" autocomplete="off">
                        12 Hr.
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col menu-bar main-content">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Alarm" onmouseout="document.getElementById('alarm').blur()" onclick="loadControl('alarm.php')">
                        <input id="alarm" type="radio" name="options" autocomplete="off">
                        <i class="material-icons">access_alarm</i>
                    </label>
                    <label class="btn btn-outline-primary active" data-toggle="tooltip" data-placement="bottom" title="Time Zone" onmouseout="document.getElementById('clock').blur()" onclick="loadControl('timeZone.php')">
                        <input id="clock" type="radio" name="options" autocomplete="off">
                        <i class="material-icons">public</i>
                    </label>
                    <label class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Stopwatch" onmouseout="document.getElementById('stopwatch').blur()" onclick="loadControl('stopwatch.php')">
                        <input id="stopwatch" type="radio" name="options" autocomplete="off">
                        <i class="material-icons">timer</i>
                    </label>
                    <label class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Timer" onmouseout="document.getElementById('timer').blur()" onclick="loadControl('timer.php')">
                        <input id="timer" type="radio" name="options" autocomplete="off">
                        <i class="material-icons">hourglass_empty</i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col menu-bar main-content">
                <div id="controlArea"></div>
            </div>
        </div>
    </div>
</body>