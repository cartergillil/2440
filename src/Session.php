<?php
session_start();

// Check if logout button is clicked
if (isset($_POST['logout'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: Session.php"); // Redirect to Session.php
    exit;
}

// Check if user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // If logged in, show content
    echo "<div class='success'>Access granted!</div>";
    // Display logout button and home link
    echo "<form action='' method='post'>";
    echo "<button type='submit' name='logout'>Logout</button>";
    echo "<a href='fbi2.php'>Home</a>";
    echo "</form>";
    // Read and display file content
    $file = 'fbi2.php'; // You can change the filename here
    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo "<div class='file-content'>$content</div>";
    } else {
        echo "<div class='error'>File not found!</div>";
    }
} else {
    // If not logged in, show login form
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="spies.css">
    </head>
    <body>
        <div class="container">
            <div class="Center">
                <div class="img2">
                    <img src="fbi.png" width="200" height="180">
                </div>
                <h2>Login</h2>
                <form action="Session.php" method="post">
                    <div class="input-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="btn-group">
                        <button type="submit" name="login">Login</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>
HTML;
}

// Check if login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if (($username == 'chuck' && $password == 'roast') ||  
        ($username == 'car' && $password == 'toons') ||  
        ($username == 'dog' && $password == 'house') || 
        ($username == 'bob' && $password == 'ross')) {
        // Set session variables indicating successful login
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username; // Set username in session
        // Redirect to home page
        header("Location: fbi2.php");
        exit;
    } else {
        // Invalid credentials
        echo "<div class='error'>Access denied</div>";
    }

    // Debugging: Output username and session variables
    echo "Username: $username<br>";
    echo "Session username: {$_SESSION['username']}<br>";
    echo "Session logged_in: {$_SESSION['logged_in']}<br>";
}
?>
