<?php
$host = "localhost";
$userName = "kevin";
$password = "35852744";
$dbName = "pcea";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>