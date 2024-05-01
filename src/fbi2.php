<?php

session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Classified</title>
<style>
    body {
        background-color: #FFE766;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #000080;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        color: White;
    }
    th {
        background-color: #f2f2f2;
    }
    .navbar {
        background-color: #333;
        overflow: hidden;
    }
    .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }
    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
</style>
</head>
<body>

<div class="navbar">
    <a href="Session.php">Home</a>
    <a href="video.php">Embedded Video</a>
    <a href="account.php">Account</a>
    <form action="Logout2.php" method="post" style="float:right;">
        <button type="submit" name="logout">Logout</button>
    </form>
</div>

<table>
  <tr>
    <th>Agent</th>
    <th>Codename</th>
  </tr>
  <tr>
    <td>Skinner</td>
    <td>Gatekeeper</td>
  </tr>
  <tr>
    <td>Csm</td>
    <td>Alien</td>
  </tr>
  <tr>
    <td>Dana</td>
    <td>Skeptic</td>
  </tr>
  <tr>
    <td>Fox</td>
    <td>Believer</td>
  </tr>
</table>

</body>
</html>
