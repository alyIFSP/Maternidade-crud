<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["usuario"])) {
    // Unset the user data
    unset($_SESSION["usuario"]);

    // Destroy the session
    session_destroy();

    // Redirect back to the index page or any other page you prefer
    header("Location: ./../index.php");
    exit;
} else {
    // If the user is not logged in, simply redirect to the index page
    header("Location: ./../index.php");
    exit;
}
?>
