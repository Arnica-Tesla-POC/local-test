<?php
// Include the vulnerable code
include 'vulnerable_code.php';
$username = $_POST['username'];
$password = $_POST['password'];
// Call the vulnerable function
login($username, $password);
?>
