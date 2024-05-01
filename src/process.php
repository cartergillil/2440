 <?php
if(isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    
    // Regular expression for phone number validation
    $pattern = "/^\(\d{3}\)\d{3}-\d{4}$/";
    
    // Check if the phone number matches the pattern
    if(preg_match($pattern, $phone)) {
        // If valid, display a thank you message
        echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Phone Number Valid</title>
                    <link rel='stylesheet' href='Phoenumber.css'>
                </head>
                <body>
                    <div class='Home'>
                    <div class='font'>
    <div class='Center'>
                        <h1>Thank You!</h1>
                        <p>Your phone number <strong>$phone</strong> is valid.</p>
                        <div class='img2'>
                                                              <img src='thank.png' alt='Computer' width='150' height='150'>
</div>
                    </div>
                    </div>
                    </div>
                </body>
                </html>";
    } else {
        // If not valid, redirect back to index.php with an error message
        $error = "Phone number format is not valid. Please enter in the format (xxx)xxx-xxxx";
        header("Location: index.php?error=" . urlencode($error));
        exit();
    }
} else {
    // If phone number not provided, redirect back to index.php
    header("Location: index.php");
    exit();
}
?>
