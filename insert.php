<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "report_crime";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
        $fullName = $_POST["fullName"];
                $age = $_POST["age"];
        $phone = $_POST["phone"];
        $citizenship = $_POST["citizenship"];
        $crime = $_POST["crime"];
        $victim = $_POST["victim"];
        $suspects = $_POST["suspects"];
        $other_witnesses = $_POST["other_witnesses"];
        $crime_scene = $_POST["crime_scene"];
        $details = $_POST["details"];
       
// SQL query to insert data into the "users" table
$sql = "INSERT INTO crime (fullName, age, phone, citizenship, crime, victim, suspects, other_witnesses, crime_scene, details)
        VALUES ('$fullName', '$age', '$phone', '$citizenship', '$crime', '$victim', '$suspects', '$other_witnesses', '$crime_scene', '$details')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
