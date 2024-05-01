<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Build Robot</title>
<style>
    body {
        background-color: silver;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background-color: white;
        border: 2px solid gold;
        padding: 20px;
        max-width: 400px;
        text-align: center;
        border-radius: 10px;
    }

    button {
        background-color: gold;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    button:hover {
        background-color: darkgoldenrod;
    }
</style>
</head>
<body>
<form action="" method="post">
    <label for="model">Select Robot Model:</label>
    <select name="model" id="model" required>
        <option value="Sonny">Sonny</option>
        <option value="Rosey">Rosey</option>
        <option value="SICO">SICO</option>
        <option value="Data">Data</option>
        <option value="Gort">Gort</option>
        <option value="Wall-E">Wall-E</option>
        <option value="Optimus Prime">Optimus Prime</option>
        <option value="Hal 9000">Hal 9000</option>
        <option value="Twiki">Twiki</option>
        <option value="Bender">Bender</option>
        <option value="Johnny 5">Johnny 5</option>
    </select><br><br>

    <label for="color">Select Robot Color:</label>
    <select name="color" id="color" required>
        <option value="Shiny">Shiny</option>
        <option value="Chrome">Chrome</option>
        <option value="Silver">Silver</option>
        <option value="Gold">Gold</option>
        <option value="Brass">Brass</option>
    </select><br><br>

    <label>Select Robot Size:</label><br>
    <input type="radio" id="giant" name="size" value="giant" required>
    <label for="giant">Giant</label><br>
    <input type="radio" id="normal" name="size" value="normal" required>
    <label for="normal">Normal</label><br>
    <input type="radio" id="nano" name="size" value="nano" required>
    <label for="nano">Nano</label><br><br>

    <label>Select Laws of Robotics:</label><br>
    <input type="checkbox" id="firstLaw" name="laws[]" value="First Law">
    <label for="firstLaw">First Law</label><br>
    <input type="checkbox" id="secondLaw" name="laws[]" value="Second Law">
    <label for="secondLaw">Second Law</label><br>
    <input type="checkbox" id="thirdLaw" name="laws[]" value="Third Law">
    <label for="thirdLaw">Third Law</label><br><br>

    <label for="os">Select Operating System:</label>
    <select name="os" id="os" required>
        <option value="Linux">Linux</option>
        <option value="Unix">Unix</option>
        <option value="SPARC">SPARC</option>
        <option value="Binary">Binary</option>
        <option value="DOS">DOS</option>
        <option value="Tiny Hamsters">Tiny Hamsters</option>
    </select><br><br>

    <button type="submit" name="build_robot">Build Robot</button>
</form>

</body>
</html>
