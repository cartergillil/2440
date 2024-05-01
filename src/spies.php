<?php
session_start();

// Function to destroy session and redirect to index.php
function logout() {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}

// Check if logout button is clicked
if (isset($_POST['logout'])) {
    logout();
}

// Check if user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Show content since user is logged in
    echo "<div class='success'>Access granted!</div>";
    // Read and display file content
    $file = 'fbi.html'; // You can change the filename here
    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo "<div class='file-content'>$content</div>";
    } else {
        echo "<div class='error'>File not found!</div>";
    }
    // Display logout button and home link
    echo "<form action='' method='post'>";
    echo "<button type='submit' name='logout'>Logout</button>";
    echo "<a href='index.php'>Home</a>";
    echo "</form>";
} else {
    // Show login form if user is not logged in
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
                <form action="" method="post">
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
    if (($username == 'chuck' && $password == 'roast') ||  ($username == 'car' && $password == 'toons') ||  ($username == 'dog' && $password == 'house') || ($username == 'bob' && $password == 'ross')) {
        // Set session variable indicating successful login
        $_SESSION['logged_in'] = true;
        // Redirect to home page
        header("Location: index.php");
        exit;
    } else {
        // Invalid credentials
        echo "<div class='error'>Access denied</div>";
    }
}
?>
