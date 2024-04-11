<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "diary_db";

// Create the database connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
