<?php
session_start();

// Check if logout button is clicked
if (isset($_POST['logout'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: Hash.php"); // Redirect to Session.php
    exit;
}

// Initialize login attempts counter if not already set
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

// Check if user is already logged in or if the account is locked
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // If logged in, show content
    echo "<div class='success'>Access granted!</div>";
    // Display logout button and home link
    echo "<form action='' method='post'>";
    echo "<button type='submit' name='logout'>Logout</button>";
    echo "<a href='classified.php'>Home</a>";
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
    // If not logged in or locked, show login form
    if ($_SESSION['login_attempts'] < 3) {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Page</title>
            <link rel="stylesheet" href="spies21.css">
        </head>
        <body>
            <div class="container">
                <div class="Center">
                    <div class="img2">
                        <img src="fbi.png" width="200" height="180">
                    </div>
                    <h2>Login</h2>
                    <form action="Hash.php" method="post">
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
    } else {
        // If login attempts exceeded, display account locked message
        echo "<div class='error'>Account Locked</div>";
    }
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
        $_SESSION['login_attempts']++; // Increment login attempts
        if ($_SESSION['login_attempts'] >= 3) {
            // Display account locked message
            echo "<div class='error'>Account Locked</div>";
            // Exit without displaying the login form
            exit;
        } else {
            // Display access denied message
            echo "<div class='error'>Access denied</div>";
        }
    }
}
?>
