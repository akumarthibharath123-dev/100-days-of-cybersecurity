<?php
$servername = "localhost";
$username = "root";      // Default XAMPP/WAMP username
$password = "";          // Default XAMPP/WAMP password (usually empty)
$dbname = "myshopping";  // The database name we created earlier

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
