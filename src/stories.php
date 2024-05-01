 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Story</title>
</head>
<body>
    <h1>View Story</h1>
    
    <?php
    if (isset($_GET['storySelect'])) {
        $storyName = $_GET['storySelect'];
        
        // Define the directory where story files are located
        $storyDirectory = './stories/';
        
        // Map story names to file names
        $storyFiles = [
            'jack_and_the_beanstalk' => 'jack_and_the_beanstalk.txt',
            // Add more stories here if needed
        ];
        
        // Check if the requested story exists
        if (array_key_exists($storyName, $storyFiles)) {
            $storyFileName = $storyFiles[$storyName];
            $storyFilePath = $storyDirectory . $storyFileName;
            
            // Check if the story file exists
            if (file_exists($storyFilePath)) {
                // Read the content of the story file
                $storyContent = file_get_contents($storyFilePath);
                
                // Display the story content
                echo "<pre>$storyContent</pre>";
            } else {
                echo "Story file not found!";
            }
        } else {
            echo "Invalid story!";
        }
    } else {
        echo "No story selected!";
    }
    ?>

    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
