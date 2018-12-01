<?php

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
    </style>
</head>


<body>
    <div class="container-fluid">
        <form>
            <fieldset>
                <legend>Settings</legend>
                <hr>
                <div class="form-group">
                    <label class="control-label" for="accSettings"><font color="#596a87">Display Settings</font></label>
                </div>
                
                <!-- show seconds switch -->
                
                <div class="form-group">
                    <label for="showSeconds" class="control-label">Show Seconds</label>
                    <div id="showSeconds" name="showSeconds" class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-primary active">
                            <input id="secOn" type="radio" name="secOn" autocomplete="off">
                            On
                        </label>
                        <label class="btn btn-sm btn-outline-primary">
                            <input id="secOff" type="radio" name="secOff" autocomplete="off">
                            Off
                        </label>
                    </div>
                </div>


                <!-- AM/PM switch -->

                <div class="form-group">
                    <label for="showAmPm" class="control-label">Show AM/PM</label>
                    <div id="showAmPm" name="showAmPm" class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-primary active">
                            <input id="showAP" type="radio" name="options" autocomplete="off">
                            Yes
                        </label>
                        <label class="btn btn-sm btn-outline-primary">
                            <input id="hideAP" type="radio" name="options" autocomplete="off">
                            No
                        </label>
                    </div>
                </div>


                <!-- Light and dark theme switch -->
                <div class="form-group">
                    
                    <label for="lightDark" class="control-label">Light/Dark</label>
                    <div id="lightDark" name="lightDark" class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-primary active">
                            <input id="lightOn" type="radio" name="options" autocomplete="off">
                            Light
                        </label>
                        <label class="btn btn-sm btn-outline-primary">
                            <input id="darkOn" type="radio" name="options" autocomplete="off">
                            Dark
                        </label>
                    </div>
                    
                </div>
                
                <!-- color picker header -->
                <div class="btn-group">
                    <label for="headerColor" class="control-label">Header Color </label>
                    <div id="headerColor" name="headerColor" class="form-group">
                        
                          <input type="color" name="favcolor" value="#596a87">
                          <button id="submitBtn" name="submitBtn" type="button" class="btn btn-sm btn-outline-primary">Submit</button>
                    </div>
                </div>
                
                <br>
                <!-- color picker background -->
                
                
                <div class="btn-group">
                    <label for="backgroundColor" class="control-label">Background Color </label>
                    <div id="backgroundColor" name="backgroundColor" class="form-group">
                        
                          <input type="color" name="favcolor" value="#ffffff">
                          <button id="submitBtn" name="submitBtn" type="button" class="btn btn-sm btn-outline-primary">Submit</button>
                    </div>
                </div>
                
                
                <hr> <!-- NEW SECTION -->
                
                
                <div class="form-group">
                    <label class="control-label" for="accSettings"><font color="#596a87">Account Settings</font></label>
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
                    <label class="control-label" for="accSettings"><font color="#596a87">Notification Settings</font></label>
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
                        <input type="checkbox" class="form-check-input" id="check1">
                        <label class="form-check-label" for="check1">Email Notifications</label>
                        <br>
                        <input type="checkbox" class="form-check-input" id="check2">
                        <label class="form-check-label" for="check2">Browser Notifications</label>
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
                
            </fieldset>
        </form>

    </div>
</body>