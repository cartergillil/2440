 <?php
// Database connection details
$servername = "LAPTOP-AFQV3EFP";
$username = "root";
$password = "1550";
$dbname = "spies;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to authenticate user
function authenticate_user($conn, $username, $password) {
    // Sanitize input
    $username = sanitize_input($username);
    $password = sanitize_input($password);

    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    // Execute SQL statement
    $result = $conn->query($sql);

    // Check if user exists
    if ($result->num_rows > 0) {
        return true; // User authenticated successfully
    } else {
        return false; // User authentication failed
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Authenticate user
    if (authenticate_user($conn, $username, $password)) {
        // Access granted, display file contents
        $file_contents = file_get_contents("includes/fbi.txt");
        echo "<div class='message'>Access granted!</div>";
        echo "<div class='file-contents'>$file_contents</div>";
    } else {
        // Access denied
        echo "<div class='message'>Access denied. Invalid username or password.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spies R. Us</title>
        <link rel="stylesheet" href="spies.css">
</head>
<body>
    <div class="container">
        <h2>Spies R. Us</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
