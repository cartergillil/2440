 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
    <h2>Create Account</h2>
    <form action="process-account.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="verify_password">Verify Password:</label>
        <input type="password" id="verify_password" name="verify_password" required><br>
        <input type="submit" value="Create Account">
        <input type="reset" value="Reset">
    </form>
    <a href="Hash.php">Back to Login</a>
</body>
</html>
