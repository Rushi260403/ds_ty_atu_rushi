<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Dummy login values
    $username = "admin";
    $password = "12345";

    // Input from user
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Check login
    if ($user == $username && $pass == $password) {
        echo "<h2>Login Successful ✅</h2>";
        echo "<p>Welcome, $user!</p>";
    } else {
        echo "<h2>Login Failed ❌</h2>";
        echo "<p>Invalid username or password</p>";
    }
}
?>
