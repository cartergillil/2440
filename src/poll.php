<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Poll</title>
    <link rel="stylesheet" href="poll.css">
</head>
<body>
    <div class="container">
        <h1>Survey Poll</h1>
<form action="<?php echo htmlspecialchars($_SERVER["localhost"]); ?>" method="post">
            <p>What is your favorite color?</p>
            <input type="radio" id="red" name="color" value="red">
            <label for="red">Red</label><br>
            <input type="radio" id="blue" name="color" value="blue">
            <label for="blue">Blue</label><br>
            <input type="radio" id="green" name="color" value="green">
            <label for="green">Green</label><br>
            <input type="radio" id="yellow" name="color" value="yellow">
            <label for="yellow">Yellow</label><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <div>
            <?php
            // Database connection
            $servername = "LAPTOP-AFQV3EFP";
            $username = "root";
            $password = "1550";
            $dbname = "colors";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Handle form submission
            if (isset($_POST['submit'])) {
                // Get the color selected by the user
                $color = $_POST['color'];

                // Prepare the SQL query with a placeholder for the color value
                $sql_insert = "INSERT INTO poll_results (color) VALUES (?)";

                // Prepare the statement
                $stmt = mysqli_prepare($conn, $sql_insert);

                // Bind the color parameter
                mysqli_stmt_bind_param($stmt, "s", $color);

                // Execute the statement
                if (mysqli_stmt_execute($stmt)) {
                    echo "<p>Thank you for your response!</p>";
                } else {
                    echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
                }

                // Close the statement
                mysqli_stmt_close($stmt);
            }

            // Display poll results
            $sql_select = "SELECT color, COUNT(*) AS count 
                           FROM poll_results 
                           GROUP BY color 
                           ORDER BY count DESC";
            $result = mysqli_query($conn, $sql_select);

            if (mysqli_num_rows($result) > 0) {
                echo "<h2>Poll Results:</h2>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row['color'] . ": " . $row['count'] . "</p>";
                }
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>
