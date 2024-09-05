<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'root@1234';
$db_name = 'arnicaTest';

// Connect to database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Query database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = $conn->query($query);

// Check if user was added
if ($result) {
    echo "User added successfully! $username";
} else {
    echo "Error adding user: ". $conn->error;
}

// Close connection
$conn->close();
?>
