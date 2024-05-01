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

    #robot-info {
        background-color: white;
        border: 2px solid black;
        padding: 20px;
        max-width: 400px;
        text-align: center;
    }

    img {
        border: 5px solid gold;
        max-width: 100%;
        height: auto;
    }
</style>
</head>
<body>
<?php
if (isset($_POST['build_robot'])) {
    require_once 'Robot.php';

    // Get form values
    $model = $_POST['model'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $laws = isset($_POST['laws']) ? $_POST['laws'] : [];
    $os = $_POST['os'];
    
    // Define image paths with specified sizes
    $imagePaths = [
        "Sonny" => ["image" => "sonny.jpg", "width" => 200, "height" => 200],
        "Rosey" => ["image" => "rosie.png", "width" => 250, "height" => 250],
        "SICO" => ["image" => "sico.png", "width" => 180, "height" => 180],
        "Data" => ["image" => "data.png", "width" => 220, "height" => 220],
        "Gort" => ["image" => "gort.jpg", "width" => 190, "height" => 190],
        "Wall-E" => ["image" => "wall.png", "width" => 240, "height" => 240],
        "Optimus Prime" => ["image" => "prime.png", "width" => 210, "height" => 210],
        "Hal 9000" => ["image" => "hal.png", "width" => 230, "height" => 230],
        "Twiki" => ["image" => "twiki.jpg", "width" => 260, "height" => 260],
        "Bender" => ["image" => "bender.png", "width" => 220, "height" => 220],
        "Johnny 5" => ["image" => "johnny.jpg", "width" => 250, "height" => 250],
        // Add more mappings as needed
    ];

    // Check if the selected model exists in the imagePaths array
    if (isset($imagePaths[$model])) {
        // Get the selected image path and its size
        $image = $imagePaths[$model]['image'];
        $width = $imagePaths[$model]['width'];
        $height = $imagePaths[$model]['height'];
        
        // Create robot object
        $robot = new Robot($model, $color, $size, $laws, $os, $image); // Pass image parameter

        // Display built robot message and image
        echo "<div id='robot-info'>";
        echo "<p>{$robot} will be built shortly. Thank you.</p>";
        echo "</div>";

    } else {
        echo "<p>Selected robot image not found.</p>";
    }

} else {
    // Display form
    include 'form.php';
}
?>
</body>
</html>
