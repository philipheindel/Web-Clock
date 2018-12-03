<?php

define("CLOCK_TITLE", "Clock");
define("SETTINGS_TITLE", "Settings");
define("LOGIN_TITLE", "Login/Create Account");

/**
 * Readers template.
 *
 * @param template $template
 * @param array $data
 */
function render($template, $data = array())
{
    $path = __DIR__ . '/../views/' . $template . '.php';
    if (file_exists($path)) {
        extract($data);
        require $path;
    }
}
function connection($servername, $username, $password){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<br>";
} 
    
return $conn;
}

function connectionDB($servername, $username, $password, $dbname){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<br>";
} 

    
return $conn;
}

function createDB($conn, $dbname){
    
// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    echo "<br>";
} else {
    echo "Error creating database: " . $conn->error;
    echo "<br>";
}    
    
}

function createTable($conn, $dbname, $dbtable){
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE $dbtable (
fName VARCHAR(30) NOT NULL,
lName VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
verifyPassword VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $dbtable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}

function addToTable($conn, $dbtable,$fname, $lname,$email,$password,$verifyPassword){
//function used for adding info into the table    
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO $dbtable (fName, lName, email, password, verifyPassword)
VALUES ('$fname','$lname','$email','$password','$verifyPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Account created!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}

function updateRow($conn, $postBackcolor, $postHeadercolor, $secSwitch, $apSwitch, $sound, $emailNotif, $browserNotif , $userid)
{
    //function used for adding info into the table    
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `temp`.`settings` SET `backgroundcol` =  '$postBackcolor',
        `headercol` =  '$postHeadercolor', `showsec` = '$secSwitch', `showap` = '$apSwitch',
        `sound` = '$sound', `emailnotif` = '$emailNotif', `browsernotif` '$browserNotif'
            WHERE `settings`.`id` = '$userid';";

if ($conn->query($sql) === TRUE) {
    echo "updated!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

function compare($conn, $compareemail, $dbtable){
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    
   
 $sql = "SELECT * FROM `$dbtable` WHERE email='$compareemail'";   

 $var = $conn->query($sql);
 $result = $var->fetch_assoc();
 
    return $result[email];
    
    
}

function loginChecker($conn,$dbtable,$login,$password){
   
 
$sql = "SELECT * FROM `$dbtable` WHERE email='$login'";
 $var = $conn->query($sql);
 $result = $var->fetch_assoc();

 
 $sql1 = "SELECT * FROM `$dbtable` WHERE email='$login'";
 $var1 = $conn->query($sql1);
 $result1 = $var1->fetch_assoc();
 
 
$email= $result[email];  
$pass= $result1[password];

if($email==$login && $pass == $password){
    return true;
}
else {
    return false;
}
    
    
}
