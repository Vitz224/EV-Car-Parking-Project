<?php
// Establish database connection
$conn = new mysqli("localhost", "root", "", "ev");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>