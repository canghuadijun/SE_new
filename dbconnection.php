<?php
$servername = "127.0.0.1";
$username = "root";
$password = '';

// Create connection
$conn = new mysqli($servername, $username, $password, "onlineshopping");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>