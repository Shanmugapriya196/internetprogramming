<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your simple login logic (you can customize this)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password match your criteria
    if ($username === "shan" && $password === "shan") {
        // Redirect to restaurant.php on successful login
        header("Location: restaurant.php");
        exit();
    } else {
        // Redirect back to the login page with an error parameter
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // Redirect back to the login page if the form is not submitted
    header("Location: index.php");
    exit();
}
?>
