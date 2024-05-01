 <?php
session_start();

if(isset($_SESSION['username'])) {
    // If the user is already logged in, redirect them to the home page
    header("Location: start.php");
    exit;
}

// Your login form logic goes here
?>
