<?php
$servername = "localhost";
$username = "u762909581_edge2edgeclean";
$password = "@Happy1992@";
$dbname = "u762909581_edge2edgeclean";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>