<?php
// Day 24: Session Management
session_start(); // Start the memory

// Day 23: The Data to Loop through
$notifications = array("New Message", "Friend Request", "System Update");

// Check if user is "logged in" (Simulation)
if (isset($_SESSION['user'])) {
    echo "<h1>Welcome back, " . $_SESSION['user'] . "!</h1>";
    
    echo "<h3>Your Notifications:</h3>";
    echo "<ul>";
    
    // Day 23: The Loop
    foreach ($notifications as $note) {
        echo "<li>" . $note . "</li>";
    }
    
    echo "</ul>";
} else {
    echo "Please Log In.";
}
?>
