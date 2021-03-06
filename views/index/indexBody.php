<?php
    require_once("../../controllers/theme.php");
    require_once("../../controllers/updateDB.php");
?>
<header>
    <style>
        body{
            background-color: <?php echo $back ?>;
        }
        
        legend {
            color:  <?php echo $front ?>;
        }
        label {
            color: <?php echo $front ?>;
        }
        
        hr {
            color: <?php echo $front ?>;
        }
    </style>
</header>
<body onload="startTime(); loadAjax('timeZone.php','#controlArea');">
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
                    <label class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Alarm" onmouseout="$('#alarm').blur()" onclick="loadAjax('alarm.php','#controlArea')">
                        <input id="alarm" type="radio" name="options" autocomplete="off">
                        <i class="material-icons">access_alarm</i>
                    </label>
                    <label class="btn btn-outline-primary active" data-toggle="tooltip" data-placement="bottom" title="Time Zone" onmouseout="$('#clock').blur()" onclick="loadAjax('timeZone.php','#controlArea')">
                        <input id="clock" type="radio" name="options" autocomplete="off">
                        <i class="material-icons">public</i>
                    </label>
                    <label class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Stopwatch" onmouseout="$('#stopwatch').blur()" onclick="loadAjax('stopwatch.php','#controlArea')">
                        <input id="stopwatch" type="radio" name="options" autocomplete="off">
                        <i class="material-icons">timer</i>
                    </label>
                    <label class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Timer" onmouseout="$('#timer').blur()" onclick="loadAjax('timer.php','#controlArea');">
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
