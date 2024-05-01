<?php
if (!isset($_POST['login'])) { // Show login form if login button not clicked
?>
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
                <form action="Spies.php" method="post">
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
<?php
} else { // Hide login form and show content after successful login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if (($username == 'chuck' && $password == 'roast') ||  ($username == 'car' && $password == 'toons') ||  ($username == 'dog' && $password == 'house') || ($username == 'bob' && $password == 'ross')) {
        // Successful login
        echo "<div class='success'>Access granted!</div>";

        // Read and display file content
        $file = 'fbi.html'; // You can change the filename here
        if (file_exists($file)) {
            $content = file_get_contents($file);
            echo "<div class='file-content'>$content</div>";
        } else {
            echo "<div class='error'>File not found!</div>";
        }
    } else {
        // Invalid credentials
        echo "<div class='error'>Access denied</div>";
    }
}
?>
