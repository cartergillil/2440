 <!DOCTYPE html>
<html lang="en">
<head>
<body>
 <div class="Home">
 </body>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validation</title>
    <link rel="stylesheet" href="Phoenumber.css">
</head>
<body>
<div class="font">
    <div class="Center">
        <h1>Phone Number Validation</h1>
        <?php if(isset($_GET['error'])): ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>
        <form action="process.php" method="post">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="\(\d{3}\)\d{3}-\d{4}" title="Please enter a phone number in the format (xxx)xxx-xxxx" required>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
        <div class="img">
                                      <img src="phone.png" alt="Computer" width="100" height="100">
<div>
    </div>
    
</body>
</html>
