<?php
$servername = "172.30.37.194";
$username = "root";
$password = "super-secret-password";
$dbname = "my-wonderful-website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>