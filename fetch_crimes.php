<?php
// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "report_crime";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve data from the "ebola_cases" table
function retrieveData() {
    global $conn;
    $data = array();

    $sql = "SELECT * FROM crime"; // Change this table name to match your database setup

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Close the database connection
    $conn->close();

    return $data;
}
?>
