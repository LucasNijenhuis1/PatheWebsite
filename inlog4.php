<?php
// Start a new session
session_start();
require_once 'conn.php';
// Get the values submitted by the user
$username = $_POST['username'];
$password = $_POST['password'];
$data = [
    'username' => $username,
    'password' => $password
]


$sql = "SELECT * FROM users WHERE username=:username AND password=:password";
$stmt = $conn->prepare($sql);
$stmt->execute($data);
$user = $stmt->fetch();

// Perform validation of username and password, for example:
if ($user) {
    // Successful login
    // Set session variables to remember the user
    $_SESSION['user_id'] = $username;
    // Redirect to a logged-in pages
    header('Location: index.php');
} else {
    // Failed login
    echo "Invalid username or password.";
}
?>
