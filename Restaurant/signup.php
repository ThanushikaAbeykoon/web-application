<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eat_tone";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableName = "login";

$sql = "INSERT INTO $tableName (username,email,pass)
        VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>