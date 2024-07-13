<?php
// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "Abhi@123";
$dbname = "db1";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection when you're done
$conn->close();
?>