<?php
//set connection variables
$host = "localhost";
$db_name = "ucapture";
$username = "root";
$password = "";

//connect to mysql server
$mysqli = new mysqli($host, $username, $password, $db_name);

//check if any connection error was encountered
if(mysqli_connect_errno()) {
    echo "Error: Could not connect to database.";
    exit;
}
?>