<?php
    require_once("../../controllers/theme.php");
    require_once("../../controllers/updateDB.php");
    
    
    if(isset($_POST["darkBtn"])) { set0() ;}
    if(isset($_POST["lightBtn"])) { set1() ;}
    
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
                
                
                <div class="form-group">
                    <label for="lightDark" class="control-label">Light/Dark</label>    
                    <input id="lightBtn" name="lightBtn" class="btn btn-outline-primary" type="submit" href="../settings/settings.php" value = "Light"></input>
                    <input id="darkBtn" name="darkBtn" class="btn btn-outline-primary" type="submit" href="../settings/settings.php" value = "Dark"></input>
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
                        <a id="saveButton" name="saveButton" class="btn btn-outline-success" href="../index/index.php" >Save Changes</a>
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