<?php
// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "Abhi@123";
$dbname = "techplek";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// SQL query to fetch data from the database
$sql = 'INSERT INTO employee VALUES ("5", "Shomiko", "MALE")';

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close the connection when you're done
$conn->close();
?>