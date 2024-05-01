<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <style>
        .Center2 {
            border: 5px outset #f5bd1f;
            text-align: center;
        }

        li a:hover {
            background-color: #EADFB4;
        }

        .active {
            background-color: #F6995C;
        }

        .active2 {
            background-color: #51829B;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: #191D88;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="Center2">
    <h1><?php echo "Home Page"; ?></h1>
    <ul>
        <li><a class="active" href="zHappyBirthday.php">Birthday</a></li>
        <li><a class="active2" href="Music.php">Music</a></li>
        <li><a class="active" href="PhoneNumber.html">Phone</a></li>
        <li><a class="active2" href="PhoneNumberValidation.php">PhoneNumber</a></li>
        <li><a class="active" href="poll.php">POLL</a></li>
        <li><a class="active" href="Spies.php">SPies R US</a></li>
        <li><a class="active" href="Session.php">Keep the session alive</a></li>
        <li><a class="active" href="spies.php">SPies R US2</a></li>
        <li><a class="active" href="poen.php">Poem</a></li>
        <li><a class="active" href="Hash.php">Hash Browns</a></li> <!-- Link to the starting page -->
                <li><a class="active" href="Builder.php">I, Object</a></li> <!-- Link to the starting page -->
                <li><a class="active" href="start.php">grocery</a></li> <!-- Link to the starting page -->

    </ul>
</div>
</body>
</html>
