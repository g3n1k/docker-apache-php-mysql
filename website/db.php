<?php
$servername = "mariadb";
#$username = "root";
#$password = "rootpwd";
$username = "userdb";
$password = "passworddb";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
