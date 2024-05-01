<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Acme Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Centering container */
        .button-container {
            text-align: center;
        }

        /* Styling for buttons */
        .button-container input[type="submit"],
        .button-container a {
            margin: 5px;
            padding: 8px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .button-container input[type="submit"]:hover,
        .button-container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Acme Store</h1>
    </header>
    <main>
        <section id="about">
            <img src="acme.png" alt="About Us Image">
            <h2>About Us</h2>
            <div class="about-content">
                <p>Welcome to Acme Store, your one-stop shop for all your quirky needs! We offer a wide range of products guaranteed to make your life more interesting. Explore our catalog and start shopping today!</p>
            </div>
        </section>
        <section id="login">
            <?php
            session_start();
            // Simple login authentication
            $valid_username = "bob";
            $valid_password = "poop";

            if(isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if($username === $valid_username && $password === $valid_password) {
                    // Valid username and password, set session and redirect
                    $_SESSION['username'] = $username;
                    header("Location: catalog.php"); // Redirect to catalog.php or any other page
                    exit;
                } else {
                    echo "<p>Login failed. Please try again.</p>";
                }
            }

            if(isset($_POST['guest'])) {
                // Set session for guest user and redirect
                $_SESSION['username'] = "Guest";
                header("Location: catalog.php"); // Redirect to catalog.php or any other page
                exit;
            }

            if(isset($_SESSION['username'])) {
                echo "<p>Welcome back, ".$_SESSION['username']."!</p>";
            } else {
                echo "<form action='' method='post'>"; // Changed action to empty string
                echo "<label for='username'>Username:</label>";
                echo "<input type='text' id='username' name='username'>";
                echo "<label for='password'>Password:</label>";
                echo "<input type='password' id='password' name='password'>";
                // Button container for centering
                echo "<div class='button-container'>";
                echo "<input type='submit' value='Login'>";
                echo "<input type='hidden' name='guest' value='true'>"; // Hidden field to detect Guest button click
                echo "<input type='submit' value='Guest'>"; // Guest button
                echo "<a href='accountcreate.php'>Create Account</a>"; // Styled Create Account link
                echo "</div>";
                echo "</form>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Acme Store. All rights reserved.</p>
    </footer>
</body>
</html>
