<?php
/*************************************************
 * DAY 21: MODULARITY – VARIABLES & FUNCTIONS
 *************************************************/

// Variables (basic data storage)
$siteName = "PHP Learning Lab";
$currentUser = "admin";
$enteredPassword = "admin123";

// Function: reusable logic (DRY principle)
function greetUser($username) {
    return "Welcome, " . $username . "!";
}

// Function: simple authentication check
function authenticate($user, $password) {
    if ($user === "admin" && $password === "admin123") {
        return true;
    } else {
        return false;
    }
}

// Function call
$greetingMessage = greetUser($currentUser);


/*************************************************
 * DAY 22: CONTROL FLOW – CONDITIONALS & ARRAYS
 *************************************************/

// Conditional logic (authentication core concept)
if (authenticate($currentUser, $enteredPassword)) {
    $loginStatus = "Login Successful";
} else {
    $loginStatus = "Invalid Credentials";
}

// Indexed Array (list of skills)
$skills = array("PHP", "HTML", "CSS", "MySQL");

// Associative Array (key-value pairs)
$userProfile = array(
    "username" => "admin",
    "role" => "Administrator",
    "status" => "Active"
);

// Switch example (role-based logic)
switch ($userProfile["role"]) {
    case "Administrator":
        $accessLevel = "Full Access";
        break;

    case "Editor":
        $accessLevel = "Limited Access";
        break;

    default:
        $accessLevel = "Read Only";
}


/*************************************************
 * OUTPUT SECTION
 *************************************************/

echo "<h2>$siteName</h2>";

echo "<h3>Day 21 Output</h3>";
echo $greetingMessage . "<br>";
echo "Login Status: " . $loginStatus . "<br>";

echo "<h3>Day 22 Output</h3>";

// Loop through indexed array
echo "<strong>Skills:</strong><br>";
foreach ($skills as $skill) {
    echo "- $skill <br>";
}

// Access associative array
echo "<br><strong>User Profile:</strong><br>";
echo "Username: " . $userProfile["username"] . "<br>";
echo "Role: " . $userProfile["role"] . "<br>";
echo "Account Status: " . $userProfile["status"] . "<br>";
echo "Access Level: " . $accessLevel . "<br>";

?>
