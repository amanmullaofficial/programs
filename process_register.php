<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form submitted using the POST method
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
} else {
    // Form submitted using the GET method
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? '';
}

// Display the submitted data
echo "<h2>Registration Successful!</h2>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
?>