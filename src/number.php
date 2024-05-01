<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <link rel="stylesheet" href="Phone.css">

    <title>Thank You</title>
</head>
    <div class="Home">

<head>
    <div class="Center">

        <img src="bigk.png" alt="Happy Birthday Image" width="500" height="400">
    </div>
</head>
<body>
    <div class="font">
    <div class="Center">

    <h1>Thank You</h1>

    <?php
    // Check if the form is submitted and the required fields are provided
    if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["Phonenumber"]) && isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"])  && isset($_POST["Review"])) {
                $Phonenumber = $_POST["Phonenumber"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
                $Review = $_POST["Review"];

        echo "<p>Thank you, $firstName $lastName, for providing your information.</p>";
        echo "<p>We've recorded your email address as $email. </p>";
                echo "<p>We've recorded your Phone Number as $Phonenumber. </p>";
                                echo "<p>Your review: '$Review' We appreciate your review but sadly our business is closing so we cant get back to you. Have a nice day. </p>";


    } else {
        // Display an error message if the form is not submitted or required fields are not provided
        echo "<p>Something went wrong. Please try again.</p>";
    }
    ?>
    </div>
    </div>
</body>
</html>
