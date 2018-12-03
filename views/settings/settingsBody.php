<?php
    require_once("../../controllers/db_con.php");
    $sql1 = "select * from settings WHERE id = 1";
    $sql2 = "select * from settings WHERE id = 2";
    
    $result1 = connect($sql1);
    $row1 = mysql_fetch_row($result1);
    $backlight = $row1[1];
    $forelight = $row1[2];
    
    $result2 = connect($sql2);
    $row2 = mysql_fetch_row($result2);
    $backdark = $row2[1];
    $foredark= $row2[2];

    //text color light theme used = #596a87
    //back color light theme used = #ffffff
    
    //text color dark theme used = #ffd9b3
    //back color dark theme used = #333333
?>

<head>
        <!-- Fun little addition, addding a custom scroll bar -->
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <style>
        ::-webkit-scrollbar
        {
            width:10px;
        }
        ::-webkit-scrollbar-track
        {
            box-shadow:inset 0 0 5px grey;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb
        {
            background: #007bff;
            border-radius:10px;
        }
        ::-webkit-scrollbar-thumb:hover
        {
            background: #007bff;
        }
        
        
        /*
            set background and text to the colors initialized from database.
            alllows me to initialize based off variables pulled from database.
        */
        body{
            background-color: <?php echo $backdark ?>;
        }
        
        legend {
            color:  <?php echo $foredark ?>;
        }
        label {
            color: <?php echo $foredark ?>;
        }
        
        hr {
            color: <?php echo $foredark ?>;
        }
        
       
    </style>
    <script>
       
    </script>
</head>


<body>
    <div class="container-fluid">
        <form action="" method="post">
            <fieldset>
                <legend id = "heading">Settings</legend>
                <hr>
                <div class="form-group">
                    <label class="control-label" for="accSettings">Display Settings</label>
                </div>
                
                <!-- show seconds switch
                
                <div class="form-group">
                    <label for="showSeconds" class="control-label">Show Seconds</label>
                    <div id="showSeconds" name="showSeconds" class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-primary active">
                            
                                                                                                                     in each button on click i tried to update
                                                                                                                    variables (doesnt seem to work)
                            <input id="secOn" type="radio" name="secRd" autocomplete="off" value="On" onclick="">
                            On
                        </label>
                        <label class="btn btn-sm btn-outline-primary">
                            
                                                                                                                         in each button on click i tried to update
                                                                                                                    variables (doesnt seem to work)
                            <input id="secOff" type="radio" name="secRd" autocomplete="off" value="Off" onclick="">
                            Off
                        </label>
                    </div>
                </div>
                 -->

                <!-- AM/PM switch 


                                                         in each button on click i tried to update
                                                           variables (doesnt seem to work)
                <div class="form-group">
                    <label for="showAmPm" class="control-label">Show AM/PM</label>
                    <div id="showAmPm" name="showAmPm" class="btn-group btn-group-toggle" data-toggle="buttons" >
                        <label class="btn btn-sm btn-outline-primary active">
                            <input id="showAP" type="radio" name="apOp" autocomplete="off" value="am" onclick="">
                            AM
                        </label>
                        <label class="btn btn-sm btn-outline-primary">
                            <input id="hideAP" type="radio" name="apOp" autocomplete="off" value="pm" onclick="">
                            PM
                        </label>
                    </div>
                </div>
                -->



                                                         <!-- in each button on click i tried to update
                                                           variables (doesnt seem to work)-->
                <!-- Light and dark theme switch -->
                <div class="form-group">
                    
                    <label for="lightDark" class="control-label">Light/Dark</label>
                    <div id="lightDark" name="lightDark" class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-primary active">
                            <input id="lightOn" type="radio" name="ldOp" autocomplete="off" value="light" onclick="">
                            Light
                        </label>
                        <label class="btn btn-sm btn-outline-primary">
                            <input id="darkOn" type="radio" name="ldOp" autocomplete="off" value="dark"onclick="">
                            Dark
                        </label>
                    </div>
                </div>
                
                <hr> <!-- NEW SECTION -->
                
                
                <div class="form-group">
                    <label class="control-label" for="accSettings">Account Settings</label>
                </div>

                <!-- Display Name -->
                <div class="form-group" id="usrNameDiv">
                    <label class="control-label" for="usrName">Change Username</label>
                    <div>
                        <input id="usrName" name="usrName" placeholder="Type current username" type="text">
                        <button id="editButton" name="editButton" type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                    </div>

                </div>

                <div class="form-group" id="emailDiv">
                    <label class="control-label" for="email">Change Email</label>
                    <div>
                        <input id="email" name="email" placeholder="Typer current email" type="text">
                        <button id="editButton" name="editButton" type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                    </div>

                </div>


                <hr> <!-- NEW SECTION -->


                <div class="form-group">
                    <label class="control-label" for="accSettings">Notification Settings</label>
                </div>

                <!-- Select Alarm Sound -->
                <div class="form-group" id="alarmSoundDiv">
                    <label class="control-label" for="alarmSound">Choose Alarm Sound</label>
                    <div>
                        <select id="selectSound" name="selectSound">
                            <option value="noSound">No Sound</option>
                            <option value="defaultAlarm">Default Alarm</option>
                            <option value="fallingBomb">Falling Bomb</option>
                            <option value="policeCar">Police Car</option>
                            <option value="rooster">Rooster</option>
                            <option value="cuckooClock">Cuckoo Clock</option>
                            <option value="militaryTrumpet">Military Trumpet</option>
                            <option value="cryingBaby">Crying Baby</option>
                            <option value="harpStrumming">Harp Strumming</option>
                            <option value="trainWistle">Train Wistle</option>
                            <option value="birdSong">Bird Song</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" id="emailNotifcations">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check1" name="check1">
                        <label class="form-check-label" for="check1">Email Notifications</label>
                        <br>
                        
                        <!--
                        <input type="checkbox" class="form-check-input" id="check2" name="check2">
                        <label class="form-check-label" for="check2">Browser Notifications</label>
                        -->
                    </div>
                </div>

                <br><br><br><br>


                <!-- Delete Account -->
                <div class="form-group">
                    <div>
                        <button id="deleteButton" name="deleteButton" type="remove-button" class="btn btn-outline-danger">Delete Account</button>
                    </div>
                </div>

                <br>
                <hr>

                <!-- Save changes Button -->
                <div class="form-group">
                    <div>
                        <a id="saveButton" name="saveButton" class="btn btn-outline-success" href="../index/index.php">Save Changes</a>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                         <a id="discardButton" name="discardButton" class="btn btn-outline-danger" href="../index/index.php">Discard Changes</a>
                    </div>
                </div>
                
                
                
                <!-- trying to update current useres settings in data base -->
                <?php
                //store all values when save button is clicked (not working correctly)
                if (isset($_POST["saveButton"])){
           
                    $sound = $_POST['selectSound'];
            
                    if (isset($_POST['check1'])){
                        $emailNotif = "yes";
                    }
                    else{
                        $emailNotif = "no";
                    }
                    if (isset($_POST['check2'])){
                        $browserNotif = "yes";
                    }
                    else{
                        $browserNotif = "no";
                    }
            
           
                    updateRow($conn, $postBackcolor, $postHeadercolor, $secSwitch, $apSwitch, $sound, $emailNotif, $browserNotif , $userid);
          
                }
                ?>
                
                
                
            </fieldset>
        </form>

    </div>
    
</body>