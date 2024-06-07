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

$tableName = "delivery";

$sql = "INSERT INTO $tableName (dname,address,contactno,nic)
        VALUES ('$_POST[dname]', '$_POST[address]','$_POST[contactno]', '$_POST[nic]')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>