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
else{
  echo "success";
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
else{
  echo "success";
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
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}