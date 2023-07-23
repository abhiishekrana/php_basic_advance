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

// SQL query to fetch data from the database
$sql = "SELECT * FROM agents";

// Execute the query and get the result
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    echo "Error: " . $conn->error;
} else {
    // Check if there are any rows returned from the query
    if ($result->num_rows > 0) {
        // Loop through the rows and fetch data
        while ($row = $result->fetch_assoc()) {
            // Access the data using column names (assuming 'agents' table has 'name' and 'email' columns)
            $name = $row['AGENT_NAME'];
            $email = $row['WORKING_AREA'];

//             // Do something with the fetched data (e.g., display it)
            echo "Agent Name: " . $name . ", Working Area: " . $email . "<br>";
        }
    } else {
        echo "No data found";
    }
}

// Close the connection when you're done
$conn->close();
?>
