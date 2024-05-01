 <?php
session_start(); // Start session to access session variables
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: Hash.php"); // Redirect to the login page
exit();
?>
