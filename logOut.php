<?php
session_start(); // Start or resume the session

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect the user to the login page (or any other desired page)
    header("Location: http://localhost/photostudio/index.php");
    exit;
} else {
    // If the user is not logged in, you can redirect them to a login page or another appropriate location.
    header("Location: http://localhost/photostudio/index.php");
    exit;
}
?>