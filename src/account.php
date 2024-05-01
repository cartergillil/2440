<?php
session_start();

// Get the logged in user's name
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

// Define image paths corresponding to usernames
$imagePath = ''; // Initialize image path variable

// Check the username and set the image path accordingly
if ($username == 'bob') {
    $imagePath = 'bob.jpg';
} elseif ($username === 'car') {
    $imagePath = 'images/car.jpg';
} elseif ($username === 'chuck') {
    $imagePath = 'images/chuck.jpg';
} elseif ($username === 'dog') {
    $imagePath = 'images/dog.jpg';
} else {
    // Default image path if username does not match any specified images
    $imagePath = 'images/default.jpg';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <div class="navbar">
        <a href="Session.php">Home</a>
        <a href="video.php">Embedded Video</a>
        <a href="account.php">Account</a>
        <form action="Logout.php" method="post" style="float:right;">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>

    <h1>Welcome, <?php echo $username; ?></h1>
    <img src="<?php echo $imagePath; ?>" alt="User Image">

    <!-- Debugging output (remove in production) -->
    <p>Username: <?php echo $username; ?></p>
    <p>Image Path: <?php echo $imagePath; ?></p>
</body>
</html>
