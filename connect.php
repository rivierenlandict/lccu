<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "lccu";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<script> console.log('Connected successfully')</script>";
?> 