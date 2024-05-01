<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Acme Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Create Account</h1>
    </header>
    <main>
        <section id="account-form">
            <h2>Account Information</h2>
            <?php
            // Validate form submission and process account creation
            if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['verify-password'])) {
                // Assuming validation and account creation logic here

                // Redirect to confirmation page after successful account creation
                header("Location: confirmation.php");
                exit;
            }
            ?>
            <form action="accountcreate.php" method="post">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <label for="verify-password">Verify Password:</label><br>
                <input type="password" id="verify-password" name="verify-password"><br>
                <input type="submit" value="Create Account">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Acme Store. All rights reserved.</p>
    </footer>
</body>
</html>
