<?php
// Function to generate a random salt
function generateSalt($length = 32) {
    return bin2hex(random_bytes($length));
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];
$verify_password = $_POST['verify_password'];

// Check if passwords match
if ($password !== $verify_password) {
    echo "Passwords do not match.";
    exit;
}

// Hash the password
$salt = generateSalt();
$hashed_password = hash('sha256', $password . $salt);

// Define the path to the user data file
$user_data_file = 'user_data.json';

// Check if the file exists
if (file_exists($user_data_file)) {
    // Read the existing user data from the file
    $users = json_decode(file_get_contents($user_data_file), true);
} else {
    // Create an empty array if the file doesn't exist
    $users = [];
}

// Check if the username already exists
foreach ($users as $user) {
    if ($user['username'] === $username) {
        echo "Username already exists.";
        exit;
    }
}

// Add the new user to the array
$users[] = array('username' => $username, 'password' => $hashed_password, 'salt' => $salt);

// Write the updated user data back to the file
file_put_contents($user_data_file, json_encode($users));

echo "User account created successfully.";
?>
