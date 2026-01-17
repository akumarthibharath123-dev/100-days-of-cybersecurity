<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
  <style>

    body {
    font-family: Arial, sans-serif;
    background: #f2f2f2;
}

form {
    background: white;
    width: 350px;
    margin: 60px auto;
    padding: 20px;
    border-radius: 5px;
}

label {
    display: block;
    margin-top: 10px;
}

input {
    width: 100%;
    padding: 8px;
    margin-top: 4px;
}

button {
    margin-top: 15px;
    padding: 10px;
    width: 100%;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

  </style>
    
  
</head>
<body>

<h2>Student Registration Form</h2>

<!-- Form bridges frontend to backend -->
<form action="index.php" method="POST">

    <label for="name">Full Name</label>
    <input type="text" id="name" name="fullname" required>

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" required>

    <button type="submit">Submit</button>

</form>

</body>
</html>


<?php
// PHP logic starts here

// Collect data using name attributes
$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$password = $_POST['password'];
$dob      = $_POST['dob'];

// Simple output (logic demonstration)
echo "<h2>Form Data Received Successfully</h2>";

echo "Name: " . $fullname . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password . "<br>";
echo "Date of Birth: " . $dob . "<br>";

?>
