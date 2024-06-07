<?php
$servername = "Localhost";
$username = "root";
$password = "";
$database = "eat_tone";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableName = "payment";

$sql = "INSERT INTO $tableName (name,cvv,date,card_no)
        VALUES ('$_POST[Name]', '$_POST[cvv]','$_POST[date]', '$_POST[card_no]')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>