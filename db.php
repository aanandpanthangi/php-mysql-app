<?php
$servername = "localhost";
$username = "phpuser";
$password = "password123";
$database = "crud_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
